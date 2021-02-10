<div class="frm_grid_container">
	<p>
		<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin.php?page=formidable&frm_action=settings&t=email_settings&clear_cache=hubspot&id=' . $form->id ) ) ); ?>" id="clrcache-hubspot" class="button frm-button-secondary">
			<?php esc_html_e( 'Clear Cache', 'formidable-hubspot' ); ?>
		</a>
		<span style="float:none" class="clrcache-hubspot-spinner spinner"></span>
	</p>
	<?php if ( $list_array ) { ?>
		<p class="frm6 frm_form_field">
			<label>
				<?php esc_html_e( 'List', 'formidable-hubspot' ); ?>
			</label>
			<select name="<?php echo esc_attr( $action_control->get_field_name( 'list_id' ) ); ?>">
				<option value=""><?php esc_html_e( '&mdash; Select &mdash;' ); ?></option>
				<?php
				foreach ( $list_array as $list ) {
					if ( ! $list->dynamic && ! empty( $list->listId ) ) { // phpcs:ignore WordPress.NamingConventions
						?>
						<option value="<?php echo esc_attr( $list->listId ); // phpcs:ignore WordPress.NamingConventions ?>"
							<?php selected( $list_id, $list->listId ); // phpcs:ignore WordPress.NamingConventions ?>>
							<?php echo esc_html( FrmAppHelper::truncate( $list->name, 40 ) ); ?>
						</option>
						<?php
					}
				}
				?>
			</select>
		</p>
		<?php
	} else {
		?>
		<p class="frm6 frm_form_field">
			<?php esc_html_e( 'No HubSpot lists found. Please check your API key.', 'formidable-hubspot' ); ?>
		</p>
		<div class="frm-hbsp-set-api">
			<?php FrmHubSpotSettingsController::display_form(); ?>
		</div>
		<p>
			<button type="button" class="button-primary frm-button-primary frm-hbsp-save" id="frm-hbsp-save-key-<?php echo esc_attr( $form->id ); ?>">
				<?php esc_html_e( 'Save API Key', 'formidable-hubspot' ); ?>
			</button>
		</p>

		<script type="text/javascript">
			var hsbtn = document.getElementById('frm-hbsp-save-key-<?php echo esc_attr( $form->id ); ?>');
			hsbtn.addEventListener('click', function( e ) {
				e.preventDefault();
				var btn = e.target;
				btn.classList.add('frm_loading_button');
				jQuery.ajax( {
					type: 'POST', url: ajaxurl,
					data: {
						action: 'frm_hbsp_save_key',
						frm_hubspot_api_key: jQuery('#frm_hubspot_api_key').val(),
						nonce: frmGlobal.nonce
					},
					success: function(m) {
						btn.classList.remove('frm_loading_button');
						if ( m && m.indexOf('frm_error') > 1 ) {
							jQuery(hsbtn).after('<div class="frm-hbsp-error">' + m + '</div>');
						} else {
							jQuery('.frm-hbsp-error, #frm_hubspot_api_key, .frm-hbsp-save').remove();
							jQuery('.frm-hbsp-set-api').after('<div class="frm-hbsp-error">' + m + "<a href='<?php echo esc_url_raw( admin_url( '?page=formidable&frm_action=settings&id=' . absint( $form->id ) . '&t=email_settings' ) ); ?>' class='button-primary frm-button-primary'><?php esc_html_e( 'Reload Now', 'formidable-hubspot' ); ?></a></div>").hide();
						}
					}
				} );
			} );
		</script>
		<?php
	}

	include dirname( __FILE__ ) . '/_match_fields.php';
	?>
</div>
