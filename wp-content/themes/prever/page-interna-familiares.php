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
					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos" >Quiénes somos </a>
						<i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
							
						</ul>
					</li>

					<li class="active-menu3">
						<a href="#">Nuestros servicios </a> <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-empresariales">Planes Empresariales</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
						</ul>
					</li>

					<li>
						<a href="#">Tu portal</a>
					</li>
					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li >
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
										<a  href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
										<ul class="sub_menu">
											<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
								
										</ul>

									</li>

							<li class="active-menu3">
								<a href="<?php echo bloginfo('url');?>/index.php/nuestros-servicios">Nuestros servicios </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
								<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-empresariales">Planes Empresariales</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
						</ul>
							</li>

							<li>
								<a href="#">Tu portal</a>
							</li>
							<li>
								<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Pagos</a>
							</li>

							<li  >
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
						<a>Nuestros servicios  <i style="color: #000; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-familiares">Interna Familiares</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/interna-servicio-prepago">Interna Servicio Prepago</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-empresariales">Planes Empresariales</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/planes-familiares">Planes Familiares</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
						</ul>

					</li>

					<li class="item-menu-mobile2">
						<a href="#">Tu portal</a>
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


	<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/care.png">
			</div>
			<div class=" text-second">
				<p style="font-weight: bold; color:#000; font-size: 16px;">PREVIFAMILIA</p>
				<h6 style="color:#000; font-size: 35.4px;">Especialmente para <span style="color: #33508d">ti y tu familia</span></h6>
				<p>Es un servicio integral pensado en el bienestar y tranquilidad tuyo y de tu familia. Según cada categoría, podrás encontrar una serie de beneficios que se adaptan a tus necesidades.</p>


			</div>
		</section>
		<section class="recaudos">
			<h6>Planes Previfamilia</h6>
			<h5>Lorem ipsum es el texto</h5>
			<p>Cobertura a nivel Nacional</p>
			<div class="card-plan">
				<div class="card-item-plan">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/7.png">

					<div class="text-plan">
						<h6>Previfamilia Clásico</h6>
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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png">

							<div class="text-plan">
								<h6>Previfamilia Especial</h6>
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
								<div class="btn-planes">
									<button class="btn_view3"><a href="">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
								</div>
							</div>	</div>
					<div class="card-item-plan">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png">

						<div class="text-plan">
							<h6>Previfamilia Excelencia</h6>
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
						</div>
					</section>
					<?php get_footer(); ?>