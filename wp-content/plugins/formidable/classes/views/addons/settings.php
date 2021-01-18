<div class="wrap">
	<h2 class="frm-h2"><?php esc_html_e( 'Plugin Licenses', 'formidable' ); ?></h2>

	<?php

	foreach ( $plugins as $slug => $plugin ) {
		if ( $slug == 'formidable_pro' || $plugin->is_parent_licence ) {
			continue;
		}

		$license = $plugin->license;
		$status  = get_option( $plugin->option_name . 'active' );
		$activate = ( false !== $license && $status == 'valid' ) ? 'deactivate' : 'activate';
		$icon_class = ( empty( $license ) ) ? 'frm_hidden' : '';
		?>

		<div class="edd_frm_license_row frm_grid_container">
			<label class="frm4 frm_form_field" for="edd_<?php echo esc_attr( $slug ); ?>_license_key"><?php echo esc_html( $plugin->plugin_name ); ?></label>
			<div class="edd_frm_authorized frm8 frm_form_field <?php echo esc_attr( $activate == 'activate' ) ? 'frm_hidden' : ''; ?>">
				<span class="edd_frm_license"><?php esc_html_e( 'Good to go!', 'formidable' ); ?></span>
				<span class="frm_icon_font frm_action_icon frm_error_icon edd_frm_status_icon frm_inactive_icon"></span>
				<input type="button" class="button-secondary frm-button-secondary edd_frm_save_license" data-plugin="<?php echo esc_attr( $slug ); ?>" name="edd_<?php echo esc_attr( $slug ); ?>_license_deactivate" value="<?php esc_attr_e( 'Deactivate', 'formidable' ); ?>"/>
				<p class="frm_license_msg"></p>
			</div>
			<div class="edd_frm_unauthorized frm8 frm_form_field <?php echo esc_attr( $activate == 'deactivate' ) ? 'frm_hidden' : ''; ?>">
				<input id="edd_<?php echo esc_attr( $slug ); ?>_license_key" name="edd_<?php echo esc_attr( $slug ); ?>_license_key" type="text" class="frm_addon_license_key auto_width" value="" />
				<span class="frm_icon_font frm_action_icon frm_error_icon edd_frm_status_icon <?php echo esc_attr( $icon_class ); ?>"></span>
				<input type="button" class="button-secondary frm-button-secondary edd_frm_save_license" data-plugin="<?php echo esc_attr( $slug ); ?>" name="edd_<?php echo esc_attr( $slug ); ?>_license_activate" value="<?php esc_attr_e( 'Activate', 'formidable' ); ?>"/>
				<p class="frm_license_msg"></p>
			</div>

		</div>
	<?php } ?>
</div>
