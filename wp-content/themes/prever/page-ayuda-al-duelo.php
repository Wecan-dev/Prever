<?php get_header(); ?>

<?php

$ayudasubtituloseccion1 = get_theme_mod('ayuda_seccion1_item_1');
$ayudatituloseccion1 = get_theme_mod('ayuda_seccion1_item_2');
$ayudadescripcionseccion1 = get_theme_mod('ayuda_seccion1_item_3');
$ayudaimagenseccion1 = get_theme_mod('ayuda_seccion1_item_4');


$ayudatituloseccion2 = get_theme_mod('ayuda_seccion1_item_1');
$ayudasubtituloseccion2 = get_theme_mod('ayuda_seccion2_item_2');
$ayudadescripcionseccion2 = get_theme_mod('ayuda_seccion3_item_3');
$ayudaimagenseccion2 = get_theme_mod('ayuda_seccion2_item_4');


	
		
$ayudalist = get_theme_mod('ayuda_seccion2_list');
$ayudalist1 = get_theme_mod('ayuda_seccion2_list1');
$ayudalist2 = get_theme_mod('ayuda_seccion2_list2');
$ayudalist3 = get_theme_mod('ayuda_seccion2_list3');
$ayudalist4 = get_theme_mod('ayuda_seccion2_list4');
$ayudalist5 = get_theme_mod('ayuda_seccion2_list5');
$ayudalist6 = get_theme_mod('ayuda_seccion2_list6');
$ayudalist7 = get_theme_mod('ayuda_seccion2_list7');
$ayudalist8 = get_theme_mod('ayuda_seccion2_list8');
$ayudalistpdf = get_theme_mod('ayuda_seccion2_listpdf');
$ayudalistpdf1 = get_theme_mod('ayuda_seccion2_listpdf1');
$ayudalistpdf2 = get_theme_mod('ayuda_seccion2_listpdf2');
$ayudalistpdf3 = get_theme_mod('ayuda_seccion2_listpdf3');
$ayudalistpdf4 = get_theme_mod('ayuda_seccion2_listpdf4');
$ayudalistpdf5 = get_theme_mod('ayuda_seccion2_listpdf5');
$ayudalistpdf6 = get_theme_mod('ayuda_seccion2_listpdf6');
$ayudalistpdf7 = get_theme_mod('ayuda_seccion2_listpdf7');
$ayudalistpdf8 = get_theme_mod('ayuda_seccion2_listpdf8');


?>
	<a href="#" class="toTop"> ↑ </a>

	<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo $ayudaimagenseccion1; ?>">
			</div>
			<div class=" text-second">
				<p style="font-weight: bold; color:#000; font-size: 16px;"><?php echo $ayudasubtituloseccion1; ?></p>
				<h6 style="color:#000; font-size: 35px;"><?php echo $ayudatituloseccion1; ?></h6>
				<p> <?php echo $ayudadescripcionseccion1; ?></p>

<!--<p>
	Nuestro objetivo es que familiares y allegados sepan actuar mediante la resolución de dudas frecuentes, así como ofrecerles  herramientas, a través de un lenguaje sencillo y accesible, para una gestión emocional más eficaz.

	
				</p>-->

			</div>
		</section>

	<section class="recaudos">
		<h6><?php echo $ayudasubtituloseccion2; ?></h6>
		<h5><?php echo $ayudatituloseccion2 ?></h5>
		<p>
			<?php echo $ayudadescripcionseccion2 ?>
		</p>
<div class="publicaciones-flex">
	<div class="icon-publicacion">
		
		
	  
  <?php if($ayudalistpdf): ?>
		<div class="publicacion-item">
			
			<p>
				
			<a style=" font-weight:bold;    font-size: 18px;  color: #33508d;" target="_blank" href="<?php echo $ayudalist; ?> "><?php echo $ayudalist; ?>  </a> <br>
			</p>
		</div>
	

    <?php else: ?>
		
		<div class="publicacion-item">
			<p><?php echo $ayudalist; ?>  <br></p>
		</div>
		<?php endif; ?>

	
	
		
				<?php if($ayudalistpdf1): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf1; ?>">1. <?php echo $ayudalist1; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>1. <?php echo $ayudalist1; ?>  <br></p>
		</div>
		<?php endif; ?>
<?php if($ayudalistpdf2): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf2; ?>">2. <?php echo $ayudalist2; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>2. <?php echo $ayudalist2; ?>  <br></p>
		</div>
		<?php endif; ?>
		
		
		 <?php if($ayudalistpdf3): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf3; ?>">3. <?php echo $ayudalist3; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>3. <?php echo $ayudalist3; ?>  <br></p>
		</div>
		<?php endif; ?>


    <?php if($ayudalistpdf4): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf4; ?>">4. <?php echo $ayudalist4; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>4. <?php echo $ayudalist4; ?>  <br></p>
		</div>
		<?php endif; ?>

    <?php if($ayudalistpdf5): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf5; ?>">5. <?php echo $ayudalist5; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>5. <?php echo $ayudalist5; ?>  <br></p>
		</div>
		<?php endif; ?>


    <?php if($ayudalistpdf6): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf6; ?>">6. <?php echo $ayudalist6; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>6. <?php echo $ayudalist6; ?>  <br></p>
		</div>
		<?php endif; ?>

    <?php if($ayudalistpdf7): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf7; ?>">7. <?php echo $ayudalist7; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>7. <?php echo $ayudalist7; ?>  <br></p>
		</div>
		<?php endif; ?>

    <?php if($ayudalistpdf8): ?>
		<div class="publicacion-item">	
			<p>
	 			<a style="  font-weight:bold;    font-size: 18px;   color: #33508d;" target="_blank" href="<?php echo $ayudalistpdf8; ?>">8. <?php echo $ayudalist8; ?> </a> <br>
			
			</p>
		</div>
		<?php else: ?>
		
		<div class="publicacion-item">
			<p>8. <?php echo $ayudalist8; ?>  <br></p>
		</div>
		<?php endif; ?>        
	</div>

	<div class="image-publicacion">
		<img src="<?php echo $ayudaimagenseccion2; ?>">
	</div>
</div>
		
	</section>

	<?php get_footer(); ?>