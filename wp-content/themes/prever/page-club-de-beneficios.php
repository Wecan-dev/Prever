<?php get_header(); ?>


<?php

$clubsubtituloseccion1 = get_theme_mod('club_seccion1_item_1');
$clubtituloseccion1 = get_theme_mod('club_seccion1_item_2');
$clubdescripcionseccion1 = get_theme_mod('club_seccion1_item_3');
$clubimagenseccion1 = get_theme_mod('club_seccion1_item_4');


?>
	<a href="#" class="toTop"> ↑ </a>
<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo $clubimagenseccion1; ?>">
			</div>
			<div class="text-second-beneficios ">
				<p style="font-weight: bold; color:#000; font-size: 16px;"><?php echo $clubsubtituloseccion1 ?></p>
				<h6 style="color:#000; font-size: 30px;"><?php echo $clubtituloseccion1 ?></span></h6>
				<p>
					<?php echo $clubdescripcionseccion1; ?>
				</p>
			
			</div>
			</div>
		</section>


		<section class=" recaudos tabs-icons">
		<h6>Club de Beneficios</h6>
		<h5>Conoce nuestras alianzas estratégicas y accede a grandes beneficios.</h5>
		<section class="design-process-section" id="process-tab">
  <div class="container-servicios">
    
        <!-- design process steps--> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
          <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
			  <div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/1.png"> </div>
            <p>SALUD</p>
            </a></li>
          <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">  <div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/5.svg"> </div>
            <p>EDUCACIÓN</p>
            </a></li>
          <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">  <div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/2.svg"> </div>
            <p>DEPORTES</p>
            </a></li>
          <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/6.svg"> </div>

            <p>COMIDA</p>
            </a></li>
			   <li role="presentation"><a href="#content2" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/7.svg"> </div>

            <p>RECREACIÓN</p>
            </a></li>
				   <li role="presentation"><a href="#content3" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/3.svg"> </div>

            <p>HOGAR</p>
            </a></li>
				   <li role="presentation"><a href="#content4" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/4.svg"> </div>

            <p>MASCOTAS</p>
            </a></li>
			   <li role="presentation"><a href="#content5" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconos/8.svg"> </div>

            <p>VEHÍCULOS</p>
            </a></li>
         
        </ul>
        <!-- end design process steps--> 
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="discover">
			  <div class="main-content__grid">
				  
				  <?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Salud&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
			 
			  </div>
		  </div>
          <div role="tabpanel" class="tab-pane" id="strategy">
            <div class="main-content__grid">
				
			  
				  <?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Educacion&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
				
				
			
				
	
               </div>

		  </div>
		  
          <div role="tabpanel" class="tab-pane" id="optimization">
            <div class="main-content__grid">
				
				
				
				<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Deporte&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
	
               </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="content">
            <div class="main-content__grid">
				<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Comida&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>

              </div>
          </div>
			   <div role="tabpanel" class="tab-pane" id="content2">
            <div class="main-content__grid">
				
				
				<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Recreacion&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
              </div>
          </div>
				   <div role="tabpanel" class="tab-pane" id="content3">
				<div class="main-content__grid">
					<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Hogar&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
					
					
				  </div>
          </div>
					   <div role="tabpanel" class="tab-pane" id="content4">
						<div class="main-content__grid">
							<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Mascotas&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
						   
						  
						  </div>
          </div>
					   <div role="tabpanel" class="tab-pane" id="content5">
						<div class="main-content__grid">
							
							<?php $loop = new WP_Query( 'post_type=alianza&tipo_alianza=Vehiculos&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="card-club-principal">
						  <div class="card-club">
							  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>"> </div>
						  <div class="parrafo">
							  <div class="text-display">
								  <?php the_content(); ?>
							  </div>
						  </div>
					  </div>
			  
				<?php endwhile; ?>
							
							
						  </div>
          </div>

      </div>
    </div>
  </section>
</section>


		<div class="bnt-position">
		<a href="#down">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowm.svg"></a>
		</div>
	<section id="down" class="main-redime__bannes">
		<img class="img-position img-position_1" src="<?php echo get_template_directory_uri(); ?>/assets/images/oval-copy-18.png">
		<div class="main-redime__content container">
			<div class="main-redime__item">
				<div class="main-star__content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/estrella2.png">
				</div>
					<h6 >Redime tus Beneficios</h6>
				<p>
					Comunícate con nuestra Línea Gratuita Nacional <a href="tel:018000518910">018000518910</a> opción 5. O escríbenos a nuestro Whatsapp <?php if ( wp_is_mobile() ) : ?>
								<a target="blank" class="main-btn_green" href="https://api.whatsapp.com/send?phone=573004662323 ">
									
									3004662323 
								</a>
							<?php else : ?>
								<a target="blank" class="main-btn_green" href="https://web.whatsapp.com/send?phone=573004662323 ">
									
																		3004662323 
								</a>
							<?php endif; ?>


				</p>
					<div class="bnt-position">
						<button class="btn_view2"><a href="tel:018000518910">Clic Aquí</a></button>
					</div>
			</div>
			<div class="main-redime__item">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-redimir.png">
				</div>
	
			</div>
		</div>
		<img class="img-position img-position_2" src="<?php echo get_template_directory_uri(); ?>/assets/images/oval-copy-17.png">
		<img class="img-position img-position_3" src="<?php echo get_template_directory_uri(); ?>/assets/images/oval-copy-14.png">
	</section>






	<?php get_footer(); ?>