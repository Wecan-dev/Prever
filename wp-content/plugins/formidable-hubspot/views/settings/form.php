<p class="howto">
	<?php
	printf(
		/* translators: %1$s: Start link HTML %2$s: end link HTML */
		esc_html__( 'The API key can be found in %1$sHubSpot Integrations and API%2$s', 'formidable-hubspot' ),
		'<a href="http://help.hubspot.com/articles/KCS_Article/Integrations/How-do-I-get-my-HubSpot-API-key" target="_blank" rel="noopener">',
		'</a>'
	);
	?>
</p>
<p>
	<label class="frm_left_label">
		<?php esc_html_e( 'HubSpot API Key', 'formidable-hubspot' ); ?>
	</label>
	<input type="text" name="frm_hubspot_api_key" id="frm_hubspot_api_key" value="<?php echo esc_attr( $frm_hubspot_settings->settings->api_key ); ?>" class="frm_with_left_label" />
</p>
