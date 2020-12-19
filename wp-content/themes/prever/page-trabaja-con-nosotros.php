<!DOCTYPE htm html>
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

<div class="elipse">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/red.png" alt="">
</div>


<style>
	.elipse{
		background: #fff;
		position: fixed;
		z-index: 9999999;
		height: 100%;
		width: 100%;
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center;
	}

</style> 

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
					<li class="active-menu">
						<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos" target="_blank">Quiénes somos </a>
						<i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
							
						</ul>
					</li>

					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/nuestros-servicios">Nuestros servicios </a> <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
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

					<li>
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
									<li class="active-menu">
										<a target="_blank" href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
										<ul class="sub_menu">
											<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
								
										</ul>

									</li>

									<li>
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
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/contacto">Contacto</a>
					</li>

						
								</ul>
							</nav>
						</div>

						<!-- Header Icon -->
						<div class="header-icons">
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
						<a href="<?php echo bloginfo('url').'/index.php/quienes-nosotros';?>">Quiénes somos</a> <i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
						
						</ul>

						
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url');?>/index.php/nuestros-servicios">Nuestros servicios  <i style="color: #000; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i></a>
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
	

	<div href="#" class="toTop"> ↑ </div>


	<section class="work">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/work.png">
			</div>
			<div class=" text-second">
				<p style="font-weight: bold; color:#000; font-size: 16px;">LOREM IPSUM</p>
				<h6 style="color:#000">Lorem ipsum dolor</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar</p>
					<p class="text-p">Donec id elit non mi porta</p>
					<div class="iconos-text">
						<div class="icons-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/work.svg">
							<p>Lorem ipsum 
							</p>
						</div>
						<div class="icons-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/money.svg">
							<p>Lorem ipsum 
							</p>
						</div>
						<div class="icons-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/location (1).svg">
							<p>Lorem ipsum 
							</p>
						</div>

					</div>
					<hr class="hr-icons">
					<div class="redes-flex">
						<div class="icon-redes">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/in3.svg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram (1).svg">
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin (1).svg">
			</div>
		</div>
			</div>	
		</div>
		<section class="adjuntar">
			<div class="flex-adjuntar">
				<div class="logos-adjuntar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ee.png">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/teletrabajo.png">
				</div>
				<div class="form-adjuntar">
				<div class="form-group has-search addj">
										<span class="fa fa-paperclip form-control-feedback"></span>
										<input type="email" class="form-control" placeholder="Adjuntar hoja de vida">
									
									</div>	<button class="btn_send"><a href="#">Enviar</a></button>
				</div>
			</div>
		</section>
	</section>

	<?php get_footer(); ?>

