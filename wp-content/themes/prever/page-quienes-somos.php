<?php get_header();  ?>

	<div href="#" class="toTop"> ↑ </div>

	<section class="about">
	<?php if (get_theme_mod('mision_item_4') != NULL){?>
		<div class="first-content">
			<div class="text-first">
				<div class="text-first-1">
				<p style="font-weight: 600;color: #33508D;font-size: 15px;"><?php echo get_theme_mod('mision_item_1') ?></p>
				<h6><?php echo get_theme_mod('mision_item_2') ?></h6>
				<p><?php echo get_theme_mod('mision_item_3') ?>
				</p>
					</div>
			</div>
			<div class="img-first">
				<img src="<?php echo get_theme_mod('mision_item_4') ?>">
			</div>
		</div>
		<?php }
		?>

		
  
        

		<div class="first-content">
		<?php if (get_theme_mod('vision_item_4') != NULL){?>
					<div class="img-first">
				<img src="<?php echo get_theme_mod('vision_item_4') ?>">
			</div>
			<div class="text-bg">
				<div class="text-bg-2">
				<p style="font-weight: 600;color: #fff;font-size: 15px"><?php echo get_theme_mod('vision_item_1') ?></p>
				<h6><?php echo get_theme_mod('vision_item_2') ?></h6>
				<p><?php echo get_theme_mod('vision_item_3') ?>
				</p>
			</div>
			</div>
			<?php }
		?>
		</div>
	</section>

	<section class="accionistas">
	<?php if (get_theme_mod('accion_item_1') != NULL){?>
		<h6><?php echo get_theme_mod('accion_item_1') ?></h6>
		<p><?php echo get_theme_mod('accion_item_2') ?></p>
		<?php }
		?>
		<div class="multiple-logo">
			<?php $args = array( 'post_type' => 'Accionistas');?>   
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="logo-accionista">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
			<?php endwhile; ?>
		</div>
	</section>
<!--
<section class="redes" >
	<?php if (get_theme_mod('Sedes_item_11') != NULL){?>
	<div class="redes-flex">
		<div class="red-texto">
			<h6><?php echo get_theme_mod('Sedes_item_1') ?></h6>
			<h3><?php echo get_theme_mod('Sedes_item_2') ?></h3>
			<p><?php echo get_theme_mod('Sedes_item_3') ?></p>
			<div class="flex-text-icon">
	
					<div class="text-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonec.png">
				<a href="tel:018000518910"><?php echo get_theme_mod('Sedes_item_5') ?> </a>
			</div>
			
					<div class="text-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mailc.png">
				<a href="mailto:<?php echo get_theme_mod('Sedes_item_6') ?>"><?php echo get_theme_mod('redes_item_6') ?></a>
			</div>
			</div>
			<div class="icon-redes">
			<a href="<?php echo get_theme_mod('Sedes_item_7') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg"></a>
			<a href="<?php echo get_theme_mod('Sedes_item_8') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/in3.svg"></a>
			<a href="<?php echo get_theme_mod('Sedes_item_9') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram (1).svg"></a>
			<a href="<?php echo get_theme_mod('Sedes_item_10') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin (1).svg"></a>
			</div>
		</div>
		<div class="map">
			<iframe src="<?php echo get_theme_mod('Sedes_item_11') ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				
				
		</div>
	</div>
	<?php }
		?>
</section>

-->

<section class="call-center">
<?php if (get_theme_mod('call_item_1') != NULL){?>
	<div class="center-flex">
		<div class="img-call">
			<img src="<?php echo get_theme_mod('call_item_1') ?>">
		</div>
		<div class="call-text">
	
			<h6><?php echo get_theme_mod('call_item_2') ?></h6>
			<p>
			<?php echo get_theme_mod('call_item_3') ?>
			</p>
			
			<!--
			<div class="submit">
			<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
		</div>
		-->
		</div>
	</div>
	<?php }
		?>
</section>

	<?php get_footer(); ?>

