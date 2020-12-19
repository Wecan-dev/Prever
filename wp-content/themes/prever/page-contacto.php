<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
	<title>Prever</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/red.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick-theme.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
	<!--===============================================================================================-->
</head>



<body >


	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="<?php echo bloginfo('url');?>" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li >
						<a href="<?php echo bloginfo('url').'/index.php/quienes-somos';?>">Quiénes somos </a><i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>

						</ul>

					</li>

					<li>
						<a href="#">Nuestros servicios </a> <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
										<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
						
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
						</ul>
					</li>

					<li>
						<a href="#recientes">Tu portal</a>
					</li>
					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li class="active-menu2">
						<a href="<?php echo bloginfo('url');?>/index.php/contacto">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Header Icon -->
		<div class="header-icons">
			<div class="header-wrapicon2">
				<button style="justify-content: space-around;" class="flex-button">
					<div class="phone">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg">
					</div>
					<div class="button_cta button-other">
						<a href="tel:018000518910">
							<p>
								Línea Gratuita Nacional
								<span class="number">018000 518910</span>
							</p>

							
						</a>	</div>
					</button>
				</div>
			</div>
		</div>



		<!-- Header -->
		<header class="header2">
			<!-- Header desktop -->
			<div class="container-menu-header-v2">
				<div class="topbar2">

					<!-- Logo2 -->
					<a href="<?php echo bloginfo('url');?>" class="logo2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="IMG-LOGO">
					</a>

					<div class="topbar-child2">
						<button  class="flex-button-2">
							<div class="button_cta">
								<a href="">
									<p>
										¿NECESITAS REPORTAR UN SERVICIO?
									</p>						

								</a>
							</div>
						</button>

						<button style="justify-content: space-around;" class="flex-button2">

							<div class="red">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/red.png">
							</div>
							<div class="button_cta2">
								<a href="">
									NUESTRA RED DE SERVICIOS
								</a>	</div>

							</button>
							<button style="justify-content: space-around;" class="flex-button">
								<div class="phone">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg">
								</div>
								<div class="button_cta button-other">
									<a href="tel:018000518910">
										<p>
											Línea Gratuita Nacional <br>
											<span class="number">018000 518910</span>
										</p>


									</a></div>
								</button>
							</div>
						</div>
					</div>

					<div class="wrap_header">

						<!-- Menu -->
						<div class="wrap_menu">
							<nav class="menu">
								<ul class="main_menu">
									<li>
										<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
											<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>

						</ul>


							
							</li>

							<li>
								<a href="#">Nuestros servicios </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
										<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
						
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
						</ul>
							</li>

							<li>
								<a href="#">Tu portal</a>
							</li>
							<li>
								<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
							</li>

							<li  class="active-menu2">
								<a href="<?php echo bloginfo('url');?>/index.php/contacto">Contacto</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?php echo bloginfo('url');?>" class="logo-mobile">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu ">
				<ul class="main-menu main_menu">
					

					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos <i style="color: #000; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>

						</ul>

						
					</li>

					<li class="item-menu-mobile">
						<a>Nuestros productos  <i style="color: #000; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
						
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
						</ul>

					</li>

					<li class="item-menu-mobile2">
						<a href="#recientes">Tu portal</a>
					</li>
					<li class="item-menu-mobile2">
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li class="item-menu-mobile2">
						<a href="<?php echo bloginfo('url');?>/index.php/contacto">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	
	<a href="#" class="toTop"> ↑ </a>

	<section class="ayuda">
		<h6>¿Necesitas ayuda?</h6> 
		<h5> Comunícate con nuestra Línea Nacional Gratuita 01 8000 518910 para que podamos atender tu solicitud.</h5>
		<div class="buscador has-search">
			<span class="fa fa-search form-control-feedback"></span> <input  placeholder="Buscar por ciudad / barrio" type="search" name=""> 
			<div class="btn-search">
				<a href="">Buscar</a>
			</div>
		</div>
