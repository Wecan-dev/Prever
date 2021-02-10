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

// Register Custom ClienteEmpresarial
function ClienteEmpresarial() {

    $labels = array(
        'name'                  => _x( 'Cliente Empresarial ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Cliente Empresarial', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Cliente Empresarial', 'prever' ),
        'name_admin_bar'        => __( 'Cliente Empresarial', 'prever' ),
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
        'label'                 => __( 'Cliente Empresarial Home', 'prever' ),
        'description'           => __( 'Post Type Description', 'prever' ),
        'labels'                => $labels,
        'supports'              => array( 'title'),
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
    register_post_type( 'ClienteEmpresarial', $args );

}
add_action( 'init', 'ClienteEmpresarial', 0 );


// Register Custom Recaudos
function Recaudos() {

    $labels = array(
        'name'                  => _x( 'Recaudos ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'Recaudos ', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'Recaudos', 'prever' ),
        'name_admin_bar'        => __( 'Recaudos', 'prever' ),
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
        'label'                 => __( 'Recaudos', 'prever' ),
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
    register_post_type( 'Recaudos', $args );

}
add_action( 'init', 'Recaudos', 0 );



// Register Recaudos Custom Taxonomy
function recaudos_taxonomy() {

	$labels = array(
		'name'                       => _x( '<span class="name_none">Seleccione tipo de recaudo</span>', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Seleccione tipo de recaudo', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Seleccione tipo de recaudo', 'text_domain' ),
		'all_items'                  => __( 'Todos los Recaudos', 'text_domain' ),
		'parent_item'                => __( 'Parent Recaudos', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Recaudos:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva Recaudos', 'text_domain' ),
		'add_new_item'               => __( 'Agregar Nueva Recaudos', 'text_domain' ),
		'edit_item'                  => __( 'Editar Recaudos', 'text_domain' ),
		'update_item'                => __( 'Actualizar Recaudos', 'text_domain' ),
		'view_item'                  => __( 'Ver Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Buscar Recaudos', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		
	);
	register_taxonomy( 'tipo_recaudos', array( 'recaudos' ), $args );
}
add_action( 'init', 'recaudos_taxonomy', 0 );


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



// Register Custom Recaudos
function alianza() {

    $labels = array(
        'name'                  => _x( 'alianza ', 'Post Type General Name', 'prever' ),
        'singular_name'         => _x( 'alianza ', 'Post Type Singular Name', 'prever' ),
        'menu_name'             => __( 'alianza', 'prever' ),
        'name_admin_bar'        => __( 'alianza', 'prever' ),
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
        'label'                 => __( 'alianza', 'prever' ),
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
    register_post_type( 'alianza', $args );

}
add_action( 'init', 'alianza', 0 );



// Register alianza Custom Taxonomy
function alianza_taxonomy() {

	$labels = array(
		'name'                       => _x( '<span class="name_none">Seleccione tipo de alianza</span>', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Seleccione tipo de alianza', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Seleccione tipo de alianza', 'text_domain' ),
		'all_items'                  => __( 'Todos los alianza', 'text_domain' ),
		'parent_item'                => __( 'Parent alianza', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent alianza:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva alianza', 'text_domain' ),
		'add_new_item'               => __( 'Agregar Nueva alianza', 'text_domain' ),
		'edit_item'                  => __( 'Editar alianza', 'text_domain' ),
		'update_item'                => __( 'Actualizar alianza', 'text_domain' ),
		'view_item'                  => __( 'Ver Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Buscar alianza', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		
	);
	register_taxonomy( 'tipo_alianza', array( 'alianza' ), $args );
}
add_action( 'init', 'alianza_taxonomy', 0 );

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
	  $wp_customize->add_section('calidad', array (
        'title' => 'Calidad',
        'panel' => 'Quienes Somos'
      ));
           
      $wp_customize->add_setting('calidad_item_1');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'calidad_item_1', array (
        'label' => 'Subtitulo',
        'description' => 'Subtitulo Visión',
        'section' => 'calidad',
        'settings' => 'calidad_item_1'
      )));
      //image
      $wp_customize->add_setting('calidad_item_2');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'calidad_item_2', array (
        'label' => 'Titulo',
        'description' => 'Titulo Visión',
        'section' => 'calidad',
        'settings' => 'calidad_item_2',
      )));
    //image
      $wp_customize->add_setting('calidad_item_3');
    
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'calidad_item_3', array (
        'label' => 'Texto',
        'description' => 'Texto Visión',
        'section' => 'calidad',
        'settings' => 'calidad_item_3',
        'type' => 'textarea'
        
      )));
      //image
      $wp_customize->add_setting('quienes_somos_img');
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'quienes_somos_img', array (
        'label' => 'Imagen',
        'description' => 'Imagen ',
        'section' => 'calidad',
        'settings' => 'quienes_somos_img'
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
        

/***********************/



/** Trabaja con nosotros **/
$wp_customize->add_panel('Trabaja con nosotros',
                array(
                    'title' => 'Trabaja con nosotros',
                    'priority' => 1,
                    )
                );
          $wp_customize->add_section('Seccion 1', array (
            'title' => 'Informacion principal',
            'panel' => 'Trabaja con nosotros'
          ));
$wp_customize->add_section('Seccion 2', array (
            'title' => 'Logos',
            'panel' => 'Trabaja con nosotros'
          ));
          //image
          $wp_customize->add_setting('trabaja_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'trabaja_item_1', array (
            'label' => 'Subtitulo',
            'description' => 'Subtitulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'trabaja_item_1'
          )));
          //image
          $wp_customize->add_setting('trabaja_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'trabaja_item_2', array (
            'label' => 'Titulo',
            'description' => 'Titulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'trabaja_item_2',
          )));
        //image
          $wp_customize->add_setting('trabaja_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'trabaja_item_3', array (
            'label' => 'Texto',
            'description' => 'Texto Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'trabaja_item_3',
            'type' => 'textarea'
            
          )));
          //image
          $wp_customize->add_setting('trabaja_item_4');
        
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'trabaja_item_4', array (
            'label' => 'Imagen',
            'description' => 'Imagen Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'trabaja_item_4'
          )));

        
		$wp_customize->add_setting('linktrabaja_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linktrabaja_item_1', array (
            'label' => 'Url',
            'description' => 'Titulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'linktrabaja_item_1',
          )));
		

	
        
		$wp_customize->add_setting('linktrabaja_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linktrabaja_item_2', array (
            'label' => 'Url',
            'description' => 'Titulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'linktrabaja_item_2',
          )));
	
        
		$wp_customize->add_setting('linktrabaja_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linktrabaja_item_3', array (
            'label' => 'Url',
            'description' => 'Titulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'linktrabaja_item_3',
          )));
	
        
		$wp_customize->add_setting('linktrabaja_item_4');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linktrabaja_item_4', array (
            'label' => 'Url',
            'description' => 'Titulo Trabaja con nosotros',
            'section' => 'Seccion 1',
            'settings' => 'linktrabaja_item_4',
          )));

		/** Section 2*/
		//image logo 1
          $wp_customize->add_setting('logotrabaja_item_1');
        
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logotrabaja_item_1', array (
            'label' => 'Imagen',
            'description' => 'Logo 1',
            'section' => 'Seccion 2',
            'settings' => 'logotrabaja_item_1'
          )));
	$wp_customize->add_setting('urltrabaja_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'urltrabaja_item_1', array (
            'label' => 'Url de logos',
            'description' => 'Enlace',
            'section' => 'Seccion 2',
            'settings' => 'urltrabaja_item_1',
          )));
        
        
		//image logo 2
          $wp_customize->add_setting('logotrabaja_item_2');
        
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logotrabaja_item_2', array (
            'label' => 'Imagen',
            'description' => 'Logo 2',
            'section' => 'Seccion 2',
            'settings' => 'logotrabaja_item_2'
          )));
	$wp_customize->add_setting('urltrabaja_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'urltrabaja_item_2', array (
            'label' => 'Url de logos',
            'description' => 'Enlace',
            'section' => 'Seccion 2',
            'settings' => 'urltrabaja_item_2',
          )));
        
        
        

		/** Pagos **/
