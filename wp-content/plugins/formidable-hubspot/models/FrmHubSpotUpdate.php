<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

class FrmHubSpotUpdate extends FrmAddon {

	public $plugin_file;
	public $plugin_name = 'HubSpot';
	public $download_id = 20811871;
	public $version = '1.07';

	public function __construct() {
		$this->plugin_file = FrmHubSpotAppController::path() . '/formidable-hubspot.php';
		parent::__construct();
	}

	public static function load_hooks() {
		add_filter( 'frm_include_addon_page', '__return_true' );
		new FrmHubSpotUpdate();
	}
}