<div class="about-content ">
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'Fundaciones')" id="defaultOpen">
				<a href="#resultados">
					<p>Lorem Impsun</p> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
				</button>
				<button class="tablinks" onclick="openCity(event, 'convocatorias')">
					<a href="#resultados">
						<p>Lorem Impsun</p> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</button>
					<button class="tablinks" onclick="openCity(event, 'eventos')">
						<a href="#resultados">
							<p>Lorem Impsun</p> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</button>
						<button class="tablinks" onclick="openCity(event, 'Noticias')">
							<a href="#resultados">
								<p>Lorem Impsun</p> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</button>
						</div>
						<div id="Fundaciones" class="tabcontent">
							<div class="text-content">
							<div class="map2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map2.png">
							</div>

							<div class="text-left-content">
								<h6>Lorem Ipsum</h6>
								<div class="flex-star">
									<div>5/5</div> <div class="ec-stars-wrapper">
										<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
										<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
										<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
										<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
										<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
									</div>  <div>(20 reviews)</div></div>
									<div class="text-horario">
										<div class="pin">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
											<p>Medellín Carrera 49 # <br> 54 - 47</p>
										</div>
										<hr>
										<div class="pin">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tec.jpg">
											<p>Phone: (4) 6040417 <br> Fax: (4) 6040417</p>
										</div>
										<hr>
										<div class="pin">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
											<p>Email: lorem@ipsum.co</p>
										</div>
										<hr>

										<div class="pin">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg">
											<p>Horas de Operación <br> 7:30 am a 5:30 pm</p>
										</div>

									</div>
								</div>
								</div>
							</div>
							<div id="convocatorias" class="tabcontent">
	<div class="text-content">
								<div class="map2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map2.png">
								</div>

								<div class="text-left-content">
									<h6>Lorem Ipsum 2</h6>
									<div class="flex-star">
										<div>5/5</div> <div class="ec-stars-wrapper">
											<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
											<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
											<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
											<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
											<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
										</div>  <div>(20 reviews)</div></div>
										<div class="text-horario">
											<div class="pin">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
												<p>Medellín Carrera 49 # <br> 54 - 47</p>
											</div>
											<hr>
											<div class="pin">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tec.jpg">
												<p>Phone: (4) 6040417 <br> Fax: (4) 6040417</p>
											</div>
											<hr>
											<div class="pin">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
												<p>Email: lorem@ipsum.co</p>
											</div>
											<hr>

											<div class="pin">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg">
												<p>Horas de Operación <br> 7:30 am a 5:30 pm</p>
											</div>

										</div>
									</div>
								</div>
							</div>
								<div id="eventos" class="tabcontent">
										<div class="text-content">
									<div class="map2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map2.png">
									</div>

									<div class="text-left-content">
										<h6>Lorem Ipsum 3</h6>
										<div class="flex-star">
											<div>5/5</div> <div class="ec-stars-wrapper">
												<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
												<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
												<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
												<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
												<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
											</div>  <div>(20 reviews)</div></div>
											<div class="text-horario">
												<div class="pin">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
													<p>Medellín Carrera 49 # <br> 54 - 47</p>
												</div>
												<hr>
												<div class="pin">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tec.jpg">
													<p>Phone: (4) 6040417 <br> Fax: (4) 6040417</p>
												</div>
												<hr>
												<div class="pin">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
													<p>Email: lorem@ipsum.co</p>
												</div>
												<hr>

												<div class="pin">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg">
													<p>Horas de Operación <br> 7:30 am a 5:30 pm</p>
												</div>

											</div>
										</div>
									</div>
								</div>
									<div id="Noticias" class="tabcontent">
											<div class="text-content">
										<div class="map2">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map2.png">
										</div>

										<div class="text-left-content">
											<h6>Lorem Ipsum 4</h6>
											<div class="flex-star">
												<div>5/5</div> <div class="ec-stars-wrapper">
													<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
													<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
													<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
													<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
													<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
												</div>  <div>(20 reviews)</div></div>
												<div class="text-horario">
													<div class="pin">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
														<p>Medellín Carrera 49 # <br> 54 - 47</p>
													</div>
													<hr>
													<div class="pin">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tec.jpg">
														<p>Phone: (4) 6040417 <br> Fax: (4) 6040417</p>
													</div>
													<hr>
													<div class="pin">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
														<p>Email: lorem@ipsum.co</p>
													</div>
													<hr>

													<div class="pin">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg">
														<p>Horas de Operación <br> 7:30 am a 5:30 pm</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

						<section class="formulario">
							<h6>NECESITAS INFORMACIÓN</h6>
							<h5>Comunicate con nosotros</h5>
							<div class="flex-form">
								<div class="assitent">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/assitent.png">
								</div>
								<div class="form">
									<div class="form-group has-search">
										<span class="fa fa-user form-control-feedback"></span>
										<input type="text" class="form-control" placeholder="Nombre">
									</div>
									<div class="form-group has-search">
										<span class="fa fa-user form-control-feedback"></span>
										<input type="text" class="form-control" placeholder="Apellido">
									</div>
									<div class="form-group has-search">
										<span class="fa fa-envelope form-control-feedback"></span>
										<input type="email" class="form-control" placeholder="Correo">
									</div>

									<div class="form-group has-search">
										<span class="fa fa-pencil form-control-feedback"></span>
										<textarea class="form-control" placeholder="Mensaje" cols="40" rows="5"></textarea>
									</div>

									<div class="btn-sub">
										<button class="btn-cta"><a href="">Enviar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
									</div>
								</div>
							</div>
						</section>
						<style type="text/css">

						</style>
						<?php get_footer(); ?>
