<?php

class FrmHubSpotAppController {
	public static $min_version = '2.0';

	public static function min_version_notice() {
		$frm_version = is_callable( 'FrmAppHelper::plugin_version' ) ? FrmAppHelper::plugin_version() : 0;

		// check if Formidable meets minimum requirements
		if ( version_compare( $frm_version, self::$min_version, '>=' ) ) {
			return;
		}

		$wp_list_table = _get_list_table( 'WP_Plugins_List_Table' );
		echo '<tr class="plugin-update-tr active"><th colspan="' . (int) $wp_list_table->get_column_count() . '" class="check-column plugin-update colspanchange"><div class="update-message">' .
			esc_html( 'You are running an outdated version of Formidable. This plugin needs Formidable v2.0 + to work correctly.', 'formidable' ) .
			'</div></td></tr>';
	}

	public static function include_updater() {
		if ( class_exists( 'FrmAddon' ) ) {
			include self::path() . '/models/FrmHubSpotUpdate.php';
			FrmHubSpotUpdate::load_hooks();
		}

	}

	public static function path() {
		return dirname( dirname( __FILE__ ) );
	}

		/**
	 *
	 * @since 2.01
	 */
	public static function plugin_url() {
		return plugins_url() . '/' . basename( self::path() );
	}

	public static function hidden_form_fields( $form, $form_action ) {
		$form->options = maybe_unserialize( $form->options );
		if ( ! isset( $form->options['hubspot'] ) || ! $form->options['hubspot'] || ! isset( $form->options['hubspot_list'] ) || ! is_array( $form->options['hubspot_list'] ) ) {
			return;
		}

		echo '<input type="hidden" name="frm_hubspot" value="1"/>' . "\n";

		if ( 'update' != $form_action ) {
			return;
		}

		global $frm_vars, $frm_editing_entry;
		$list = reset( $form->options['hubspot_list'] );
		$field_id = $list['fields']['email'];
		$edit_id = ( is_array( $frm_vars ) && isset( $frm_vars['editing_entry'] ) ) ? $frm_vars['editing_entry'] : $frm_editing_entry;
		$email = FrmEntryMeta::get_entry_meta( (int) $edit_id, $field_id );

		echo '<input type="hidden" name="frm_hubspot_email" value="' . esc_attr( $email ) . '"/>' . "\n";
	}

	public static function trigger_hubspot( $action, $entry, $form ) {
		$settings = $action->post_content;
		$email_id = ''; // Email id is optional to create contact in hubspot but needed to update existing contact
		$vars = self::prepare_mapped_values( $action->post_content, $entry );

		$subscriber = self::prepare_subscriber( $settings, $entry, $vars );
		if ( ! empty( $subscriber['email'] ) ) {
			$email_id = $subscriber['email'];
			unset( $subscriber['email'] );
		}

		$list_id = ! empty( $settings['list_id'] ) ? $settings['list_id'] : '';

		$api = new FrmHubSpotAPI();
		$pass = array(
			'action'   => $action,
			'entry'    => $entry,
			'email_id' => $email_id,
		);
		$lists = $api->subscribe_to_list( $subscriber, $list_id, $pass );
	}

	private static function prepare_mapped_values( $settings, $entry ) {
		$vars = array();
		foreach ( $settings['fields'] as $field_tag => $field_id ) {
			if ( empty( $field_id ) ) {
				// don't sent an empty value
				continue;
			}

			if ( ! is_numeric( $field_id ) ) {
				// If the value is set directly in the settings.
				$vars[ $field_tag ] = $field_id;
				continue;
			}

			$vars[ $field_tag ] = self::get_entry_or_post_value( $entry, $field_id );
			if ( is_numeric( $vars[ $field_tag ] ) ) {
				$field = FrmField::getOne( $field_id );
				if ( 'user_id' == $field->type ) {
					$user_data = get_userdata( $vars[ $field_tag ] );
					if ( 'email' == $field_tag ) {
						$vars[ $field_tag ] = $user_data->user_email;
					} elseif ( 'first_name' == $field_tag ) {
						$vars[ $field_tag ] = $user_data->first_name;
					} elseif ( 'last_name' == $field_tag ) {
						$vars[ $field_tag ] = $user_data->last_name;
					} else {
						$vars[ $field_tag ] = $user_info->user_login;
					}
				} else {
					if ( 'file' == $field->type ) {
						//get file url
						$vars[ $field_tag ] = FrmProEntriesController::get_field_value_shortcode(
							array(
								'field_id' => $field_id,
								'entry_id' => $entry->id,
								'show' => '1',
								'html' => 0,
							)
						);
					} else {
						$vars[ $field_tag ] = FrmEntriesHelper::display_value(
							$vars[ $field_tag ],
							$field,
							array(
								'type' => $field->type,
								'truncate' => false,
								'entry_id' => $entry->id,
							)
						);
					}
				}
			}

			if ( is_array( $vars[ $field_tag ] ) ) {
				$vars[ $field_tag ] = implode( ';', $vars[ $field_tag ] );
			}
		}

		return $vars;
	}

	private static function prepare_subscriber( $settings, $entry, $vars ) {
		$subscriber = array();

		// Contact fields
		foreach ( $vars as $custom_field_id => $value ) {
			if ( 'blog_default_hubspot_blog_subscription' !== $custom_field_id ) {
				$subscriber['properties'][] = array(
					'property' => $custom_field_id,
					'value' => $value,
				);

				if ( 'email' == $custom_field_id ) {
					$subscriber['email'] = $value;
				}
			}
		}

		if ( ! empty( $settings['fields']['blog_default_hubspot_blog_subscription'] ) ) {
			$subscriber['properties'][] = array(
				'property' => 'blog_default_hubspot_blog_subscription',
				'value' => $settings['fields']['blog_default_hubspot_blog_subscription'],
			);
		}

		return $subscriber;
	}

	public static function get_entry_or_post_value( $entry, $field_id ) {
		$value = '';
		if ( ! empty( $entry ) && isset( $entry->metas[ $field_id ] ) ) {
			$value = $entry->metas[ $field_id ];
		} else if ( isset( $_POST['item_meta'][ $field_id ] ) ) { // WPCS: CSRF ok.
			$value = sanitize_text_field( wp_unslash( $_POST['item_meta'][ $field_id ] ) ); // WPCS: CSRF ok.
		}
		return $value;
	}
}
