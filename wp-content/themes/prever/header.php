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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<!--===============================================================================================-->
	
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5H47RHL');</script>
<!-- End Google Tag Manager -->

	
</head>

<div class="elipse">
<div id="circle2"></div>
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
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H47RHL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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
					<li class="<?php if(is_page( 20 ) or is_page( 26 )){echo 'active-menu';}?>">
						<a>Quiénes somos </a>
						<i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li ><a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos</a>
							<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
							
						</ul>
					</li>

					<li  class="<?php if(is_page( 29 ) ){echo 'active-menu';}?>">
						<a href="<?php echo bloginfo('url');?>/index.php/nuestros-servicios">Nuestros servicios </a> <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/planes-familiares">Planes Familiares</a>
							<ul class="sub_menu">
									<li><a target="_blank"  href="<?php echo bloginfo('url');?>/category/planes-de-prevision-exequial/">Planes de Previsión</a></li>
									<li><a target="_blank"  href="<?php echo bloginfo('url');?>/category/servicios-exequiales-en-propiedad/">Servicios Exequiales en propiedad</a></li>
							
							
								</ul>
							
							</li>
							
							
							<li><a target="_blank"  href="<?php echo bloginfo('url');?>/category/planes-empresariales/">Plan Empresarial</a></li>
							<li><a target="_blank"  href="<?php echo bloginfo('url');?>/category/previmascota/">Planes Mascotas</a></li>
							<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/en-centros-memoriales/">Centros Memoriales</a></li>
							<li><a  href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
							<li><a  href="<?php echo bloginfo('url');?>/index.php/club-de-beneficios">Club de Beneficios</a></li>
							
						</ul>
					</li>

					<li>
						<a href="https://tuportalprever.com.co/api/empresarial/modules/login.php">Tu portal</a>
					</li>
					<li>
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li class="<?php if(is_page( 21 )){echo 'active-menu';}?>">
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
						<a target="_blank" href="tel:018000518910">
							<p>
								
								¿Necesitas reportar un servicio? 
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
						
		
						<button style="justify-content: space-around;" class="flex-button2">
							
							<div class="red">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/red1.png">
							</div>
							<div class="button_cta2">
								<a href="<?php echo bloginfo('url');?>/nuestros-servicios">
									NUESTRA RED DE SERVICIOS
								</a>	</div>

							</button>
							<?php if ( wp_is_mobile() ) : ?>
								<a target="_blank" class="main-btn__green" href="https://api.whatsapp.com/send?phone=573187570637">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png">
									Adquiere un Plan Exequial
								</a>
							<?php else : ?>
								<a target="_blank" class="main-btn__green" href="https://web.whatsapp.com/send?phone=573187570637">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png">
									Adquiere un Plan Exequial
								</a>
							<?php endif; ?>
							
							<button style="justify-content: space-around;" class="flex-button">
								<div class="phone">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg">
								</div>
								<div class="button_cta button-other">
									<a target="_blank" href="tel:018000518910">
										<p>
											
											¿Necesitas reportar un servicio? 
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
									<li class="<?php if(is_page( 20 ) or is_page( 26 )){echo 'active-menu';}?>">
										<a>Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
										<ul class="sub_menu">
											<li><a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos</a></li>
											<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
								
										</ul>

									</li>

									<li>
										<a href="<?php echo bloginfo('url');?>/index.php/nuestros-servicios">Nuestros servicios </a> <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a href="<?php echo bloginfo('url');?>/category/planes-familiares">Planes Familiares</a>
							<ul class="sub_menu">
								<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/planes-de-prevision-exequial/">Planes de Previsión</a></li>
									<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/servicios-exequiales-en-propiedad/">Servicios Exequiales en propiedad</a></li>
							
								</ul>
							
							</li>
							
							
							<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/planes-empresariales/">Plan Empresarial</a></li>
							<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/previmascota/">Planes Mascotas</a></li>
							<li><a target="_blank" href="<?php echo bloginfo('url');?>/category/en-centros-memoriales/">Centros Memoriales</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/club-de-beneficios">Club de Beneficios</a></li>
							
						</ul>
									</li>

											<li>
						<a href="https://tuportalprever.com.co/api/empresarial/modules/login.php">Tu portal</a>
					</li>

							<li>
						<a href="<?php echo bloginfo('url');?>/index.php/pagos">Pagos</a>
					</li>

					<li class="<?php if(is_page( 21 )){echo 'active-menu';}?>">
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
					

					<li class="item-menu-mobile <?php if(is_page( 20 ) or is_page( 26 )){echo 'active-menu';}?>">
						<a href-"#">Quiénes somos</a> <i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
								<li><a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos</a></li>
											<li><a href="<?php echo bloginfo('url');?>/index.php/trabaja-con-nosotros">Trabaja con nosotros</a></li>
						
						</ul>

						
					</li>

					<li class="item-menu-mobile">
						<a href="#">Nuestros servicios</a>  <i style="color: #000; font-weight:bold; margin-left: 7px;" class="fa fa-angle-down" aria-hidden="true"></i>
						<ul class="sub_menu">
							<li><a  href="<?php echo bloginfo('url');?>/category/planes-familiares">Planes Familiares</a>
							<ul class="sub_menu">
								<li><a href="<?php echo bloginfo('url');?>/category/planes-de-prevision-exequial/">Nuestros servicios </a></li>
										<li><a href="<?php echo bloginfo('url');?>/category/planes-de-prevision-exequial/">Planes de Previsión</a></li>
									<li><a href="<?php echo bloginfo('url');?>/category/servicios-exequiales-en-propiedad/">Servicios Exequiales en propiedad</a></li>
							
							
								</ul>
							
							</li>
							
							
							<li><a href="<?php echo bloginfo('url');?>/category/planes-empresariales/">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/category/previmascota/">Planes Mascotas</a></li>
							<li><a href="<?php echo bloginfo('url');?>/category/en-centros-memoriales/">Centros Memoriales</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/club-de-beneficios">Club de Beneficios</a></li>
							
						</ul>

					</li>

					<li class="item-menu-mobile2">
						<a href="https://tuportalprever.com.co/api/empresarial/modules/login.php">Tu portal</a>
					</li>
					<li class="item-menu-mobile2">
						<a href="<?php echo bloginfo('url');?>/pagos">Pagos</a>
					</li>

					<li class="item-menu-mobile2 <?php if(is_page( 21 )){echo 'active-menu';}?>">
						<a href="<?php echo bloginfo('url');?>/index.php/contacto">Contacto</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	

	<div href="#" class="toTop"> ↑ </div>

