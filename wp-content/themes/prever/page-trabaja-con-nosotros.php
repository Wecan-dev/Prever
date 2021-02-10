 <?php get_header(); ?>
<style>
	.frm_icon_font.frm_upload_icon{
	transform: rotateX(175deg);
}
.frm_upload_icon:before{
	font-family:'FontAwesome' !important;
	content:"\f0c6" !important;
	
	color: #33508d;
}
#form_trabaja-con-nosotros .frm_dropzone.dz-clickable.frm_single_upload .dz-message{
	display:flex;
	border: 1px solid #33508d;
	border-radius: 5px 0px 0px 5px;
    height: 62.9px;
    font-size: 15px;
	padding: 1.5rem 1.75rem;
	align-items:center;
	margin-bottom:0;
	margin-right: -1rem;
}
	button.btn_send{
		color:#fff;
		padding: 20px 49px;
		cursor:pointer;
	}
	.frm_dropzone .frm_upload_icon:before{
		font-size:15px;
		padding-right:2.5rem;
	}
#form_trabaja-con-nosotros #frm_field_31_container,  #form_trabaja-con-nosotros .frm_dropzone.dz-clickable.frm_single_upload{
	width:100%;
	max-width:100%;
	min-height: max-content;
}
.frm_small_text{
	display:none;
}
</style>	

	<section class="work">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_theme_mod('trabaja_item_4') ?>">
			</div>
			<div class=" text-second-1">
				<p style="font-weight: bold; color:#000; font-size: 16px;"><?php echo get_theme_mod('trabaja_item_1') ?></p>
				<h6 style="color:#000"><?php echo get_theme_mod('trabaja_item_2') ?></h6>
				<p><?php echo get_theme_mod('trabaja_item_3') ?></p>
					
		
					<hr class="hr-icons">
					<div class="redes-flex">
						<div class="icon-redes">
							
							<a target="_blank" href="<?php echo get_theme_mod('linktrabaja_item_1') ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg">
							</a>
							<a target="_blank" href="<?php echo get_theme_mod('linktrabaja_item_2') ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/in3.svg">
							</a>
							<a  target="_blank" href="<?php echo get_theme_mod('linktrabaja_item_3') ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram (1).svg">
							
							</a>
							<a target="_blank" href="<?php echo get_theme_mod('linktrabaja_item_4') ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin (1).svg">
							</a>
			
						
				
				
				
			</div>
		</div>
			</div>	
		</div>
		<section class="adjuntar">
			<div class="flex-adjuntar">
				<div class="logos-adjuntar">
					
					<a target="_blank" href="<?php echo get_theme_mod('urltrabaja_item_1') ?>">
					<img src="<?php echo get_theme_mod('logotrabaja_item_1') ?>">
					</a>
					<a target="_blank" href="<?php echo get_theme_mod('urltrabaja_item_2') ?>" >
						<img src="<?php echo get_theme_mod('logotrabaja_item_2') ?>">
					</a>
					
				
				</div>
				<div class="form-adjuntar">
				<div class="form-group has-search addj">
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) ); ?>
									
									
									</div>
				</div>
			</div>
		</section>
	</section>

	<?php get_footer(); ?>

