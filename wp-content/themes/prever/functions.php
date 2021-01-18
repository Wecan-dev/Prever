<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
/*******truncar cantidad de palabras******/

function my_theme_setup() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



// Register Custom Banner Home
function Banner() {

  $labels = array(
    'name'                  => _x( 'Banner ', 'Post Type General Name', 'prever' ),
    'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'prever' ),
    'menu_name'             => __( 'Banners', 'prever' ),
    'name_admin_bar'        => __( 'Banners', 'prever' ),
    'archives'              => __( 'Archivo', 'prever' ),
    'attributes'            => __( 'Atributos', 'prever' ),
    'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
    'all_items'             => __( 'Todos los artículos', 'prever' ),
    'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
    'add_new'               => __( 'Añadir nuevo', 'prever' ),
    'new_item'              => __( 'Nuevo artículo', 'prever' ),
    'edit_item'             => __( 'Editar elemento', 'prever' ),
    'update_item'           => __( 'Actualizar artículo', 'prever' ),
    'view_item'             => __( 'Ver ítem', 'prever' ),
    'view_items'            => __( 'Ver artículos', 'prever' ),
    'search_items'          => __( 'Buscar artículo', 'prever' ),
    'not_found'             => __( 'Extraviado', 'prever' ),
    'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
    'featured_image'        => __( 'Foto principal', 'prever' ),
    'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
    'remove_featured_image' => __( 'Remove featured image', 'prever' ),
    'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
    'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
    'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
    'items_list'            => __( 'Lista de artículos', 'prever' ),
    'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
    'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
  );
  $args = array(
    'label'                 => __( 'Banner Home', 'prever' ),
    'description'           => __( 'Post Type Description', 'prever' ),
    'labels'                => $labels,
    'supports'              => array( 'title','editor', 'thumbnail' ),
    'taxonomies'            => array(  ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-images-alt2',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );



// Register Custom Preguntas Frecuentes
function PreguntasFrecuentes() {

    $labels = array(
        'name'                  => _x( 'Preguntas Frecuentes ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Preguntas Frecuentes', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Preguntas Frecuentes', 'prever' ),
        'name_admin_bar'        => __( 'Preguntas Frecuentes', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Preguntas Frecuentes Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-help',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'PreguntasFrecuentes', $args );

}
add_action( 'init', 'PreguntasFrecuentes', 0 );





// Register Custom Accionistas
function Accionistas() {

    $labels = array(
        'name'                  => _x( 'Accionistas ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Accionistas', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Accionistas', 'prever' ),
        'name_admin_bar'        => __( 'Accionistas', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Accionistas Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-networking',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Accionistas', $args );

}
add_action( 'init', 'Accionistas', 0 );


// Register Custom Planes
function Planes() {

    $labels = array(
        'name'                  => _x( 'Planes ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Planes', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Planes', 'prever' ),
        'name_admin_bar'        => __( 'Planes', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Planes Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'editor' ),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-write-blog',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Planes', $args );

}
add_action( 'init', 'Planes', 0 );


// Register Custom Metodos
function Metodos() {

    $labels = array(
        'name'                  => _x( 'Metodos ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Metodos', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Metodos', 'prever' ),
        'name_admin_bar'        => __( 'Metodos', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Metodos Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-ol',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Metodos', $args );

}
add_action( 'init', 'Metodos', 0 );



// Register Custom Servicio
function Servicios() {

    $labels = array(
        'name'                  => _x( 'Servicios ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Servicios', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Servicios', 'prever' ),
        'name_admin_bar'        => __( 'Servicios', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Servicios Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-generic',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Servicios', $args );

}
add_action( 'init', 'Servicios', 0 );


// Register Custom Homenaje
function Homenaje() {

    $labels = array(
        'name'                  => _x( 'Homenaje ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Homenaje', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Homenaje', 'prever' ),
        'name_admin_bar'        => __( 'Homenaje', 'prever' ),
        'archives'              => __( 'Archivo', 'prever' ),
        'attributes'            => __( 'Atributos', 'prever' ),
        'parent_item_colon'     => __( 'Artículo principal', 'prever' ),
        'all_items'             => __( 'Todos los artículos', 'prever' ),
        'add_new_item'          => __( 'Agregar ítem nuevo', 'prever' ),
        'add_new'               => __( 'Añadir nuevo', 'prever' ),
        'new_item'              => __( 'Nuevo artículo', 'prever' ),
        'edit_item'             => __( 'Editar elemento', 'prever' ),
        'update_item'           => __( 'Actualizar artículo', 'prever' ),
        'view_item'             => __( 'Ver ítem', 'prever' ),
        'view_items'            => __( 'Ver artículos', 'prever' ),
        'search_items'          => __( 'Buscar artículo', 'prever' ),
        'not_found'             => __( 'Extraviado', 'prever' ),
        'not_found_in_trash'    => __( 'No se encuentra en la basura', 'prever' ),
        'featured_image'        => __( 'Foto principal', 'prever' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'prever' ),
        'remove_featured_image' => __( 'Remove featured image', 'prever' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'prever' ),
        'insert_into_item'      => __( 'Insertar en el elemento', 'prever' ),
        'uploaded_to_this_item' => __( 'Subido a este artículo', 'prever' ),
        'items_list'            => __( 'Lista de artículos', 'prever' ),
        'items_list_navigation' => __( 'Lista de elementos de navegación', 'prever' ),
        'filter_items_list'     => __( 'Lista de elementos de filtro', 'prever' ),
    );
    $args = array(
        'label'                 => __( 'Homenaje Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-awards',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Homenaje', $args );

}
add_action( 'init', 'Homenaje', 0 );


/***************** Termmeta *****************/
function termmeta_value( $meta_key, $post_id ){
            global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."termmeta WHERE meta_key = '$meta_key' and term_id = '$post_id'"); 
              foreach($result_link as $r)
              {
                      $value = $r->meta_value;                      
              }
              $result_link1 = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."posts WHERE ID = '$value'"); 
               
              return $value;

}

/***************** Termmeta IMG *****************/
function termmeta_value_img( $meta_key, $post_id ){
            global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."termmeta WHERE meta_key = '$meta_key' and term_id = '$post_id'"); 
              foreach($result_link as $r)
              {
                      $value = $r->meta_value;                      
              }
              $result_link1 = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."posts WHERE ID = '$value'"); 
              foreach($result_link1 as $r1)
               {
                      $value_img = $r1->guid;                      
              }              
              return $value_img;

}
/******Quienes Somos************/
function theme_customize_register($wp_customize){
    $wp_customize->add_panel('Quienes Somos',
            array(
                'title' => 'Quienes Somos',
                'priority' => 1,
                )
            );
      $wp_customize->add_section('mision', array (
        'title' => 'Misión',
        'panel' => 'Quienes Somos'
      ));
      //image
      $wp_customize->add_setting('mision_item_1');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mision_item_1', array (
        'label' => 'Subtitulo',
        'description' => 'Subtitulo Misión',
        'section' => 'mision',
        'settings' => 'mision_item_1'
      )));
      //image
      $wp_customize->add_setting('mision_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mision_item_2', array (
        'label' => 'Titulo',
        'description' => 'Titulo Misión',
        'section' => 'mision',
        'settings' => 'mision_item_2',
      )));
    //image
      $wp_customize->add_setting('mision_item_3');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mision_item_3', array (
        'label' => 'Texto',
        'description' => 'Texto Misión',
        'section' => 'mision',
        'settings' => 'mision_item_3',
        'type' => 'textarea'
        
      )));
      //image
      $wp_customize->add_setting('mision_item_4');
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mision_item_4', array (
        'label' => 'Imagen',
        'description' => 'Imagen Misión',
        'section' => 'mision',
        'settings' => 'mision_item_4'
      )));
    
    
           $wp_customize->add_section('vision', array (
        'title' => 'Visión',
        'panel' => 'Quienes Somos'
      ));
           
      $wp_customize->add_setting('vision_item_1');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vision_item_1', array (
        'label' => 'Subtitulo',
        'description' => 'Subtitulo Visión',
        'section' => 'vision',
        'settings' => 'vision_item_1'
      )));
      //image
      $wp_customize->add_setting('vision_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vision_item_2', array (
        'label' => 'Titulo',
        'description' => 'Titulo Visión',
        'section' => 'vision',
        'settings' => 'vision_item_2',
      )));
    //image
      $wp_customize->add_setting('vision_item_3');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vision_item_3', array (
        'label' => 'Texto',
        'description' => 'Texto Visión',
        'section' => 'vision',
        'settings' => 'vision_item_3',
        'type' => 'textarea'
        
      )));
      //image
      $wp_customize->add_setting('vision_item_4');
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vision_item_4', array (
        'label' => 'Imagen',
        'description' => 'Imagen Visión',
        'section' => 'vision',
        'settings' => 'vision_item_4'
      )));



      $wp_customize->add_section('accion', array (
        'title' => 'Accionistas',
        'panel' => 'Quienes Somos'
      ));
      //image
      $wp_customize->add_setting('accion_item_1');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'accion_item_1', array (
        'label' => 'Titulo',
        'description' => 'Titulo Accionistas',
        'section' => 'accion',
        'settings' => 'accion_item_1'
      )));
      //image
      $wp_customize->add_setting('accion_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'accion_item_2', array (
        'label' => 'Subtitulo',
        'description' => 'Subtitulo Accionistas',
        'section' => 'accion',
        'settings' => 'accion_item_2',
      )));
    
          $wp_customize->add_section('Sedes', array (
        'title' => 'Sedes',
        'panel' => 'Quienes Somos'
      ));
    
      $wp_customize->add_setting('Sedes_item_1');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_1', array (
        'label' => 'Subtitulo',
        'description' => 'Subtitulo Sedes',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_1'
      )));
      //image
      $wp_customize->add_setting('Sedes_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_2', array (
        'label' => 'Titulo',
        'description' => 'Titulo Sedes',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_2',
      )));
    //image
      $wp_customize->add_setting('Sedes_item_3');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_3', array (
        'label' => 'Texto',
        'description' => 'Texto Sedes',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_3',
        'type' => 'textarea'
        
      )));
      //image
      $wp_customize->add_setting('Sedes_item_4');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_4', array (
        'label' => 'URL Localización',
        'description' => 'URL Localización',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_4'
      )));

      $wp_customize->add_setting('Sedes_item_5');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_5', array (
        'label' => 'Numero de Teléfono',
        'description' => 'Numero de Teléfono',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_5'
      )));
      
      $wp_customize->add_setting('Sedes_item_6');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_6', array (
        'label' => 'URL Email',
        'description' => 'URL Email',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_6'
      )));

      $wp_customize->add_setting('Sedes_item_7');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_7', array (
        'label' => 'URL Facebook',
        'description' => 'URL Facebook',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_7'
      )));

      $wp_customize->add_setting('Sedes_item_8');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_8', array (
        'label' => 'URL Instagram',
        'description' => 'URL Instagram',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_8'
      )));

      $wp_customize->add_setting('Sedes_item_9');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_9', array (
        'label' => 'URL Youtube',
        'description' => 'URL Youtube',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_9'
      )));

      $wp_customize->add_setting('Sedes_item_10');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_10', array (
        'label' => 'URL Linkedin',
        'description' => 'URL Linkedin',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_10'
      )));

      $wp_customize->add_setting('Sedes_item_11');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'Sedes_item_11', array (
        'label' => 'URL Iframe',
        'description' => 'URL Iframe',
        'section' => 'Sedes',
        'settings' => 'Sedes_item_11'
      )));


      $wp_customize->add_section('call', array (
        'title' => 'Call Center',
        'panel' => 'Quienes Somos'
      ));
      //image
      $wp_customize->add_setting('call_item_1');
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'call_item_1', array (
        'label' => 'Imagen',
        'description' => 'Imagen Call Center',
        'section' => 'call',
        'settings' => 'call_item_1'
      )));
      //image
      $wp_customize->add_setting('call_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'call_item_2', array (
        'label' => 'Titulo',
        'description' => 'Titulo Call Center',
        'section' => 'call',
        'settings' => 'call_item_2',
      )));
    //image
      $wp_customize->add_setting('call_item_3');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'call_item_3', array (
        'label' => 'Texto',
        'description' => 'Texto Call Center',
        'section' => 'call',
        'settings' => 'call_item_3',
        'type' => 'textarea'
        
      )));
    
    
      /***********************/



