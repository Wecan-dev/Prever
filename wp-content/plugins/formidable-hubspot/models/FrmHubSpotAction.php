<?php

class FrmHubSpotAction extends FrmFormAction {

	public function __construct() {
		$action_ops = array(
			'classes'   => 'frmfont frm_hubspot_icon',
			'color'     => '#ff7a59',
			'limit'     => 99,
			'active'    => true,
			'priority'  => 25,
			'event'     => array( 'create', 'update' ),
			'tooltip'   => __( 'Add to HubSpot', 'formidable-hubspot' ),
		);

		$this->FrmFormAction( 'hubspot', __( 'HubSpot', 'formidable-hubspot' ), $action_ops );
	}

	public function form( $form_action, $args = array() ) {
		$form = $args['form'];

		$list_options = $form_action->post_content;
		$list_id = $list_options['list_id'];

		$api = new FrmHubSpotAPI();
		$lists = $api->fetch_lists();
		$list_array  = empty( $lists->lists ) ? array() : $lists->lists;
		$list_fields = $api->fetch_ordered_properties();
		$field_types = $this->allowed_field_selections();

		$form_fields = FrmField::getAll( 'fi.form_id=' . (int) $form->id . " and fi.type not in ('break', 'divider', 'end_divider', 'html', 'captcha', 'form')", 'field_order' );

		$action_control = $this;

		include FrmHubSpotAppController::path() . '/views/action-settings/hubspot_options.php';
	}

	/**
	 * @since 1.07
	 */
	public function allowed_field_selections() {
		$allow_fields = array(
			'date' => array( 'hidden', 'date' ),
		);
		return apply_filters( 'frm_hubspot_field_types', $allow_fields );
	}

	public function get_defaults() {
		return array(
			'list_id' => '',
			'fields' => array(),
		);
	}

	public function get_switch_fields() {
		return array(
			'fields' => array(),
			'groups' => array( array( 'id' ) ),
		);
	}

	public static function clear_cache() {
		_deprecated_function( __METHOD__, '1.06', 'FrmHubSpotAPI->clear_cache' );
		FrmHubSpotSettingsController::maybe_clear_cache();
	}

}
