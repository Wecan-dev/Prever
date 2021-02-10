 <?php get_header(); ?>
<section class="planes">
		<h4>PLANES FAMILIARES</h4>
		<h3>Planes para acompañarte cuando<span style="color: #33508d"> más lo necesitas</span></h3>
		<div class="card-services2">
			
		 <?php $product_categories = get_categories( array( 'taxonomy' => 'category', 'orderby' => 'category', 'order' => 'desc','parent' =>0 )); $i = 0; ?>
      <?php foreach($product_categories as $category):  global $wpdb;?>
     
				
				<div class="card-item ">
					<div class="cart-item_img">
						<img src="<?php echo termmeta_value_img('imagen_home_planes', $category->term_id);?>">
					</div>
					<div class="icon-serv">
						<img src="<?php echo termmeta_value_img('icono_planes', $category->term_id);?>">
					</div>
					<div class="card-body-home">
						<h6><?php echo termmeta_value('titulo_home_planes', $category->term_id);?></h6> 
						<p><?php echo termmeta_value('descripcion_corta_home_planes', $category->term_id);?></p>
						<div class="arrow-link">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
						</div>
					</div>
					<div class="parrafo">
						<div class="text-display">
							<img src="<?php echo termmeta_value_img('icono_planes', $category->term_id);?>">
							<h6><?php echo termmeta_value('titulo_home_planes', $category->term_id);?></h6>
							<p><?php echo termmeta_value('descripcion_larga_home_planes', $category->term_id);?></p>
							<div class="ver-mas">
								<a href="<?php echo get_category_link( $category->term_id ); ?>">Ver más</a>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg">
							</div>
						</div>
					</div> 
				</div>
				<?php endforeach; ?>

		
			  
			
			
		
				<a href="<?php echo bloginfo('url');?>/category/previfamilia/" class="card-item2 ">
					<div class="cart-item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Planes Familiares Exequial Previfamilia 1090x550.jpg">
					</div>
					<div class="icon-serv2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.svg">
					</div>
					<div class="card-body-familia">
						<h6>Servicio Exequial Previfamilia</h6>
						<p>Servicio integral que incluye beneficios exclusivos para ti.</p>
						<div class="arrow-link">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
						</div>
					</div>
			
				</a>
				<a href="<?php echo bloginfo('url');?>/category/servicio-exequial-prepago/" class="card-item2">
					<div class="cart-item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Planes Familiares Exequial Prepago 1090x550.jpg"></div>
						<div class="icon-serv2">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card3.svg">
						</div>
						<div class="card-body-familia">
							<h6>Servicio Exequial Prepago</h6>
							<p>Adquiere un servicio vitalicio, de pago único, con el cual puedes proteger a tu familia.</p>
							<div class="arrow-link">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
							</div>
						</div>
					
					
				</a>
			
			
			</div>
</section>
	<?php get_footer(); ?>