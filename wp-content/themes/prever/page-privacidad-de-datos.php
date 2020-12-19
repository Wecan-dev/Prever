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
					<li>
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
									<li>
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

<section class="privacy">
	<div class="text1">
		<div class="text1-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/text1.png"></div>
		<div class="text-there">
		<h6>1. ÁMBITO DE APLICACIÓN DE LA POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES DEL GRUPO PREVER</h6>

El GRUPO EMPRESARIAL PREVER, conformado por PREVER S.A., sociedad comercial identificada con NIT 890.911.585-5, constituida por ESCRITURA PÚBLICA No.2018 otorgada en la Notaria No.2 de Medellín el 30 de Agosto de 1972, inscrita en la Cámara de Comercio de Medellín, el 6 de Septiembre de 1972, bajo el No.2723, folio 2723 libro IX., con domicilio en la ciudad de Medellín, empresa colombiana líder en la prestación de servicios exequiales y productos de previsión, en calidad de matriz del GRUPO EMPRESARIAL PREVER, y por las siguientes empresas subordinadas: Prever Previsión General SAS, Siempre SA, Jardines de la Esperanza SA, Soluciones la Esperanza SAS y Prever SA Y CIA SCA.</div>

	</div>
<div class="text-middle">
	<p>En cumplimiento de lo dispuesto por el artículo 15 de la Constitución Política, la Ley 1581 de 2012 y sus decretos reglamentarios, informan a sus ACCIONISTAS, MIEMBROS DE JUNTA DIRECTIVA, TRABAJADORES, CANDIDATOS A UNA VACANTE, PRACTICANTES, PROVEEDORES, CLIENTES Y/O CONSUMIDORES DE NUESTROS PRODUCTOS Y SERVICIOS, y en general a todas las personas naturales que faciliten o hayan facilitado sus datos personales el contenido de la presente POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES, la cual es de obligatorio cumplimiento para todas las empresas listadas previamente, las cuales forman parte del GRUPO EMPRESARIAL GRUPO PREVER, quien en adelante se denominará GRUPO PREVER.</p></div>
		<div class="text1">
	
		<div class="text-there">
		<h6>2. EJERCICIO DE LOS DERECHOS DEL TITULAR.</h6>

GRUPO PREVER garantiza que el ejercicio de su derecho fundamental de Habeas Data, se efectuará conforme la normatividad vigente en materia de protección de datos y a lo estipulado en la presente POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES. Si usted como titular de datos personales desea consultar, reclamar, modificar, actualizar, rectificar, suprimir o revocar la autorización otorgada respecto del tratamiento de sus datos en cualquiera de las empresas listadas en el numeral 1 de la presente POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES, puede ponerse en contacto a través de los canales que hemos dispuesto para tal fin, los cuales se identifican a continuación: página web, a la que se accede a través de la dirección electrónica http://www.prever.com.co/privacidad así mismo, la consulta o reclamo podrá realizarse vía correo electrónico dirigiendo su comunicación a la</div>
	<div class="text1-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/text2.png"></div>
	</div>
<div class="text-middle">
	<p>siguiente dirección electrónica: gestionclientes@prever.com.co o dirigir su comunicación física a la oficinas del Grupo ubicadas en la Carrera 11 A No. 98-50 piso 3 de la ciudad de Bogotá. Deberá incluir en el “asunto” de su comunicación el término “CONSULTA O RECLAMO DE HABEAS DATA” seguido de la empresa ante la cual se ejerce el derecho. Para obtener más información no dude en ponerse en contacto con nuestra línea gratuita 018000 518910.</p></div>
</section>

					<?php get_footer(); ?>