<?php

class FrmHubSpotSettingsController {

	public static function add_settings_section( $sections ) {
		$sections['hubspot'] = array(
			'class'    => 'FrmHubSpotSettingsController',
			'function' => 'route',
			'name'     => 'HubSpot',
			'icon'     => 'frmfont frm_hubspot_icon',
		);
		return $sections;
	}

	public static function register_actions( $actions ) {
		$actions['hubspot'] = 'FrmHubSpotAction';

		include_once FrmHubSpotAppController::path() . '/models/FrmHubSpotAction.php';

		return $actions;
	}

	/**
	 * Clear the API cache when the clear cache button is clicked.
	 *
	 * @since 1.06
	 */
	public static function maybe_clear_cache() {
		$clear = FrmAppHelper::simple_get( 'clear_cache', 'sanitize_text_field' );
		$nonce = FrmAppHelper::simple_get( '_wpnonce', 'sanitize_text_field' );
		if ( 'hubspot' === $clear && ! empty( $nonce ) && wp_verify_nonce( $nonce ) ) {
			$api = new FrmHubSpotAPI();
			$api->clear_cache();
		}
	}

	public static function display_form() {
		$frm_hubspot_settings = new FrmHubSpotSettings();
		$frm_version = FrmAppHelper::plugin_version();

		require_once FrmHubSpotAppController::path() . '/views/settings/form.php';
	}

	public static function process_form() {
		$frm_hubspot_settings = new FrmHubSpotSettings();
		$process_form = FrmAppHelper::get_post_param( 'process_form', '', 'sanitize_text_field' );

		if ( wp_verify_nonce( $process_form, 'process_form_nonce' ) ) {
			$frm_hubspot_settings->update( $_POST );
			$frm_hubspot_settings->store();
			$message = __( 'Settings Saved', 'formidable' );
		}

		require_once FrmHubSpotAppController::path() . '/views/settings/form.php';
	}

	/**
	 * Save the API key via ajax from the form action.
	 *
	 * @since 1.07
	 */
	public static function process_ajax() {
		FrmAppHelper::permission_check( 'frm_edit_forms' );
		check_ajax_referer( 'frm_ajax', 'nonce' );

		$settings = new FrmHubSpotSettings();
		$settings->update( $_POST );
		$settings->store();

		wp_die();
	}

	public static function route() {
		$action = FrmAppHelper::get_param( 'action' );
		if ( 'process-form' == $action ) {
			return self::process_form();
		} else {
			return self::display_form();
		}
	}

}
