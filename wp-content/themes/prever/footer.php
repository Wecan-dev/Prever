	<footer class="ftco-footer ftco-section">
		<div class="footer-padding">

			<div class="row mb-5">
				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget">
						<div class="logo-footer" style="justify-content: flex-start;">
								<a href="<?php echo bloginfo('url');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"></a>
						</div>
						<p>Prever Siempre a tu Lado acompañándote en los momentos más difíciles.</p>
						<div class="ftco-footer-social list-unstyled ">
								<li style="border: none;" class="ftco-animate"><a href="#"><img class="you" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb3.svg"></a></li>
								<li style="border: none;" class="ftco-animate"><a href="#"><img class="you" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg"></a></li>
							<li style="border: none;" class="ftco-animate"><a href="#"><img class="you" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube3.svg"></a></li>
								<li style="border: none;" class="ftco-animate"><a href="#"><img class="you" src="<?php echo get_template_directory_uri(); ?>/assets/images/in.svg"></a></li>
						</div>
					</div>
				</div>

				<div class="col-md-3 txt-left logo-footer">
					<div class="ftco-footer-widget left-nosotros">
						<h2 class="ftco-heading-2">Nosotros</h2>
						<div class="block-237 ">
							<ul>
								<li ><a href="<?php echo bloginfo('url').'/index.php/trabaja-con-nosotros';?>">Trabaje con nosotros</a></li>
								<li ><a href="<?php echo bloginfo('url').'/index.php/privacidad-de-datos';?>">Políticas de datos</a></li>
								<li ><a href="<?php echo bloginfo('url').'/index.php/preguntas-frecuentes';?>">FAQS</a></li>
								<li ><a href="	">Red prestadora de servicios</a></li>
							

							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget left-menu">
						<h2 class="ftco-heading-2 line">Menú</h2>
						<div class="block-237 ">
							<ul>
								<li ><a href="<?php echo bloginfo('url').'/index.php/quienes-somos';?>">Quiénes somos</a></li>
								<li ><a href="<?php echo bloginfo('url').'/index.php/nuestros-servicios';?>">Nuestros servicios</a></li>
								<li ><a href="	">Tu portal</a></li>
								<li ><a href="<?php echo bloginfo('url').'/index.php/pagos';?>">Pagos</a></li>

							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-3 logo-footer txt-left2">
					<div class="ftco-footer-widget right-contact">
						<h2 class="ftco-heading-2 line2">Contacto</h2>
						<div class="block-237 ">
							<ul>
								<li><img class="icon-this" style="width: 10%; margin-right: 3px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg"><a style="color: #fff;">Colombia</a></li>
								<li><a href="mailto:encontacto@prever.com.co"><img class="icon-this" style="width: 10%;margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg"><span class="text">correo: encontacto@prever.com.co</span></a></li>
								<li ><a href="tel:18000518910"><img class="icon-this" style="width: 10%; margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text">Teléfono: Línea Nacional Gratuita 01 8000 51 89 10</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		
			<p style="text-align: center; margin-bottom: 0;
    background: #fff;
    padding-top: 25px;
    padding-bottom: 25px;
    color: #000!important;font-size: 13px;">Copyright 2020 <a style=" font-weight:normal;color:#000;" href="https://branch.com.co/" target="_blank" class=" copy text-center">Branch Group </a> - Sitios Web
		</p>
	
</footer>


<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick-custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
	

	$('.nav-tabs .nav-link').on("click.bs.dropdown", function (e) { 
		$(this).tab('show'); 
		e.stopPropagation(); 
	});
</script>
<!--===============================================================================================-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
 <?php wp_footer(); ?>
</body>
</html>