$wp_customize->add_panel('Medios de pagos',
                array(
                    'title' => 'Medios de pagos',
                    'priority' => 1,
                    )
                );
          $wp_customize->add_section('Seccion de principal', array (
            'title' => 'Informacion principal',
            'panel' => 'Medios de pagos'
          ));
$wp_customize->add_section('Seccion comunicate', array (
            'title' => 'Comunícate con nosotros',
            'panel' => 'Medios de pagos'
          ));

          
       
          $wp_customize->add_setting('pagos_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pagos_item_1', array (
            'label' => 'Titulo',
            'description' => 'Titulo Medios de pagos',
            'section' => 'Seccion de principal',
            'settings' => 'pagos_item_1',
          )));
        
          $wp_customize->add_setting('pagos_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pagos_item_2', array (
            'label' => 'Descripcion',
            'description' => 'Texto Medios de pagos',
            'section' => 'Seccion de principal',
            'settings' => 'pagos_item_2',
            'type' => 'textarea'
            
          )));

          $wp_customize->add_setting('pagos_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pagos_item_3', array (
            'label' => 'Texto en negrita',
            'description' => 'Texto Medios de pagos',
            'section' => 'Seccion de principal',
            'settings' => 'pagos_item_3',
            'type' => 'textarea'
            
          )));
          //image
          $wp_customize->add_setting('pagos_item_4');
        
          $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pagos_item_4', array (
            'label' => 'Imagen',
            'description' => 'Imagen Medios de pagos',
            'section' => 'Seccion de principal',
            'settings' => 'pagos_item_4'
          )));

        $wp_customize->add_setting('textopago_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'textopago_item_1', array (
            'label' => 'Texto de botón 1',
            'section' => 'Seccion de principal',
            'settings' => 'textopago_item_1',
          )));
	
		$wp_customize->add_setting('linkpago_item_1');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkpago_item_1', array (
            'label' => 'Url Botón 1',
            'section' => 'Seccion de principal',
            'settings' => 'linkpago_item_1',
          )));

          
		 $wp_customize->add_setting('textopago_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'textopago_item_2', array (
            'label' => 'Texto de botón 2',
            'section' => 'Seccion de principal',
            'settings' => 'textopago_item_2',
          )));


          $wp_customize->add_setting('linkpago_item_2');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkpago_item_2', array (
            'label' => 'Url Botón 2',
            'section' => 'Seccion de principal',
            'settings' => 'linkpago_item_2',
          )));

         
			 $wp_customize->add_setting('textopago_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'textopago_item_3', array (
            'label' => 'Texto de botón 3',
            'section' => 'Seccion de principal',
            'settings' => 'textopago_item_3',
          )));
	
	
          $wp_customize->add_setting('linkpago_item_3');
        
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkpago_item_3', array (
            'label' => 'Url Botón 3',
            'section' => 'Seccion de principal',
            'settings' => 'linkpago_item_3',
          )));
		
	
		//ICONO
        $wp_customize->add_setting('comunicate_item_3');
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'comunicate_item_3', array (
        'label' => 'Icono',
        'description' => 'Icono Comunícate con nosotros',
        'section' => 'Seccion comunicate',
        'settings' => 'comunicate_item_3'
        )));
		$wp_customize->add_setting('comunicate_item_1');
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'comunicate_item_1', array (
        'label' => 'Titulo',
        'description' => 'Titulo Comunícate con nosotros',
        'section' => 'Seccion comunicate',
        'settings' => 'comunicate_item_1',
        )));
    
        $wp_customize->add_setting('comunicate_item_2');
    
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'comunicate_item_2', array (
        'label' => 'Descripcion',
        'description' => 'Texto Comunícate con nosotros',
        'section' => 'Seccion comunicate',
        'settings' => 'comunicate_item_2',
        'type' => 'textarea'
        
        )));

     
        //image
        $wp_customize->add_setting('comunicate_item_4');
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'comunicate_item_4', array (
        'label' => 'Imagen',
        'description' => 'Imagen Comunícate con nosotros',
        'section' => 'Seccion comunicate',
        'settings' => 'comunicate_item_4'
        )));

	/** Ayuda al duelo **/
