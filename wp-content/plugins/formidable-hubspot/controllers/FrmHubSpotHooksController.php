<?php

class FrmHubSpotHooksController {

	public static function load_hooks() {
		add_action( 'frm_entry_form', 'FrmHubSpotAppController::hidden_form_fields', 10, 2 );
		add_action( 'frm_trigger_hubspot_action', 'FrmHubSpotAppController::trigger_hubspot', 10, 3 );
		add_action( 'frm_registered_form_actions', 'FrmHubSpotSettingsController::register_actions' );

		self::load_admin_hooks();
	}

	public static function load_admin_hooks() {
		if ( ! is_admin() ) {
			return;
		}

		add_action( 'admin_init', 'FrmHubSpotAppController::include_updater', 1 );
		add_action( 'admin_enqueue_scripts', 'FrmHubSpotHooksController::add_scripts' );
		add_action( 'after_plugin_row_formidable-hubspot/formidable-hubspot.php', 'FrmHubSpotAppController::min_version_notice' );

		add_action( 'frm_add_settings_section', 'FrmHubSpotSettingsController::add_settings_section' );
		add_action( 'wp_ajax_frm_hbsp_save_key', 'FrmHubSpotSettingsController::process_ajax' );
	}

	public static function add_scripts() {
		if ( self::is_form_settings_page() ) {
			FrmHubSpotSettingsController::maybe_clear_cache();
		}
	}

	/**
	 * Check if the current page is the form settings page
	 *
	 * @since 2.01
	 *
	 * @return bool
	 */
	private static function is_form_settings_page() {
		$is_form_settings_page = false;
		if ( method_exists( 'FrmAppHelper', 'simple_get' ) ) {
			$page = FrmAppHelper::simple_get( 'page', 'sanitize_title' );
			$action = FrmAppHelper::simple_get( 'frm_action', 'sanitize_title' );
			if ( 'formidable' === $page && 'settings' === $action ) {
				$is_form_settings_page = true;
			}
		}
		return $is_form_settings_page;
	}

}
