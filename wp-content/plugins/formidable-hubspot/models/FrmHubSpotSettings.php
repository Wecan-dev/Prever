<?php

class FrmHubSpotSettings {
	public $settings;

	public function __construct() {
		$this->set_default_options();
	}

	public function default_options() {
		return array(
			'api_key' => '',
		);
	}

	public function set_default_options( $settings = false ) {
		$default_settings = $this->default_options();

		if ( ! $settings ) {
			$settings = $this->get_options();
		} elseif ( true === $settings ) {
			$settings = new stdClass();
		}

		if ( ! isset( $this->settings ) ) {
			$this->settings = new stdClass();
		}

		foreach ( $default_settings as $setting => $default ) {
			if ( is_object( $settings ) && isset( $settings->{$setting} ) ) {
				$this->settings->{$setting} = $settings->{$setting};
			}

			if ( ! isset( $this->settings->{$setting} ) ) {
				$this->settings->{$setting} = $default;
			}
		}
	}

	public function get_options() {
		$settings = get_option( 'frm_hubspot_options' );

		if ( ! is_object( $settings ) ) {
			if ( $settings ) { // workaround for W3 total cache conflict
				$settings = unserialize( serialize( $settings ) );
			} else {
				// If unserializing didn't work
				if ( ! is_object( $settings ) ) {
					if ( $settings ) { // workaround for W3 total cache conflict
						$settings = unserialize( serialize( $settings ) );
					} else {
						$settings = $this->set_default_options( true );
					}
					$this->store();
				}
			}
		} else {
			$this->set_default_options( $settings );
		}

		return $this->settings;
	}

	public function update( $params ) {
		$settings = $this->default_options();
		$previous = $this->settings->api_key;

		foreach ( $settings as $setting => $default ) {
			if ( isset( $params[ 'frm_hubspot_' . $setting ] ) ) {
				$this->settings->{$setting} = sanitize_text_field( $params[ 'frm_hubspot_' . $setting ] );
			}
			unset( $setting, $default );
		}

		if ( $previous !== $this->settings->api_key ) {
			// The API key was changed.
			$this->check_api_key();
		}
	}

	/**
	 * If the API key has changed, clear the cache and check the new key.
	 *
	 * @since 1.07
	 */
	private function check_api_key() {
		$api = new FrmHubSpotAPI();
		$api->clear_cache();

		if ( empty( $this->settings->api_key ) ) {
			return;
		}

		if ( $api->is_valid_api_key( $this->settings->api_key ) ) {
			echo '<div class="frm_updated_message">' . esc_html__( 'HubSpot API key accepted', 'formidable-hubspot' ) . '</div>';
		}
	}

	public function store() {
		// Save the posted value in the database
		update_option( 'frm_hubspot_options', $this->settings );
	}
}