$wp_customize->add_panel('Ayuda al duelo',
        array(
            'title' => 'Ayuda al duelo',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('Ayuda Seccion 1', array (
    'title' => 'Informacion principal',
    'panel' => 'Ayuda al duelo'
  ));
$wp_customize->add_section('Ayuda Seccion 2', array (
  'title' => 'Indice de publicaciones',
  'panel' => 'Ayuda al duelo'
));

$wp_customize->add_setting('ayuda_seccion1_item_1');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion1_item_1', array (
  'label' => 'Subtitulo',
  'description' => 'Subtitulo Ayuda_seccion1 al duelo',
  'section' => 'Ayuda Seccion 1',
  'settings' => 'ayuda_seccion1_item_1'
)));

$wp_customize->add_setting('ayuda_seccion1_item_2');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion1_item_2', array (
  'label' => 'Titulo',
  'description' => 'Titulo Ayuda_seccion1 al duelo',
  'section' => 'Ayuda Seccion 1',
  'settings' => 'ayuda_seccion1_item_2',
)));

$wp_customize->add_setting('ayuda_seccion1_item_3');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion1_item_3', array (
  'label' => 'Texto',
  'description' => 'Texto Ayuda_seccion1 al duelo',
  'section' => 'Ayuda Seccion 1',
  'settings' => 'ayuda_seccion1_item_3',
  'type' => 'textarea'
  
)));