/******Quienes Somos************/
      $wp_customize->add_panel('Preguntas Frecuentes',
                array(
                    'title' => 'Preguntas Frecuentes',
                    'priority' => 1,
                    )
                );
          $wp_customize->add_section('ayuda', array (
            'title' => 'Ayuda',
            'panel' => 'Preguntas Frecuentes'
          ));
          //image
          $wp_customize->add_setting('ayuda_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_item_1', array (
            'label' => 'Subtitulo',
            'description' => 'Subtitulo Ayuda',
            'section' => 'ayuda',
            'settings' => 'ayuda_item_1'
          )));
          //image
          $wp_customize->add_setting('ayuda_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_item_2', array (
            'label' => 'Titulo',
            'description' => 'Titulo Ayuda',
            'section' => 'ayuda',
            'settings' => 'ayuda_item_2',
          )));
        //image
          $wp_customize->add_setting('ayuda_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_item_3', array (
            'label' => 'Texto',
            'description' => 'Texto Ayuda',
            'section' => 'ayuda',
            'settings' => 'ayuda_item_3',
            'type' => 'textarea'
            
          )));
          //image
          $wp_customize->add_setting('ayuda_item_4');
        
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_item_4', array (
            'label' => 'Imagen',
            'description' => 'Imagen Ayuda',
            'section' => 'ayuda',
            'settings' => 'ayuda_item_4'
          )));
        
        }
/***********************/

    add_action('customize_register','theme_customize_register');


    
    




    