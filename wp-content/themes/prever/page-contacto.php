<?php get_header();  ?>

	<a href="#" class="toTop"> ↑ </a>




<section class="ayuda">
<h6>Encuentra Nuestras oficinas Administrativas de Prever</h6>
<h5>o comunícate en la línea nacional 01 8000 81 59 10</h5>
<div class="row_content">
	<div class="row-contact__tabs">
	

    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<?php $args = array( 'post_type' => 'Contacto');
		$counter = 1;?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		  <a class="nav-link <?php if($counter == 1){ echo 'active';} ?>" id="<?php the_id(); ?>-tab" data-toggle="pill" href="#<?php the_id(); ?>" role="tab" aria-controls="<?php the_id(); ?>" aria-selected="true">
			<p><?php the_title(); ?></p> <i class="fa fa-angle-right" aria-hidden="true"></i>
		  </a>
		<?php $counter++; endwhile; ?>
	
    </div>
</div>
<div class="row-contact__content">

    <div class="tab-content" id="v-pills-tabContent">
		
		<?php $args = array( 'post_type' => 'Contacto');
		$count = 1;
		?>   
		<?php $loop = new WP_Query( $args ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="tab-pane fade show <?php if($count == 1){ echo 'active';} ?> " id="<?php the_id();?>" role="tabpanel" aria-labelledby="<?php the_id(); ?>-tab">
        <div id="Fundaciones" class="tabcontent">
                    <div class="text-content">
                        <div class="map2">
							<?php the_content(); ?>
                        
                        </div>
                        <div class="text-left-content">
                            <h6><?php the_title() ?></h6>
                            
                        <div class="text-horario">
                            <a href="<?php the_field( 'link_de_direccion' ); ?>" class="pin">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg">
                                <p><?php the_field( 'direccion' ); ?> </p>
                            </a>
                            <hr>
                            <div class="pin">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tec.jpg">
                                <p>Teléfono: <?php the_field( 'telefono' ); ?></p>
                            </div>
                            <hr>
                            <div class="pin">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
                                <p>Email: <?php the_field( 'correo' ); ?></p>
                            </div>
                            <hr>
                            <div class="pin">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg">
                                <p>Horario de Atención  <br><?php the_field( 'horario_de_atencion' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
		<?php $count++; endwhile; ?>
      
		

		
		
    </div>
  </div>
</div>
</div>

</section>



<section class="formulario">
<h6>¿Necesitas ayuda? </h6>
<h5>Quiero que me contacten</h5>
<div class="flex-form">
    <div class="assitent">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assitent.png">
    </div>
	<div class="form">
		<?php echo do_shortcode('[hubspot type=form portal=5679320 id=55c385ea-5c7c-4bda-a696-003a772cc765]'); ?>
	<!--< ?php echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) ); ?>-->
		   </div>
   
</div>
</section>
<style type="text/css">
	.frm_submit{
		
		margin-top: 4rem;
	}
	.frm_form_field{
		
		position:relative;
	}
	.flex-form .fa{
		
		position: absolute;
    top: 4.5rem;
    left: 2rem;
    color: #33508d;
	}
	.frm_fields_container{
		
		
		    flex-direction: column !important;
	}
	input[type="text"],input[type="tel"],
	input[type="email"]{
		display: block;
    width: 100%;
    padding: 0.5rem 0.75rem;
    font-size: 1rem;
    line-height: 1.25;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    border-radius: 5px 0px 0px 5px;
    padding-left: 2.375rem;
    height: 62.9px;
    font-size: 15px;
    padding-left: 50px;
	}
	
	textarea{
		display: block;
    width: 100%;
    padding: 2rem 0.75rem .5rem;
    font-size: 1rem;
    line-height: 1.25;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    border-radius: 5px 0px 0px 5px;
    padding-left: 2.375rem;
    height: 100px;
    font-size: 15px;
    padding-left: 50px;
		
	}
</style>
<?php get_footer(); ?>
