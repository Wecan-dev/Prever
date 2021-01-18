	<section class="servicios">
		<h4>NUESTROS SERVICIOS</h4>
		<h3>Diseñados especialmente para <span style="color: #33508d"> ti y tu familia</span></h3>
		<div class="card-services">
			<div class="multiple-items">
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
			</div>
		</div>
	</section>