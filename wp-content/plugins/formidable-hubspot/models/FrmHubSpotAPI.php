<?php


class FrmHubSpotAPI {

	protected $api_key;

	protected $entry_id = 0;

	protected $action;

	protected $list_cache     = 'frm_hubspot_lists';
	protected $property_cache = 'frm_hubspot_properties';

	public function __construct() {
		$frm_hubspot_settings = new FrmHubSpotSettings();
		$this->api_key = $frm_hubspot_settings->settings->api_key;
	}

	/**
	 * Clear the API cache.
	 *
	 * @since 1.06
	 */
	public function clear_cache() {
		delete_transient( $this->list_cache );
		delete_transient( $this->property_cache );
	}

	/**
	 * Check if the API key is valid.
	 *
	 * @param string $key The new api key to check.
	 * @return boolean True if valid key.
	 *
	 * @since 1.07
	 */
	public function is_valid_api_key( $key ) {
		$this->api_key = $key;
		$lists = $this->fetch_lists();
		$valid = ! empty( $lists );
		if ( $valid && is_object( $lists ) && isset( $lists->status ) && 'error' === $lists->status ) {
			$valid = false;
		}
		return $valid;
	}

	/**
	 * Get Lists from HubSpot
	 *
	 * @since  1.0
	 * @return Campaigns Array
	 */
	public function fetch_lists() {
		$lists = get_transient( $this->list_cache );

		if ( ! empty( $lists ) || empty( $this->api_key ) ) {
			return $lists;
		}

		$response = wp_remote_retrieve_body( wp_remote_get( $this->hubspot_url( '/lists' ) . '&count=300' ) );
		$lists = json_decode( $response );

		if ( ! is_object( $lists ) || is_wp_error( $lists ) ) {
			$this->show_error( $lists );
			$lists = false;
		} else {
			if ( empty( $lists->lists ) ) {
				$this->show_error( $lists );
			}
			set_transient( $this->list_cache, $lists, DAY_IN_SECONDS );
		}

		return $lists;
	}

	/**
	 * Alphabetize the list of options in the form action
	 *
	 * @since 1.06
	 * @return array|object
	 */
	public function fetch_ordered_properties() {
		$properties = $this->fetch_properties();
		if ( is_wp_error( $properties ) || ! is_array( $properties ) ) {
			return $properties;
		}

		foreach ( $properties as $k => $group ) {
			$order = array();
			foreach ( $group->properties as $k2 => $property ) {
				if ( ! $property->readOnlyValue ) { // phpcs:ignore WordPress.NamingConventions
					if ( $property->favorited ) {
						// phpcs:ignore WordPress.NamingConventions
						$display_order = $property->favoritedOrder > -1 ? $property->favoritedOrder : 100;
					} else {
						// phpcs:ignore WordPress.NamingConventions
						$display_order = ( $property->displayOrder > -1 ? $property->displayOrder : 100 ) + 100;
					}
					$order[ $k2 ] = $display_order;
				}
			}
			asort( $order );

			$ordered = array();
			foreach ( $order as $k2 => $label ) {
				$ordered[ $k2 ] = $properties[ $k ]->properties[ $k2 ];
			}
			$properties[ $k ]->properties = $ordered;
			if ( empty( $properties[ $k ]->properties ) ) {
				// Prevent empty headings.
				unset( $properties[ $k ]->properties );
			}
		}

		return $properties;
	}

	/**
	 * Get User defined Custom fields from HubSpot
	 *
	 * @since  1.0
	 * @return Custom Fields Array
	 */
	public function fetch_properties() {
		$properties = get_transient( $this->property_cache );
		if ( ! empty( $properties ) || empty( $this->api_key ) ) {
			return $properties;
		}

		$url = $this->hubspot_url( '/groups', 'v2' );
		$response = wp_remote_retrieve_body( wp_remote_get( $url . '&includeProperties=true' ) );
		$properties = json_decode( $response );

		if ( ! is_wp_error( $properties ) && is_array( $properties ) ) {
			set_transient( $this->property_cache, $properties, DAY_IN_SECONDS );
		} else {
			$this->show_error( $properties );
			$properties = false;
		}

		return $properties;
	}

	/**
	 * Add user to Hubspot
	 *
	 * @since  1.0
	 * @return Status Code
	 */
	public function subscribe_to_list( $subscriber, $list_id, $atts = array() ) {
		if ( ! array( $atts ) ) {
			// For reverse compatibility.
			$atts = array(
				'email_id' => $atts,
			);
		}
		$this->set_entry( $atts );
		$body = json_encode( $subscriber );

		$contact_id = $this->create_contact( $body, $atts['email_id'] );

		$this->add_contact_to_list( $contact_id, $list_id );
	}

	/**
	 * Initialize the class variables.
	 *
	 * @param array $atts - The action and entry object passed to the class.
	 * @since 1.07
	 */
	private function set_entry( $atts ) {
		if ( isset( $atts['entry'] ) ) {
			$this->entry_id  = $atts['entry']->id;
		}

		if ( isset( $atts['action'] ) ) {
			$this->action = $atts['action'];
		}
	}

