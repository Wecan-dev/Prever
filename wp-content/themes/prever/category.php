<?php
/**
* A Simple Category Template
*/
get_header(); 


$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$categoria = $category->name;
$cat_slug = $category->slug;
$category_link = get_category_link( $cat_id );
?>

<style>
	.slider-planes .slick-list.draggable{
		
	}
	section.recaudos{
		padding-bottom:0;
	}
	.card-plan{
		display:block
	}
	.card-item-plan{
		margin-bottom: 0 !important;
    margin: 85px 2rem 10rem !important ;
		
	}
</style>

<?php if(is_category( '15' )): ?>

<section class="planes">
		<h4>PLANES FAMILIARES</h4>
		<h3>Planes para acompañarte cuando<span style="color: #33508d"> más lo necesitas</span></h3>
		<div class="card-services2">
<?php

				  $term = get_queried_object();

				  $children = get_terms( $term->taxonomy, array(
					  'parent'    => $term->term_id,
					  'hide_empty' => false
				  ) );

					  foreach( $children as $subcat )
						   {?>
						<a href="<?php echo esc_url(get_term_link($subcat, $subcat->taxonomy)) ?>" class="card-item2 ">
							<div class="cart-item_img">
								<img src="<?php echo termmeta_value_img('imagen_home_planes', $subcat->term_id);?>">
							</div>
							<div class="icon-serv2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.svg">
							</div>
							<div class="card-body-familia">
								<h6><?php echo termmeta_value('titulo_home_planes', $subcat->term_id);?></h6>
								<p><?php echo termmeta_value('descripcion_larga_interna_planes', $subcat->term_id);?></p>
								<div class="arrow-link">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha-card.svg">
								</div>
							</div>

						</a>


					  <?php } ?>
			
			</div>
</section>

<?php else: ?>	

<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo termmeta_value_img('imagen_interna_planes', $category->term_id);?>">
			</div>
			<div class=" text-second">
				<p class="subtitulo-second" style="font-weight: bold; color:#000; font-size: 16px;"><?php echo termmeta_value('titulo_interna_planes', $category->term_id);?></p>
				<h6 style="color:#000;"><?php echo termmeta_value('descripcion_corta_interna_planes', $category->term_id);?></h6>
				<p><?php echo termmeta_value('descripcion_larga_interna_planes', $category->term_id);?></p>
				
		<?php if(is_category( '6' )): ?>
		<?php if ( wp_is_mobile() ) : ?>
				<br>
				<button class="btn_view3"><a target="_blank" href="https://api.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>

				<?php else : ?>
				<br>
				<button class="btn_view3"><a target="_blank"  href="https://web.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
				<?php endif; ?>

		<?php else: ?>	
		
		
		<?php endif; ?>

			</div>
			</div>
		</section>

