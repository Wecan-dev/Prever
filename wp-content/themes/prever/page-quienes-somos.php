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
						<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos" >Quiénes somos </a>
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
										<a  href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
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
						
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
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

	<section class="about">
		<div class="first-content">
			<div class="text-first">
				<div class="text-first-1">
				<p style="font-weight: 600;color: #33508D;font-size: 15px;">LOREM IPSUM</p>
				<h6>Nuestra Misión</h6>
				<p>Actualmente, innovamos con una propuesta actualizada de nuestro portafolio de soluciones, para ofrecerle a todos nuestros clientes paquetes de previsión, asistencias y Club de Beneficios que se adapten a sus necesidades. Es por esto que queremos poner a tu disposición, planes y servicios PREVER que brindan una atención oportuna, digna, respetuosa y con altos estándares.
				</p>
					</div>
			</div>
			<div class="img-first">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/group.png">
			</div>
		</div>

		<div class="first-content">
					<div class="img-first">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/group.png">
			</div>
			<div class="text-bg">
				<div class="text-bg-2">
				<p style="font-weight: 600;color: #fff;font-size: 15px">LOREM IPSUM</p>
				<h6>Nuestra Visión</h6>
				<p>Un Grupo de carácter nacional con proyección internacional, innovador en el desarrollo y comercialización de productos en previsión. Nos anticipamos con un portafolio de soluciones, a las necesidades surgidas en momentos inesperados que afectan el bienestar y la tranquilidad de las personas, sus familias y las empresas.
				</p>
			</div>
			</div>
	
		</div>
	</section>

	<section class="accionistas">
		<h6>Accionistas</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		<div class="multiple-logo">
			<div class="logo-accionista">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-copy.png">
			</div>
					<div class="logo-accionista">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-copy.png">
			</div>
					<div class="logo-accionista">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-copy.png">
			</div>
						<div class="logo-accionista">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-copy.png">
			</div>
		</div>
	</section>

<section class="redes">
	<div class="redes-flex">
		<div class="red-texto">
			<h6>NUESTRAS SEDES</h6>
			<h3>Lorem Impsun text of the</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
			<div class="flex-text-icon">
			<div class="text-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mapc.png">
				<p>Lorem Ipsum is simply dummy <br> text of the </p>
			</div>
					<div class="text-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phonec.png">
				<p>00000 </p>
			</div>
			
					<div class="text-icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mailc.png">
				<p>Lorem Ipsum is simply</p>
			</div>
			</div>
			<div class="icon-redes">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/in3.svg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram (1).svg">
				
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin (1).svg">
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31814.509353180652!2d-74.11103226537622!3d4.627308542359491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1608063582503!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

		</div>
	</div>
</section>

<section class="call-center">
	<div class="center-flex">
		<div class="img-call">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png">
		</div>
		<div class="call-text">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.svg">
			<h6>Call center</h6>
			<p>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
			</p>
			<div class="submit">
			<input type="email" name="" placeholder="Ingresa tu correo electrónico">
			<button class="btn-cta"><a href="">enviar</a></button>
		</div>
		<p class="text-in">Lorem Ipsum is simply dummy text <a href=""> of the printing </a></p>
		</div>
	</div>
</section>

	<?php get_footer(); ?>