	/**
	 * Create a contact or update if it already exists.
	 *
	 * @param string $body - The JSON data to send.
	 * @param string $email_field - The subscriber email to check.
	 */
	private function create_contact( $body, $email_field ) {
		$contact = $this->remote_request( '/contact/createOrUpdate/email/' . $email_field, compact( 'body' ) );
		$error   = is_object( $contact ) && isset( $contact->status ) && 'error' !== $contact->status;

		if ( ! is_wp_error( $contact ) && is_object( $contact ) && ! $error ) {
			$contact_id = $contact->vid;
		} else {
			$contact_id = false;
		}

		return $contact_id;
	}

	private function add_contact_to_list( $contact_id, $list_id ) {
		if ( ! empty( $contact_id ) && ! empty( $list_id ) ) {
			$contact = array(
				'vids' => array( $contact_id ),
			);
			$body = json_encode( $contact );

			$this->remote_request( '/lists/' . $list_id . '/add', compact( 'body' ) );
		}
	}

	private function remote_request( $endpoint, $args = array() ) {
		$request = $this->prepare_request( $args );
		$url     = $this->hubspot_url( $endpoint );
		$result  = wp_remote_request( $url, $request );

		$this->log_results(
			array(
				'response' => $result,
				'headers'  => $request['headers'],
				'body'     => json_encode( $request ),
				'url'      => $url,
			)
		);

		// Handle response.
		if ( is_wp_error( $result ) ) {
			$response = $result->get_error_message();
		} else {
			$response = json_decode( wp_remote_retrieve_body( $result ) );
		}

		return $response;
	}

	private function prepare_request( $args ) {
		$request = array(
			'method'  => isset( $args['method'] ) ? $args['method'] : 'POST',
			'headers' => array(
				'content-type' => 'application/json',
			),
		);
		if ( isset( $args['body'] ) ) {
			$request['body'] = $args['body'];
		}

		return $request;
	}

	private function hubspot_url( $endpoint, $version = 'v1' ) {
		$api_key = $this->api_key;
		return 'https://api.hubapi.com/contacts/' . $version . $endpoint . '?hapikey=' . $api_key;
	}

	/**
	 * Print the error respone on the page.
	 *
	 * @param mixed $response
	 *
	 * @since 1.07
	 */
	private function show_error( $response ) {
		if ( is_array( $response ) && isset( $response['success'] ) && 1 === $response['success'] ) {
			return;
		}

		$message = ( is_object( $response ) && isset( $response->message ) ) ? $response->message : $response;

		echo '<div class="frm_error frm_error_style">' . esc_html( print_r( $message, 1 ) ) . '</div>';
	}

	/**
	 * Send the API request and response to the Formidable Logs plugin.
	 *
	 * @param array $atts
	 *
	 * @since 1.07
	 */
	public function log_results( $atts ) {
		if ( ! class_exists( 'FrmLog' ) || empty( $this->entry_id ) ) {
			return;
		}

		$body    = wp_remote_retrieve_body( $atts['response'] );
		$content = $this->process_response( $atts['response'], $body );
		$message = isset( $content['message'] ) ? $content['message'] : '';
		$headers = '';
		$this->array_to_list( $atts['headers'], $headers );

		$log = new FrmLog();
		$log->add(
			array(
				'title'   => __( 'HubSpot:', 'formidable-hubspot' ) . ' ' . $this->action->post_title,
				'content' => (array) $body,
				'fields'  => array(
					'entry'   => $this->entry_id,
					'action'  => $this->action->ID,
					'code'    => isset( $content['code'] ) ? $content['code'] : '',
					'url'     => $atts['url'],
					'message' => $message,
					'request' => $atts['body'],
				),
			)
		);
	}

	/**
	 * After the API response is received, determine if it's the response
	 * needed and expected.
	 *
	 * @param mixed $response
	 * @param mixed $body
	 *
	 * @since 1.07
	 */
	private function process_response( $response, $body ) {
		$processed = array(
			'message' => '',
			'code'    => 'FAIL',
		);

		if ( is_wp_error( $response ) ) {
			$processed['message'] = $response->get_error_message();
		} elseif ( 'error' === $body || is_wp_error( $body ) ) {
			$processed['message'] = __( 'You had an HTTP connection error', 'formidable-api' );
		} elseif ( isset( $response['response'] ) && isset( $response['response']['code'] ) ) {
			$processed['code'] = $response['response']['code'];
			$processed['message'] = $response['body'];
		}

		return $processed;
	}

	/**
	 * Convert an array to a labeled list for display.
	 *
	 * @param array  $array
	 * @param string $list
	 *
	 * @since 1.07
	 */
	private function array_to_list( $array, &$list ) {
		foreach ( $array as $k => $v ) {
			$list .= "\r\n" . $k . ': ' . $v;
		}
	}
}
