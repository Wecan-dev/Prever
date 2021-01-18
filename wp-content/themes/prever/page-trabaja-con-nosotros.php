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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Trabaja-nosotos.jpg">
			</div>
			<div class=" text-second-1">
				<p style="font-weight: bold; color:#000; font-size: 16px;">Únete al mejor equipo</p>
				<h6 style="color:#000">Trabaja con nosotros</h6>
				<p>Somos una Compañía que te ofrece seguridad, permanencia y beneficios para ti y tu familia.</p>
					
		
					<hr class="hr-icons">
					<div class="redes-flex">
						<div class="icon-redes">
							<a target="_blank" href="https://www.facebook.com/PreverCol/">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg">
							</a>
							<a target="_blank" href="https://www.instagram.com/prevercol/?hl=es-la">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/in3.svg">
							</a>
							<a  target="_blank" href="https://www.youtube.com/channel/UC4SdWFf5EA-HkH1cigzfaRA">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram (1).svg">
							
							</a>
							<a target="_blank" href="https://co.linkedin.com/company/prever-soluciones-exequiales?trk=similar-pages_result-card_full-click">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin (1).svg">
							</a>
			
						
				
				
				
			</div>
		</div>
			</div>	
		</div>
		<section class="adjuntar">
			<div class="flex-adjuntar">
				<div class="logos-adjuntar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ee.png">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/computrabajo.png">
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

