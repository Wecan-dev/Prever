<?php get_header(); ?>
	

	<div href="#" class="toTop"> ↑ </div>

	<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_theme_mod('pagos_item_4') ?>">
			</div>
			<div class=" text-second">
				<h6 style="color:#000"><?php echo get_theme_mod('pagos_item_1') ?> </h6>
				<p> <?php echo get_theme_mod('pagos_item_2') ?></p>
				<p class="text-p"><?php echo get_theme_mod('pagos_item_3') ?></p>
	<div class="btn-prepago">
				<div class="btn-1">
				<button class="btn-1">
				<a href="<?php echo get_theme_mod('linkpago_item_1') ?>" target="_blank">
				<?php echo get_theme_mod('textopago_item_1') ?></a>
				</button>
				</div>

				<div class="btn-1">
				<button class="btn-1 btn-2">
				<a href="<?php echo get_theme_mod('linkpago_item_2') ?>" target="_blank">
				 <?php echo get_theme_mod('textopago_item_2') ?></a>
				</button>
				</div>
			

				<div class="btn-1">
				<button class="btn-1">
				<a href="<?php echo get_theme_mod('linkpago_item_3') ?>" target="_blank">
				<?php echo get_theme_mod('textopago_item_3') ?></a>
				</button>
				</div>
				</div>
			</div>
			</div>
		</section>

		<section class="recaudos">
			<h6>PUNTOS DE</h6>
			<h5>Recaudos Nacionales</h5>

			<div class="card-recaudos container">
				<?php $loop = new WP_Query( 'post_type=recaudos&tipo_recaudos=Nacionales' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="card-recaudos_item">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<h6><?ph the_title(); ?></h6>
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
	
			</div>
		</section>

		<section style="background: #fff;" class="recaudos">
			<h6>PUNTOS DE</h6>
			<h5>Recaudos Regionales</h5>

			<p>Realiza el pago indicando el número de identificación del titular.</p>

			<div class="marcas">
				<?php $loop = new WP_Query( 'post_type=recaudos&tipo_recaudos=Regionales' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="marca-item">
						<p class="title-marca"><?php the_title(); ?></p>
						<img class="img-special" src="<?php echo get_the_post_thumbnail_url(); ?>">
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
				
			</div>
		</section>

		<section class="recaudos" style="display:none;">
			<h6>
			PAGAR MENSUALIDAD</h6>
			<h5>Lorem ipsum es el texto</h5>


			<div class=" container tab tab2">
				<button class="tablinks" onclick="openWork(event, 'Info')" id="defaultOpen2">01 Información</button>
				<button class="tablinks" onclick="openWork(event, 'Metodo')">02 Método de Pago</button>
				<button class="tablinks" onclick="openWork(event, 'Pago')">03 Pago</button>
			</div>

			<div id="Info" class="tabcontent tabcontent2">
				<div class="form-info">
					<div class="item-form">
						<label>Nombre</label>
						<input type="text" name="">
					</div>
						<div class="item-form form-special">
						<label>Dirección</label>
						<input type="text" name="">
					</div>
						<div class="item-form">
						<label>Teléfono</label>
						<input type="text" name="">
					</div>
						<div class="item-form">
						<label>País</label>
						<input type="text" name="">
					</div>
						<div class="item-form form-special">
						<label>Ciudad</label>
						<input type="text" name="">
					</div>
						<div class="item-form">
						<label>Código Postal</label>
						<input class="input-text input-text--search" type="text" name="">
						
					</div>


				</div>
					<div class="more-view2">
				<button class="btn_view2"><a href="">Continuar</a></button>
			</div>
			</div>

			<div id="Metodo" class="tabcontent tabcontent2">
							<div class="form-info">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			</div>
			<div id="Pago" class="tabcontent tabcontent2">
							<div class="form-info">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		</section>
		<section class="mayor">
			<div class="mayor-flex">
				<div class="mayor-img">
					<img src="<?php echo get_theme_mod('comunicate_item_4') ?>">
				</div>
				<div class="mayor-text">
					<img src="<?php echo get_theme_mod('comunicate_item_3') ?>">
					<h6><?php echo get_theme_mod('comunicate_item_1') ?></h6>
					<p><?php echo get_theme_mod('comunicate_item_2') ?></p>
					<div class="father-flex">
						<div class="first">
					<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0367358315"><span >Armenia:</span> 735 83 15  </a>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0324893877"><span > Cali:</span> 489 38 77    </a>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0346040417"><span >Medellín:</span> 604 04 17     </a>
					</div>
					</div>
					<div class="second">
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0317440959"><span >Bogotá:</span> 744 09 59  </a>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0368956899"><span >Manizales:</span> 895 6899  </a>
					</div>
												<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<a href="tel:0363402156"><span >Pereira:</span> 340 21 56 </a>
					</div>
				</div>
			</div>
			</div></div>
		</section>
		<script>


			function openWork(evt, workName) {
				var i, tabcontent2, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(workName).style.display = "block";
				evt.currentTarget.className += " active";
			}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen2").click();



</script>

<?php get_footer(); ?>