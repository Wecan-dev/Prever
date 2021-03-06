<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>



	<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
			<div class=" text-second">
				<p class="subtitulo-second" style="font-weight: bold; color:#000; font-size: 16px;">Lorem</p>
				<h6 style="color:#000;"><?php the_title(); ?></h6>
				<p><?php the_content(); ?></p>


			</div>
			</div>
		</section>
		<section class="recaudos">
			<h6 class="subtitulo-second">ELIGE</h6>
			<h5> Tipos de Planes</h5>
			<p class="subtitulo-recaudos">Cobertura a nivel nacional.</p>
			<div class="card-plan">
				<?php $args = array(
      'post_type' => 'Planes',
      'post_status' => 'publish',
      'tax_query' => array(
      'relation'=>'AND', // 'AND' 'OR' ...
        array(
        'taxonomy'        => $tax,
        'field'           => 'slug',
        'terms'           => array($cat),
        'operator'        => 'IN',
        )),
    ); 
			  <?php $loop = new WP_Query( $args ); ?>
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="card-item-plan">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/one.png">

					<div class="text-plan">
						<h6>Plan Convencional</h6>
						<p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en
						</p>
						<hr>
						<ul>

							<li> <i class="fa fa-check" aria-hidden="true"></i>	
								Traslado nacional.
							</li>
							<li> <i class="fa fa-check" aria-hidden="true"></i>	
								Sala de Velación en Red Ampliada.
							</li>
							<li> <i class="fa fa-check" aria-hidden="true"></i>	
								Cremación o Inhumación.
							</li>
							<li> <i class="fa fa-check" aria-hidden="true"></i>	
								Orientación médica y psicológica.
							</li>

						</ul>
						<div class="btn-planes">
							<button class="btn_view3"><a href="">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
						</div>
					</div>
				</div>

				 <?php endwhile; ?>

					<div class="card-item-plan">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/two.png">

						<div class="text-plan">
							<h6>Plan Clásico</h6>
							<p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en
							</p>
							<hr>
							<ul>

								<li> <i class="fa fa-check" aria-hidden="true"></i>	
									Traslado nacional.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	
									Sala de Velación en Red Ampliada.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	
									Cremación o Inhumación.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	

									Exhumación, Cenizario u Osario.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	

									Orientación médica y psicológica.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	

									Asistencias personales, para tu hogar y para tu mascota.
								</li>
								<li> <i class="fa fa-check" aria-hidden="true"></i>	
									Acceso al Club de Beneficios.
								</li>

							</ul>
							<div class="btn-planes">
								<button class="btn_view3"><a href="">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
							</div>
						</div>	</div>
						<div class="card-item-plan">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tree.png">

							<div class="text-plan">
								<h6>

								Plan Especial</h6>
								<p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en
								</p>
								<hr>
								<ul>

									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Traslado nacional.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Sala de Velación en Red Abierta.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Cremación o Inhumación.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Exhumación, Cenizario u Osario.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Protección exequial para mascotas.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Orientación médica y psicológica.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	

										Asistencias personales, para tu hogar y para tu mascota.
									</li>
									<li> <i class="fa fa-check" aria-hidden="true"></i>	
										Acceso al Club de Beneficios.
									</li>
									
								</ul>
								<div  class="btn-planes">
									<button class="btn_view3"><a href="">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
								</div>
							</div>	
						</div>

					</div>
		
			</section>

		<section class="accionistas">
		<h6>Clientes empresariales</h6>
		<p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en</p>
		<div class="multiple-items2">
			<div class="logo-accionista2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
			</div>
					<div class="logo-accionista2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png">
			</div>
						<div class="logo-accionista2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
			</div>
		<div class="logo-accionista2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png">
			</div>
						<div class="logo-accionista2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
			</div>
		</div>
	</section>


<?php endif; ?>
			<?php get_footer(); ?>