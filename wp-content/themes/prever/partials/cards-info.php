<section class="cards-options ">
		<div class="acceder">
			<?php $args = array( 'post_type' => 'Metodos');?>   
			  <?php $loop = new WP_Query( $args ); ?>
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="item-acceder">
				<div class="icon-there" style="text-align: center; ">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
				<h6><?php the_title(); ?></h6>
				<?php the_content(); ?>
				<button class="acc-btn">
					<a href="<?php the_field( 'url_boton' ); ?>">Acceder </a>
					<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></div>
				</button>
			</div>
			<?php endwhile; ?>
		</div>
</section>