<?php if(termmeta_value('caracteristicas_stilos_2', $category->term_id ) != '1'): ?>

	<section class="recaudos">
		
		<?php if(is_category( '1' )): ?>
		<h6 class="subtitulo-second">CONOCE NUESTRAS </h6>
			<h5>SOLUCIONES PARA EL DESCANSO DE TUS SERES QUERIDOS</h5>
		
					 

		<?php else: ?>	
		
		<h6 class="subtitulo-second"><?php echo termmeta_value('titulo_interna_planes', $category->term_id);?></h6>
			<h5> Tipos de Planes</h5>
			<p class="subtitulo-recaudos">Cobertura a nivel nacional.</p> 
		<?php endif; ?>
		
		
		
		
			
    <div class="container-grid">
      <div class="blog-general__all">
		  <div class="card-plan">
			  <div class="slider-planes">
				  
				  <?php

				  $term = get_queried_object();

				  $children = get_terms( $term->taxonomy, array(
					  'parent'    => $term->term_id,
					  'hide_empty' => false
				  ) );

				  if ( $children ) { 
					  foreach( $children as $subcat )
					  {?>
						  <div class="card-item-plan">
							  <img src="<?php echo termmeta_value_img('imagen_home_planes', $subcat->term_id);?>">
							  <div class="text-plan">
								  
								
									  <h6><?php echo $subcat->name  ?></h6>
								   
								  <p><?php echo termmeta_value('descripcion_larga_interna_planes', $subcat->term_id);?></p>
									
								  <div class="btn-planes">
									
									 <button class="btn_view3" style="width: 230px;"><a href="<?php echo esc_url(get_term_link($subcat, $subcat->taxonomy)) ?>">Quiero saber más <img  style="width:30px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
								  </div>
							  </div>
				  			</div>

					  <?php }
				  }else { 
					  $args = 
						array(
					  'post_type' => 'Planes',
					  'posts_per_page' => 6,
					  'tax_query' => array(
					  array(
						  'taxonomy'  => 'category',
						  'field'     => 'slug',
						  'terms'     => $category->slug,
					  )), 
						  ); ?>
						<?php $loop = new WP_Query( $args ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>        

							<?php if (get_field( 'informacion_adiconal' )): ?>
								  <div class="card-item-plan-no">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									<div class="text-plan" style="min-height: 40rem;">
									  <h6><?php the_title();  ?></h6>
									  <p class="p-before"><?php the_field( 'descripcion_corta' ); ?></p>
									  <?php the_content(); ?>
									  <div class="btn-planes" style="display: grid;grid-template-columns: 1fr;left: 50%;transform: translate(-50%);">
										
										  <button class="btn_view3 main-card__btninf">Ver especificaciones</button>
										  <div class="card-more__info">
											  <div class="triangulo">
												<div class="forma" id="XVII"></div>
											</div>
										  	 <?php  the_field( 'informacion_adiconal' ) ?>
										  </div>
										

									  </div>
									</div>
								  </div>
				    			<?php else: ?>
									<div class="card-item-plan">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										<div class="text-plan">
										  <h6><?php the_title();  ?></h6>
										  <p class="p-before"><?php the_field( 'descripcion_corta' ); ?></p>
										  <?php the_content(); ?>
										  <div class="btn-planes">
											  <?php if ( wp_is_mobile() ) : ?>
								<button class="btn_view3"><a target="_blank" href="https://api.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
												
											<?php else : ?>
												<button class="btn_view3"><a target="_blank"  href="https://web.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
											<?php endif; ?>
											


										  </div>
										</div>
									  </div>
  								<?php endif; ?>
						<?php endwhile; 


				  }
				  ?>
       
					  </div>
				  </div>
			  </div>


  
      
    </div>
  </section>

<section class="recaudos">
	<center>
		<div class="main-text__center">
				<p>Los servicios que prestan las empresas de PREVER, son de carácter asistencial, los cuales no constituyen actividad aseguradora, razón por lo cual, no se reconocen valores económicos.</p>
		</div>
	
	</center>
</section>

<?php else: ?>
<section class="recaudos">
	<h6 class="subtitulo-second"><?php echo termmeta_value('texto_estilo_2', $category->term_id);?></h6>
			<h5><?php echo termmeta_value('titulo_caracteristicas', $category->term_id);?></h5>
	
  <div class="container-grid">
      <div class="blog-general__all">
		  <div class="card-plan">
			  <div class="card-plan__grid">
				  <div  class="card-plan__item" >
				  <div class="card-item-plan card-item-plan__cat" >
					  <div>
					   <img src="<?php echo termmeta_value_img('imagen_card', $category->term_id);?>">
					  </div>
					 
					  <div class="text-plan">
						
						  <p class="p-before" style="font-weight:bold;"><?php echo termmeta_value('titulo_card', $category->term_id);?></p>
						  <p><?php echo termmeta_value('descripcion_card', $category->term_id);?></p>
						  
						  
						  
					  </div>
					  </div>
				  </div>
				  <div  class="card-plan__item" style="margin-top: 7rem;">
					  <div>
					  	 <div  class="card-plan__title "style="    margin-bottom: 5rem;">
							 <div class="card-plan__title-grid">
								 <div class="card-plan__img-grid">	
								 	<img src="<?php echo termmeta_value_img('icono_caracteristicas', $category->term_id);?>">
								 </div>
								   <div class="card-plan-title-flex" >
									   <strong><p ><?php echo termmeta_value('titulo_icono', $category->term_id);?><p>  </strong>
								  </div>
							 </div>
					  		
						</div>
								  <?php echo termmeta_value('caracteristicas_subcategoria', $category->term_id);?>
						  <br><br>
						  <?php if ( wp_is_mobile() ) : ?>
								<button class="btn_view3"><a target="_blank" href="https://api.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
												
											<?php else : ?>
												<button class="btn_view3"><a target="_blank"  href="https://web.whatsapp.com/send?phone=573187570637">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>
											<?php endif; ?>
					  </div>
					  </div>
					  
				 
					 
	  </div>
</div>
		  </div>
</div>
		  </section>	  

<?php endif; ?>




<?php endif; ?>



  
<?php if(is_category( '5' )): ?>
<section class="accionistas">
		<h6>Clientes empresariales</h6>

		<div class="">
			
			<?php $args = array( 'post_type' => 'ClienteEmpresarial', 'posts_per_page' => 30);?>   
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="logo-accionista2">
					<p class="accionista-p">
							<?php the_title();?>      
					</p>
					
				</div>
			<?php endwhile; ?>
					
			
		</div>
	</section>
<?php endif; ?>
<style>
	.card-item-plan.card-item-plan__cat {
    width: 65% !important;

		
	}
	.card-item-plan.card-item-plan__cat img{

    height: 50vh;

}
	.main-text__center{
		padding: 10rem 0;
	}
	.main-text__center p{
		
		text-align: left;
		font-size: 18px;
	}
	.card-plan-title-flex{
		display: flex;
		align-items: center;
		margin-left: 4rem;
	}
	.card-plan__img-flex{
		display: flex;align-items: center;
	}
	.card-plan__img-flex p{
		margin-bottom: 2rem;
		font-family: Gotham;
		font-size: 23px;
		font-weight: bold;
		font-stretch: normal;
		font-style: normal;
		line-height: normal;
		letter-spacing: 0.4px;
		color: #101010;
		text-align: left;
		margin-left: 3rem;
		margin-bottom: 0;
	}
	.card-plan__grid{
		display:grid;
		grid-template-columns: 1fr 1fr;
		
	}
	.card-plan__grid .card-plan__item{
		display:flex;
		justify-content:center;
	}
	.card-plan__grid .card-item-plan{
		width: 50%;
	}
	.card-plan__img-grid{
		width:100px;
		height:100px;
	}
	.card-plan__img-grid img{
		width: 100%;
		height:100%;
		 object-fit: contain;
	}
	.card-plan__title-grid{
		display: grid;
		grid-template-columns: 10% 90%;
	}
.accionistas p {
    font-size: 16px;
    text-align: left !important;
    margin-top: 10px;
    margin-bottom: 0px;
}
	.main-card__btninf{
		position: absolute;
		left: 50%;
		transform: translate(-50%);
		width: 250px;
		color:#fff;
		
	}
	.main-card__btninf.main-card__btninf-active{
		left: 50%;
		transform: translate(-50%);
		
	}

	.card-more__info{
		background-color: #33508d;
    padding: 2rem;
    color: #fff;
    display: none;
    border-radius: 10px 10px 10px 10px;
    width: 570px;
    margin-top: 9rem;
		transition: 0.3s ease-in-out;
		    
		
	}
	.card-more__info:hover{
		    background: #33508d;
		transition: 0.3s ease-in-out;
	}
	.card-more__info.active-info{
		opacity: 1;
		display: block;
		position: relative;
	}
	.slick-list.slick-height{
		height: 120rem;
		
	}
	
	.forma{
	    width: 0;
    height: 0;
    border-right: 35px solid transparent;
    border-left: 35px solid transparent;
}
	#XVII{
	border-bottom: 50px solid #33508d;
    position: absolute;
    top: -5rem;
    left: 50%;
    transform: translate(-50%);
}
	.card-more__info ul li:before{
		color: #fff;
	}
	@media (min-width: 0px) and (max-width: 576px){
		.card-item-plan {
    margin-bottom: 0 !important;
    margin: 0px 2rem 10rem !important;
}
		.card-item-plan.card-item-plan__cat {
    width: 80% !important;
}
		.card-plan__grid{
	
		grid-template-columns: 1fr;
		
	}
		.card-plan__grid .card-item-plan {
			width: 100%;
			margin: 0 !important;
		}
		
		.card-plan__grid .card-plan__item {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.card-plan__item ul{
			padding-left: 3rem;
		}
		.card-plan__title-grid {
				display: grid;
				grid-template-columns: 100%;
			}
		.card-more__info {
			width: 300px;
		}
		.slick-list.slick-height{
			height: 160rem;
		}
		
		
	}
	
	@media (min-width: 577px) and (max-width: 767px){
			.card-plan__grid{
	
		grid-template-columns: 1fr;
		
	}
		.card-plan__grid .card-item-plan {
			width: 100%;
			margin: 0 !important;
		}
		
		.card-plan__grid .card-plan__item {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.card-plan__item ul{
			padding-left: 3rem;
		}
		.card-plan__title-grid {
				display: grid;
				grid-template-columns: 100%;
			}
		.card-more__info {
			width: 300px;
		}
		.slick-list.slick-height{
			height: 160rem;
		}
		
	}
	@media (min-width: 768px) and (max-width: 992px){
		.card-plan__grid .card-plan__item {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.card-plan__grid .card-plan__item:nth-child(2){
    height: 100px;
    padding: 3rem;
		}
		.card-plan__grid .card-item-plan {
    width: 100%;
}
		.card-plan__title-grid {

    grid-template-columns: 100%;
}
		.card-more__info {
			width: 300px;
		}
		.slick-list.slick-height{
			height: 160rem;
		}
		
	}
	@media (min-width: 993px) and (max-width: 1199px){
		.card-plan__grid .card-plan__item {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.card-plan__grid .card-plan__item:nth-child(2){
    height: 100px;
    padding: 3rem;
		}
		.card-plan__grid .card-item-plan {
    width: 100%;
}
		.card-plan__title-grid {

    grid-template-columns: 100%;
}
		.card-more__info {
			width: 300px;
		}
		.slick-list.slick-height{
			height: 160rem;
		}
		
	}
	
	@media (min-width: 1440px) and (max-height: 900px){
		.card-more__info {
			width: 370px;
		
		}
		.slick-list.slick-height{
			height: 150rem;

		}
		
	}
	
	@media (min-width:1920px) and (max-width: 2500px){
		
		.slick-list.slick-height{
			height: 125rem;
		}
	}
	
	@media (min-width: 1200px) and (max-width: 1439px){
		.card-more__info{
			width: 350px;
		}
		.slick-list.slick-height {
    height: 145rem;
}
	}
</style>


<?php get_footer(); ?>
<script>
	
$('.main-card__btninf').click(function(){
	$('.card-more__info').removeClass('active-info')
	$('.slick-list').removeClass('slick-height')
	if (!$(this).hasClass("main-card__btninf-active") ) {
		$(this).addClass('main-card__btninf-active')
		$(this).siblings('.card-more__info').addClass('active-info')
		$(this).parents('.slick-list').addClass('slick-height')
	}else{
		$(this).removeClass('main-card__btninf-active')
		$(this).siblings('.card-more__info').removeClass('active-info')
		$(this).parents('.slick-list').removeClass('slick-height')
	}
	
	
	
})
</script>