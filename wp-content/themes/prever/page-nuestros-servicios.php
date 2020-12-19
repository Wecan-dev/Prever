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
								<a href="#">Nuestros servicios </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
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
	<section style="    margin-bottom: 3%;" class="servicios serv">	
		<h4>NUESTROS SERVICIOS</h4>
		<h3 style="margin-bottom: 5%;">Diseñados especialmente para <span style="color: #33508d"> ti y tu familia</span></h3>
		<div class="card-services">
			<div class="multiple-items">
				<div class="card-item cart-item-service">
					<div class="cart-item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/family.png">
					</div>
					<div class="icon-serv icon-serv-responsive">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.svg">
					</div>
					<div class="card-body">
						<h6>Planes Familiares</h6>
						<p>Lorem ipsum es el texto que se usa habitualmente en diseño </p>
						<div class="arrow-link">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
						</div>
					</div>
			
				</div>
				<div class="card-item cart-item-service">
					<div class="cart-item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dog.png">
						<div class="icon-serv icon-serv-responsive">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card2.svg">
						</div>
						<div class="card-body">
							<h6>Plan mascotas</h6>
							<p>Lorem ipsum es el texto que se usa habitualmente en diseño </p>
							<div class="arrow-link">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
							</div>
						</div>
				
					</div>
				</div>
				<div class="card-item cart-item-service">
					<div class="cart-item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/laptop.png">
						<div class="icon-serv">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card3.svg">
						</div>
						<div class="card-body">
							<h6>Planes <br>Empresariales</h6>
							<p>Planes prepagados que van de acuerdo con tus necesidades.</p>
							<div class="arrow-link">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
							</div>
						</div>
				 
					</div>
				</div>
				<div class="card-item cart-item-service">
					<div class="cart-item_img">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flores.png">
						<div class="icon-serv">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rose.svg">
						</div>
						<div class="card-body">
							<h6>En Centros <br> Memoriables</h6>
							<p>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en</p>
							<div class="arrow-link">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
							</div>
						</div>
				 
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="duelo">
		<div class="duelo-flex ">
			<div class="duelo-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mariposa.png">
			</div>
	
		<div class="duelo-text">
			<h6>Ayuda al Duelo</h6>

			<p>
				‘Enséñame a despedirme’ es una colección de 8 guías que nacen de nuestro compromiso con el cuidado de las familias que confían en nosotros y que están viviendo una situación de duelo.
			</p>
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/signo.png">Edición Especial – Despedida cuando no es posible velación
				</li>
						<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/signo.png">Dudas habituales de los adultos sobre el proceso de duelo.
				</li>
						<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/signo.png">Duelo por la muerte de mi mascota.
				</li>
			</ul>
			<div class="more-view">
				<button class="btn_view"><a href="">Conoce más</a></button>
			</div>
		</div>
			</div>
	</section>
	<section class="conoce">
		<div class="conoce-flex">
			<div class="beneficios-text">
			<h6>CONOCE</h6>
			<h5>Club de Beneficios</h5>
			
			<p>Pensando en tu bienestar y en el de tu familia, contamos con alianzas estratégicas en más de 50 entidades y 500 establecimientos a nivel nacional, en las siguientes categorías</p>
					<div class="more-view">
				<button class="btn_view2"><a href="">Conoce más</a></button>
			</div>
		</div>
	
		<div class="card-conoce">
						<div class="card-item3">
					<div class="overlay-card">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.png">
		
						<div class=" card-body-conoce">
	
							<p>Diseñados a la medida de las necesidades de tu empresa.</p>
				
						</div>
	
					</div>
				</div>
										<div class="card-item3">
					<div class="overlay-card">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.png">
		
						<div class="card-body-conoce">

							<p>Tendrás descuentos en instituciones educativas.</p>
				
						</div>
	
					</div>
				</div>
										<div class="card-item3">
					<div class="overlay-card">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.png">
		
						<div class="card-body-conoce">
		
							<p>Comparte en familia y aprovecha nuestros convenios.</p>
				
						</div>
	
					</div>
				</div>
		</div>
			</div>
	</section>
	<?php get_footer(); ?>