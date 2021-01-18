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

<section class="pagos">
		<div class="work-flex">
			<div class="img-second">
				<img src="<?php echo termmeta_value_img('imagen_interna_planes', $category->term_id);?>">
			</div>
			<div class=" text-second">
				<p class="subtitulo-second" style="font-weight: bold; color:#000; font-size: 16px;"><?php echo termmeta_value('titulo_interna_planes', $category->term_id);?></p>
				<h6 style="color:#000;"><?php echo termmeta_value('descripcion_corta_interna_planes', $category->term_id);?></h6>
				<p><?php echo termmeta_value('descripcion_larga_interna_planes', $category->term_id);?></p>


			</div>
			</div>
		</section>

<?php if(termmeta_value('caracteristicas_stilos_2', $category->term_id ) != '1'): ?>

	<section class="recaudos">
		
		<?php if(is_category( '1' )): ?>
		<h6 class="subtitulo-second">Conoce Nuestras opciones</h6>
			<h5> DE SOLUCIONES FÚNEBRES</h5>
		
					 
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
								  <div class="card-item-plan card-item-plan-no">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									<div class="text-plan" style="min-height: 40rem;">
									  <h6><?php the_title();  ?></h6>
									  <p class="p-before"><?php the_field( 'descripcion_corta' ); ?></p>
									  <?php the_content(); ?>
									  <div class="btn-planes">
										
										  <button class="btn_view3 main-card__btninf" style="width: 250px;">Ver especificaciones</button>
										  <div class="card-more__info" >
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
											
											  <button class="btn_view3"><a href="">Cotizar <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.svg"></a></button>

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

<?php else: ?>
<section class="recaudos">
	<h6 class="subtitulo-second"><?php echo termmeta_value('texto_estilo_2', $category->term_id);?></h6>
			<h5><?php echo termmeta_value('titulo_caracteristicas', $category->term_id);?></h5>
	
  <div class="container-grid">
      <div class="blog-general__all">
		  <div class="card-plan">
			  <div class="card-plan__grid" style="display:grid;grid-template-columns: 1fr 1fr;">
				  <div  class="card-plan__item" style="display:flex;justify-content:center;">
				  <div class="card-item-plan" style="    width: 50%;">
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
					  <div class="card-plan__title" style="    margin-bottom: 5rem;">
						  <div style="display: grid;grid-template-columns: 10% 90%;">
							   <div class="card-plan__img" style="width:100px;height:100px;">
							  	<img style="width:100%;height:100%;
    object-fit: contain;" src="<?php echo termmeta_value_img('icono_caracteristicas', $category->term_id);?>">
								    </div>
							  <div style="    display: flex;align-items: center;">
								<p style="margin-bottom: 2rem;font-family: Gotham;font-size: 23px;font-weight: bold;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: 0.4px;color: #101010;text-align: left;margin-left: 3rem;margin-bottom: 0;"><?php echo termmeta_value('titulo_icono', $category->term_id);?><p>  
						  </div>
						 
					  
						 
					
					  
				  </div>
			  </div>
					  <?php echo termmeta_value('caracteristicas_subcategoria', $category->term_id);?>
		  </div>
	  </div>
</div>
		  </div>
</div>
		  </section>	  

<?php endif; ?>

  
<?php if(is_category( '5' )): ?>
<section class="accionistas">
		<h6>Clientes empresariales</h6>

		<div class="">
			<div class="logo-accionista2">
				<p class="accionista-p">
						INPEC      
				</p>
				<!--
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
				!-->
			</div>
					<div class="logo-accionista2">
						<p class="accionista-p">
						Febancolombia - Fondo Empleados Bancolombia            
				</p>
						<!--
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png">
						!-->
			</div>
			<div class="logo-accionista2">
							<p class="accionista-p">
					Fonalcanzar - Fondo de Empleados de la Alqueria           
				</p>
							<!--
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
	!-->
			</div>
		<div class="logo-accionista2">
					<p class="accionista-p">
					Fondeloitte - Fondo de Empleados Deloitte    
				</p>
			
					<!--
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-logo.png">
			!-->
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
					Fechallenger - Fondo de Empleados de Challenger    
				</p>
							<!--
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unilever.png">
!-->
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
					Fedepalma       
				</p>
			</div>
				<div class="logo-accionista2">
								<p class="accionista-p">
					Fiscaia Coopfiscalia              
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
					Grupo Nutresa                  
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
					SAFERBO              
				</p>
			</div>
				<div class="logo-accionista2">
								<p class="accionista-p">
					Fondo de Empleados SUFONDO                   
				</p>
			</div>	
			<div class="logo-accionista2">
								<p class="accionista-p">
					Protección Sura                 
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				CONFAMILIA fondo de empleados de familia sancela              
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				Hospital Pablo Tobón Uribe                 
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				Almacenes Flamingo                 
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				Fondo de Empleados del Municipio FEMMANI                  
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				Fondo de Empleados de Luker FEMLUKER                        
				</p>
			</div>
				<div class="logo-accionista2">
								<p class="accionista-p">
				Central Hidroeléctrica de Caldas CHEC S.A.S.P                          
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
				Fondo de Empleados de la Universidad de Caldas                     
				</p>
			</div>
				<div class="logo-accionista2">
								<p class="accionista-p">
			Seguridad de Occidente SUTEV                      
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
		Ingenio la Cabaña Alcaldía de Cali                             
				</p>
			</div>
			<div class="logo-accionista2">
								<p class="accionista-p">
		Secretaría de Educación Cali                        
				</p>
			</div>
		</div>
	</section>
<?php endif; ?>
<style>
.accionistas p {
    font-size: 16px;
    text-align: left !important;
    margin-top: 10px;
    margin-bottom: 0px;
}

	.card-more__info{
		background-color:blue;
		padding: 2rem;
		color: #fff;
		display: none;
		
	}
	.card-more__info.active-info{
		opacity: 1;
		display: block;
	}
</style>


<?php get_footer(); ?>
<script>
	
$('.main-card__btninf').click(function(){
	$(this).siblings('.card-more__info').toggleClass('active-info')
})
</script>