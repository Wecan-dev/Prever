	<section class="blog">
		<h3>Nuestros Homenajes</h3>
		<div class="single-item">
			<?php $args = array( 'post_type' => 'Homenaje');?>   
			  <?php $loop = new WP_Query( $args ); ?>
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="blog-item">
				<div class="blog-img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
				<div class="text-misa">
					<p style="letter-spacing: 1.2px;"><?php the_field( 'tipo_de_homenaje' ); ?></p>
					<h3><?php the_title(); ?></h3>
					<h6><?php the_content(); ?></h6>
					<div class="fecha">
						<p><?php the_field( 'fecha' ); ?> |  <?php the_field( 'hora' ); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</section>