$wp_customize->add_setting('ayuda_seccion1_item_4');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion1_item_4', array (
  'label' => 'Imagen',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 1',
  'settings' => 'ayuda_seccion1_item_4'
)));




$wp_customize->add_setting('ayuda_seccion2_item_1');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_item_1', array (
  'label' => 'Subtitulo',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_item_1'
)));

$wp_customize->add_setting('ayuda_seccion2_item_2');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_item_2', array (
  'label' => 'Titulo',
  'description' => 'Titulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_item_2',
)));

$wp_customize->add_setting('ayuda_seccion2_item_3');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_item_3', array (
  'label' => 'Texto',
  'description' => 'Texto Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_item_3',
  'type' => 'textarea'
  
)));

$wp_customize->add_setting('ayuda_seccion2_item_4');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_item_4', array (
  'label' => 'Imagen',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_item_4'
)));
	
	$wp_customize->add_setting('ayuda_seccion2_list');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list', array (
  'label' => 'Texto Principal',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list'
)));
	$wp_customize->add_setting('ayuda_seccion2_listpdf');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf', array (
  'label' => 'PDF edicion especial',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf'
)));

$wp_customize->add_setting('ayuda_seccion2_list1');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list1', array (
  'label' => 'Texto 1',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list1'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf1');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf1', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf1'
)));
	


$wp_customize->add_setting('ayuda_seccion2_list2');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list2', array (
  'label' => 'Texto 2',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list2'
)));


$wp_customize->add_setting('ayuda_seccion2_listpdf2');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf2', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf2'
)));
	

$wp_customize->add_setting('ayuda_seccion2_list3');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list3', array (
  'label' => 'Texto 3',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list3'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf3');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf3', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf3'
)));
	

$wp_customize->add_setting('ayuda_seccion2_list4');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list4', array (
  'label' => 'Texto 4',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list4'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf4');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf4', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf4'
)));
	


$wp_customize->add_setting('ayuda_seccion2_list5');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list5', array (
  'label' => 'Texto 5',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list5'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf5');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf5', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf5'
)));
	

$wp_customize->add_setting('ayuda_seccion2_list6');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list6', array (
  'label' => 'Texto 6',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list6'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf6');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf6', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf6'
)));
	

$wp_customize->add_setting('ayuda_seccion2_list7');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list7', array (
  'label' => 'Texto 7',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list7'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf7');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf7', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf7'
)));
	

$wp_customize->add_setting('ayuda_seccion2_list8');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ayuda_seccion2_list8', array (
  'label' => 'Texto 8',
  'description' => 'Subtitulo Ayuda_seccion2 al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_list8'
)));

$wp_customize->add_setting('ayuda_seccion2_listpdf8');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ayuda_seccion2_listpdf8', array (
  'label' => 'PDF 1',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Ayuda Seccion 2',
  'settings' => 'ayuda_seccion2_listpdf8'
)));
	
	
	/** Club de beneficios **/
$wp_customize->add_panel('Club de beneficios',
        array(
            'title' => 'Club de beneficios',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('Club Seccion 1', array (
    'title' => 'Informacion principal',
    'panel' => 'Club de beneficios'
  ));



  $wp_customize->add_setting('club_seccion1_item_1');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'club_seccion1_item_1', array (
  'label' => 'Subtitulo',
  'description' => 'Subtitulo club_seccion1 al duelo',
  'section' => 'Club Seccion 1',
  'settings' => 'club_seccion1_item_1'
)));

$wp_customize->add_setting('club_seccion1_item_2');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'club_seccion1_item_2', array (
  'label' => 'Titulo',
  'description' => 'Titulo club_seccion1 al duelo',
  'section' => 'Club Seccion 1',
  'settings' => 'club_seccion1_item_2',
)));

$wp_customize->add_setting('club_seccion1_item_3');

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'club_seccion1_item_3', array (
  'label' => 'Texto',
  'description' => 'Texto club_seccion1 al duelo',
  'section' => 'Club Seccion 1',
  'settings' => 'club_seccion1_item_3',
  'type' => 'textarea'
  
)));

$wp_customize->add_setting('club_seccion1_item_4');

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'club_seccion1_item_4', array (
  'label' => 'Imagen',
  'description' => 'Imagen Ayuda al duelo',
  'section' => 'Club Seccion 1',
  'settings' => 'club_seccion1_item_4'
)));


	
	
        }

    add_action('customize_register','theme_customize_register');


    
    




    