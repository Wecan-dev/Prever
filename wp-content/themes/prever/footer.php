	<footer class="ftco-footer ftco-section">
		<div class="footer-padding">

			<div class="row mb-5">
				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget">
						<div class="logo-footer" style="justify-content: flex-start;">
								<a href="<?php echo bloginfo('url');?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"></a>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per.</p>
						<div class="ftco-footer-social list-unstyled ">
							<li class="ftco-animate"><a href="#"></a><i class="fa fa-facebook" aria-hidden="true"></i></li>
							<li class="ftco-animate"><a href="#"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
							<li style="border: none;" class="ftco-animate"><a href="#"><img class="you" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg"></a></li>
							<li class="ftco-animate"><a href="#"></a><i class="fa fa-linkedin" aria-hidden="true"></i></li>
						</div>
					</div>
				</div>

				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Nosotros</h2>
						<div class="block-237 ">
							<ul>
								<li ><a href="	">Trabaje con nosotros</a></li>
								<li ><a href="	">Políticas de datos</a></li>
								<li ><a href="	">FAQS</a></li>
								<li ><a href="	">Red prestadora de servicios</a></li>
							

							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Menú</h2>
						<div class="block-237 ">
							<ul>
								<li ><a href="	">Quiénes somos</a></li>
								<li ><a href="	">Nuestros servicios</a></li>
								<li ><a href="	">Tu portal</a></li>
								<li ><a href="	">Pagos</a></li>

							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-3 logo-footer">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Contacto</h2>
						<div class="block-237 ">
							<ul>
								<li><img style="width: 10%; margin-right: 3px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg"><span style="color: #fff; font-family: 'Gotham Book';">Lorem ipsum 001</span></li>
								<li><a href="#"><img style="width: 10%;margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg"><span class="text">correo: lorem@info.com</span></a></li>
								<li ><a href="#"><img style="width: 10%; margin-right: 8px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text">Teléfono: +00 (0) 000 00</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		<a href="https://branch.com.co/" target="_blank" class=" copy text-center">
			<p style="margin-bottom: 0;
    background: #fff;
    padding-top: 25px;
    padding-bottom: 25px;
    color: #000!important;
    font-weight: bold;">Copyright 2020 Branch Group - Sitios Web
		</p>
	</a>
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