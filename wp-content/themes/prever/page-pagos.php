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
					<li >
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
						
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-empresarial">Plan Empresarial</a></li>
							<li><a href="<?php echo bloginfo('url');?>/index.php/plan-mascota">Planes Mascotas</a></li>
								<li><a href="<?php echo bloginfo('url');?>/index.php/ayuda-al-duelo">Ayuda al Duelo</a></li>
						</ul>
					</li>

					<li>
						<a href="#">Tu portal</a>
					</li>
					<li class="active-menu h">
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
									<li >
										<a href="<?php echo bloginfo('url');?>/index.php/quienes-somos">Quiénes somos </a><i style="color: #000; margin-left: 7px; font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
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

							<li class="active-menu h">
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

	<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/trabajo.png">
			</div>
			<div class=" text-second">
				<p style="font-weight: bold; color:#000; font-size: 16px;">CONOCE</p>
				<h6 style="color:#000">Medios Masivos de Pago</h6>
				<p>En el Grupo Prever nos gusta facilitarte la vida, por eso te ofrecemos diferentes alternativas para que puedas pagar de forma  fácil y cómoda tus cuotas mes a mes.</p>
				<p class="text-p">¡Recuerda que realizar tus pagos a tiempo es indispensable para garantizar la prestación de nuestros servicios!</p>

			</div>
		</section>

		<section class="recaudos">
			<h6>PUNTOS DE</h6>
			<h5>Recaudos Nacionales</h5>

			<div class="card-recaudos container">
				<div class="card-recaudos_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/efecty.png">
					<h6>Efecty</h6>
					<p>Con el código de <span style="font-weight: bold;">recaudo 111018</span> y el número de cédula del titular.</p>
				</div>
				<div class="card-recaudos_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/zona.png">
					<h6>Zona Pagos</h6>
					<p>Ingresa al botón de pagos ubicado en la parte superior derecha de nuestra página web.</p>
				</div>
				<div class="card-recaudos_item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/giro.png">
					<h6>Giros y Finanzas</h6>
					<p>Con el número de cédula del titular.</p>
				</div>
			</div>
		</section>

		<section style="background: #fff;" class="recaudos">
			<h6>PUNTOS DE</h6>
			<h5>Recaudos Regionales</h5>

			<p>Realiza el pago indicando el número de identificación del titular.</p>

			<div class="marcas">
				<div class="marca-item">
					<p class="title-marca">Antioquia</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/marca1.png">
					<p> Nº de convenio<span style="font-weight: bold;"> 316</span></p>
				</div>
				<div class="marca-item">
					<p class="title-marca">Manizales</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/marca2.png">

				</div>
				<div class="marca-item">
					<p class="title-marca">Armenia</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/marca3.png">

				</div>
				<div class="marca-item">
					<p class="title-marca">Pereira</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/marca4.png">

				</div>
			</div>
		</section>

		<section class="recaudos">
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
						<div class="item-form">
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
						<div class="item-form">
						<label>Ciudad</label>
						<input type="text" name="">
					</div>
						<div class="item-form">
						<label>Código Postal</label>
						<input type="text" name="">
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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/chica.png">
				</div>
				<div class="mayor-text">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mayor.png">
					<h6>Si requieres mayor información</h6>
					<p>Comunícate con el Área de Cartera de Prever en tu ciudad:</p>
					<div class="father-flex">
						<div class="first">
					<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;">Armenia:</span> 735 83 15  </p>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;"> Cali:</span> 4893877    </p>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;">Medellín:</span> 604 04 17     </p>
					</div>
					</div>
					<div class="second">
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;">Bogotá:</span> 744 09 59  </p>
					</div>
									<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;">Manizales:</span> 895 6899  </p>
					</div>
												<div class="flex-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone2.svg">
						<p><span style="font-weight: bold;">Pereira:</span> 340 21 56 </p>
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