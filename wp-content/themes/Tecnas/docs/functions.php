<?php 


// Custom Excerpt 
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
} 
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}
// Delete tax description
add_filter( 'get_the_archive_title', function ($title) {
 
if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '' . get_the_author() . '' ;
  }

return $title;

});

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}
add_action('init', 'init_template');

function twentynineteen_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Header', 'twentynineteen' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Add widgets here to appear in your header.', 'twentynineteen' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/***************** Funcion Lang ********************/
function lang(){
    $currentlang = get_bloginfo('language');
    if ($currentlang == 'en-US') {
     $lang="en";
    }
    else $lang="es";
    return $lang;
} 

/*********************************************/
// Register Custom Post Type
if ( ! function_exists('Banner') ) {
  
    // Register Custom Post Type
    function Banner() {
    
        $labels = array(
            'name'                  => _x( 'Banner', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Banner', 'text_domain' ),
            'name_admin_bar'        => __( 'Banner', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Banner', 'text_domain' ),
            'description'           => __( 'Banner de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
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
    
    }

    // Register Custom Post Type
if ( ! function_exists('clientes') ) {
  
    // Register Custom Post Type
    function clientes() {
    
        $labels = array(
            'name'                  => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Clientes', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Clientes', 'text_domain' ),
            'name_admin_bar'        => __( 'Clientes', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'clientes', 'text_domain' ),
            'description'           => __( 'clientes de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array(  ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'clientes', $args );
    
    }
    add_action( 'init', 'clientes', 0 );
    
    }

      // Register Custom Post Type
if ( ! function_exists('destacados__') ) {
  
    // Register Custom Post Type
    function destacados__() {
    
        $labels = array(
            'name'                  => _x( 'Destacados.', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Destacados.', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Destacados', 'text_domain' ),
            'name_admin_bar'        => __( 'Destacados', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'destacados__', 'text_domain' ),
            'description'           => __( 'destacados__ de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array(''),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-star-filled',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'destacados__', $args );
    
    }
    add_action( 'init', 'destacados__', 0 );
    
    }

      // Register Custom Post Type
if ( ! function_exists('producto') ) {
  
    // Register Custom Post Type
    function producto() {
    
        $labels = array(
            'name'                  => _x( 'productos', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'producto', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'productos', 'text_domain' ),
            'name_admin_bar'        => __( 'Producto', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'producto', 'text_domain' ),
            'description'           => __( 'categoria de producto', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-cart',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'producto', $args );
    
    }
    add_action( 'init', 'producto', 0 );
    
    }

    // Register Collection Custom Taxonomy
function categorias_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Categoria', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x(    '', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'categoria de productos', 'text_domain' ),
    'all_items'                  => __( 'All categoria-deproductoss', 'text_domain' ),
    'parent_item'                => __( 'Parent categoria-deproductos', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent categoria-deproductos:', 'text_domain' ),
    'new_item_name'              => __( 'New categoria-deproductos', 'text_domain' ),
    'add_new_item'               => __( 'Add Nueva categoria de productos', 'text_domain' ),
    'edit_item'                  => __( 'Edit| categoria-deproductos', 'text_domain' ),
    'update_item'                => __( 'Update categoria-deproductos', 'text_domain' ),
    'view_item'                  => __( 'See Item', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
    'popular_items'              => __( 'Popular Items', 'text_domain' ),
    'search_items'               => __( 'Search categoria-deproductos', 'text_domain' ),
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
  register_taxonomy( 'categoria-de-productos', array( 'producto' ), $args );
}
add_action( 'init', 'categorias_taxonomy', 0 );

// Register Custom Post Type
if ( ! function_exists('servicios') ) {
  
    // Register Custom Post Type
    function servicios() {
    
        $labels = array(
            'name'                  => _x( 'servicios', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'servicios', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'servicios', 'text_domain' ),
            'name_admin_bar'        => __( 'servicios', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'servicios', 'text_domain' ),
            'description'           => __( 'servicios de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-tools',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'servicios', $args );
    
    }
    add_action( 'init', 'servicios', 0 );
    
    }
// Register Custom Post Type
if ( ! function_exists('certificaciones') ) {
  
    // Register Custom Post Type
    function certificaciones() {
    
        $labels = array(
            'name'                  => _x( 'certificaciones', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'certificaciones', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'certificaciones', 'text_domain' ),
            'name_admin_bar'        => __( 'certificaciones', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'certificaciones', 'text_domain' ),
            'description'           => __( 'certificaciones de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-aside',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'certificaciones', $args );
    
    }
    add_action( 'init', 'certificaciones', 0 );
    
    }

          // Register Custom Post Type
if ( ! function_exists('punto_de_venta') ) {
  
    // Register Custom Post Type
    function punto_de_venta() {
    
        $labels = array(
            'name'                  => _x( 'Punto de Venta', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Punto de Venta', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Punto de Venta', 'text_domain' ),
            'name_admin_bar'        => __( 'Punto de Venta', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'punto_de_venta', 'text_domain' ),
            'description'           => __( 'punto_de_venta de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-location-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'punto_de_venta', $args );
    
    }
    add_action( 'init', 'punto_de_venta', 0 );
    }

// Register Custom Post Type
if ( ! function_exists('paises') ) {
  
    // Register Custom Post Type
    function paises() {
    
        $labels = array(
            'name'                  => _x( 'Otros paises', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Otro país', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Otros paises', 'text_domain' ),
            'name_admin_bar'        => __( 'Otros paises', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'paises', 'text_domain' ),
            'description'           => __( 'paises de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-site',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'paises', $args );
    
    }
    add_action( 'init', 'paises', 0 );
    
    }

    
    /*****************FOOTER*************************************/
    function theme_customize_register($wp_customize){
$wp_customize->add_panel('footer',
        array(
            'title' => 'Footer',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('aliados', array (
    'title' => 'Aliados',
    'panel' => 'footer'
  ));
  //image
  $wp_customize->add_setting('aliados_item_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_1', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_1'
  )));
		   // texto de red
    $wp_customize->add_setting('aliados_item_1_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_aliados_item_1_url', array (
      'description' => 'Imagen URL',
      'section' => 'aliados',
      'settings' => 'aliados_item_1_url'
    )));  
    
  //image
  $wp_customize->add_setting('aliados_item_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_2', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_2'
  )));
		
   // texto de red
    $wp_customize->add_setting('aliados_item_2_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_aliados_item_2_url', array (
      'description' => 'Imagen URL',
      'section' => 'aliados',
      'settings' => 'aliados_item_2_url'
    )));  
    
//image
  $wp_customize->add_setting('aliados_item_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_3', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_3'
  )));
		 // texto de red
    $wp_customize->add_setting('aliados_item_3_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_aliados_item_3_url', array (
      'description' => 'Imagen URL',
      'section' => 'aliados',
      'settings' => 'aliados_item_3_url'
    )));  
   
  //image
  $wp_customize->add_setting('aliados_item_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_4', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_4'
  )));
		   // texto de red
    $wp_customize->add_setting('aliados_item_4_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_aliados_item_4_url', array (
      'description' => 'Imagen URL',
      'section' => 'aliados',
      'settings' => 'aliados_item_4_url'
    )));  
    



       $wp_customize->add_section('email', array (
    'title' => 'Correo eletrónico',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_email', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_email', array (
      'description' => 'Correo eletrónico',
      'section' => 'email',
      'settings' => 'footer_email'
    )));  

      $wp_customize->add_section('politicas', array (
    'title' => 'Políticas de privacidad',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_politicas_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_politicas_es', array (
      'description' => 'Políticas de privacidad (Español)',
      'section' => 'politicas',
      'settings' => 'footer_politicas_es'
    )));  

    // texto de red
    $wp_customize->add_setting('footer_politicas_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_politicas_en', array (
      'description' => 'Privacy policies (Ingles)',
      'section' => 'politicas',
      'settings' => 'footer_politicas_en'
    )));  

      $wp_customize->add_section('contacto', array (
    'title' => 'Contacto',
    'panel' => 'footer'
  ));
		 // texto de red
    $wp_customize->add_setting('footer_politicas_url_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_politicas_url_es', array (
      'description' => 'Políticas de privacidad URL (Español)',
      'section' => 'politicas',
      'settings' => 'footer_politicas_url_es'
    )));  

    // texto de red
    $wp_customize->add_setting('footer_politicas_url_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_politicas_url_en', array (
      'description' => 'Privacy policies URL (Ingles)',
      'section' => 'politicas',
      'settings' => 'footer_politicas_url_en'
    )));  

       // texto de red
    $wp_customize->add_setting('footer_contacto_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_contacto_es', array (
      'description' => 'Contacto (Español)',
      'section' => 'contacto',
      'settings' => 'footer_contacto_es'
    )));  
     // texto de red
    $wp_customize->add_setting('footer_contacto_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_contacto_en', array (
      'description' => 'Contact (Ingles)',
      'section' => 'contacto',
      'settings' => 'footer_contacto_en'
    )));  
		   // texto de red
    $wp_customize->add_setting('footer_contacto_url_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_contacto_url_es', array (
      'description' => 'Contacto URL (Español)',
      'section' => 'contacto',
      'settings' => 'footer_contacto_url_es'
    )));  
     // texto de red
    $wp_customize->add_setting('footer_contacto_url_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_contacto_url_en', array (
      'description' => 'Contact URL (Ingles)',
      'section' => 'contacto',
      'settings' => 'footer_contacto_url_en'
    )));  





  /*********************************************************************/
  /*********************************************************************/
$wp_customize->add_panel('pagina_nuestra_empresa',
        array(
            'title' => 'Pg Nuestra Empresa',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('pagina_nuestra_empresa_titulo', array (
    'title' => 'Titulo',
    'panel' => 'pagina_nuestra_empresa'
  ));
  // texto de red
    $wp_customize->add_setting('titulo_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestra_empresa_es', array (
      'description' => 'Titulo (Español)',
      'section' => 'pagina_nuestra_empresa_titulo',
      'settings' => 'titulo_nuestra_empresa_es'
    )));  
      // texto de red
    $wp_customize->add_setting('titulo_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestra_empresa_en', array (
      'description' => 'Titulo (English)',
      'section' => 'pagina_nuestra_empresa_titulo',
      'settings' => 'titulo_nuestra_empresa_en'
    ))); 
// texto de red
    

 $wp_customize->add_section('pagina_nuestra_empresa_video', array (
    'title' => 'Video',
    'panel' => 'pagina_nuestra_empresa'
  ));
		
	 $wp_customize->add_section('pagina_nuestra_empresa_video', array (
    'title' => 'Video',
    'panel' => 'pagina_nuestra_empresa'
  ));
    //image o video
  $wp_customize->add_setting('nuestra_empresa_video');
  
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'nuestra_empresa_video', array (
    'label' => 'Imagen o Video',
    'description' => '',
    'section' => 'pagina_nuestra_empresa_video',
    'settings' => 'nuestra_empresa_video'
  )));
    

$wp_customize->add_section('pagina_nuestra_empresa_contenido', array (
    'title' => 'Primer párrafo',
    'panel' => 'pagina_nuestra_empresa'
  ));
   // texto de red
    $wp_customize->add_setting('contenido_1_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_1_nuestra_empresa_es', array (
      'description' => 'Texto (Español)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'contenido_1_nuestra_empresa_es',
      'type' => 'textarea'
    )));  
     // texto de red
    $wp_customize->add_setting('contenido_1_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_1_nuestra_empresa_en', array (
      'description' => 'Texto (English)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'contenido_1_nuestra_empresa_en',
      'type' => 'textarea'
    )));  



    // texto de red
    $wp_customize->add_setting('texto_del_boton_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_texto_del_boton_nuestra_empresa_es', array (
      'description' => 'Texto del Boton (Español)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'texto_del_boton_nuestra_empresa_es'
    )));  

     // texto de red
    $wp_customize->add_setting('texto_del_boton_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_texto_del_boton_nuestra_empresa_en', array (
      'description' => 'Texto del Boton (English)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'texto_del_boton_nuestra_empresa_en'
    )));  

    // texto de red
    $wp_customize->add_setting('url_del_boton_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_url_del_boton_nuestra_empresa_es', array (
      'description' => 'Url del Boton (Español)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'url_del_boton_nuestra_empresa_es'
    )));  
   // texto de red
    $wp_customize->add_setting('url_del_boton_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_url_del_boton_nuestra_empresa_en', array (
      'description' => 'Url del Boton (English)',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'url_del_boton_nuestra_empresa_en'
    )));  


    $wp_customize->add_section('pagina_nuestra_empresa_contenido_2', array (
    'title' => 'Por qué elegirnos',
    'panel' => 'pagina_nuestra_empresa'
  ));
     // texto de red
    $wp_customize->add_setting('titulo_2_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_2_nuestra_empresa_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'titulo_2_nuestra_empresa_es'
    )));  
     // texto de red
    $wp_customize->add_setting('titulo_2_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_2_nuestra_empresa_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'titulo_2_nuestra_empresa_en'
    )));  

   // texto de red
    $wp_customize->add_setting('contenido_2_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_2_nuestra_empresa_es', array (
      'description' => 'Texto (Español)',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'contenido_2_nuestra_empresa_es',
      'type' => 'textarea'
    )));
    // texto de red
    $wp_customize->add_setting('contenido_2_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_2_nuestra_empresa_en', array (
      'description' => 'Texto (English)',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'contenido_2_nuestra_empresa_en',
      'type' => 'textarea'
    )));


    $wp_customize->add_section('pagina_nuestra_empresa_pilares', array (
    'title' => 'Nuestros Pilares',
    'panel' => 'pagina_nuestra_empresa'
  ));
     // texto de red
    $wp_customize->add_setting('titulo_nuestros_pilares_nuestra_empresa_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestros_pilares_nuestra_empresa_es', array (
      'description' => 'Título Principal (Español)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'titulo_nuestros_pilares_nuestra_empresa_es'
    )));   
    // texto de red
    $wp_customize->add_setting('titulo_nuestros_pilares_nuestra_empresa_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestros_pilares_nuestra_empresa_en', array (
      'description' => 'Título Principal (English)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'titulo_nuestros_pilares_nuestra_empresa_en'
    )));    
    
     //image
  $wp_customize->add_setting('nuestros_pilares_img_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_img_1', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_pilares',
    'settings' => 'nuestros_pilares_img_1'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_1_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_1_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_1_titulo_es'
    ))); 
    // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_1_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_1_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_1_titulo_en'
    ))); 

    //image
  $wp_customize->add_setting('nuestros_pilares_img_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_img_2', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_pilares',
    'settings' => 'nuestros_pilares_img_2'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_2_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_2_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_2_titulo_es'
    ))); 
    // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_2_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_2_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_2_titulo_en'
    ))); 

    //image
  $wp_customize->add_setting('nuestros_pilares_img_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_img_3', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_pilares',
    'settings' => 'nuestros_pilares_img_3'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_3_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_3_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_3_titulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_3_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_3_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_3_titulo_en'
    ))); 

    //image
  $wp_customize->add_setting('nuestros_pilares_img_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_img_4', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_pilares',
    'settings' => 'nuestros_pilares_img_4'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_4_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_4_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_4_titulo_es'
    ))); 
 // texto de red
    $wp_customize->add_setting('nuestros_pilares_img_4_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_4_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_4_titulo_en'
    ))); 




     $wp_customize->add_section('pagina_nuestra_empresa_slogan', array (
    'title' => 'Slogan',
    'panel' => 'pagina_nuestra_empresa'
  ));
      
    
     //image
  $wp_customize->add_setting('nuestros_pilares_sloga_img_1');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_sloga_img_1', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_slogan',
    'settings' => 'nuestros_pilares_sloga_img_1'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_1_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_1_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_1_titulo_es'
    ))); 
    // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_1_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_1_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_1_titulo_en'
    ))); 


    //image
  $wp_customize->add_setting('nuestros_pilares_sloga_img_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_sloga_img_2', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_slogan',
    'settings' => 'nuestros_pilares_sloga_img_2'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_2_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_2_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_2_titulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_2_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_2_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_2_titulo_en'
    ))); 

    //image
  $wp_customize->add_setting('nuestros_pilares_sloga_img_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_sloga_img_3', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_slogan',
    'settings' => 'nuestros_pilares_sloga_img_3'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_3_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_3_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_3_titulo_es'
    )));
     // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_3_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_3_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_3_titulo_en'
    ))); 

    //image
  $wp_customize->add_setting('nuestros_pilares_sloga_img_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nuestros_pilares_sloga_img_4', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'pagina_nuestra_empresa_slogan',
    'settings' => 'nuestros_pilares_sloga_img_4'
  )));

   // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_4_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_4_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_4_titulo_es'
    ))); 
    // texto de red
    $wp_customize->add_setting('nuestros_pilares_sloga_img_4_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_4_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_4_titulo_en'
    ))); 

    /**************Contáctanos********************************/
    $wp_customize->add_panel('Contactanos',
        array(
            'title' => 'Contáctanos',
            'priority' => 1,
            )
        );
  $wp_customize->add_section('Contactanos_direccion', array (
    'title' => 'Dirección',
    'panel' => 'Contactanos'
  ));

   //image
  $wp_customize->add_setting('direccion_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'direccion_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_direccion',
    'settings' => 'direccion_img'
  )));

  // texto de red
    $wp_customize->add_setting('contactanos-direccion_tittulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-direccion_tittulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'Contactanos_direccion',
      'settings' => 'contactanos-direccion_tittulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('contactanos-direccion_tittulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-direccion_tittulo_en', array (
      'description' => 'Título (English)',
      'section' => 'Contactanos_direccion',
      'settings' => 'contactanos-direccion_tittulo_en'
    ))); 

    // texto de red
    $wp_customize->add_setting('contactanos-direccion', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-direccion_es', array (
      'description' => 'Dirección',
      'section' => 'Contactanos_direccion',
      'settings' => 'contactanos-direccion'
    ))); 
		
		   // texto de red
    $wp_customize->add_setting('contactanos-direccion_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-direccion_url', array (
      'description' => 'Dirección URL',
      'section' => 'Contactanos_direccion',
      'settings' => 'contactanos-direccion_url'
    ))); 
  

////////////////Télefono////////////////////////////////////////////////

    $wp_customize->add_section('Contactanos_telefono', array (
    'title' => 'Teléfono',
    'panel' => 'Contactanos'
  ));

 //image
  $wp_customize->add_setting('telefono_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'telefono_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_telefono',
    'settings' => 'telefono_img'
  )));
  // texto de red
    $wp_customize->add_setting('contactanos-telefono_tittulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-telefono_tittulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'Contactanos_telefono',
      'settings' => 'contactanos-telefono_tittulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('contactanos-telefono_tittulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-telefono_tittulo_en', array (
      'description' => 'Título (English)',
      'section' => 'Contactanos_telefono',
      'settings' => 'contactanos-telefono_tittulo_en'
    ))); 

    // texto de red
    $wp_customize->add_setting('contactanos-telefono', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-telefono', array (
      'description' => 'Nº',
      'section' => 'Contactanos_telefono',
      'settings' => 'contactanos-telefono'
    ))); 
		 // texto de red
    $wp_customize->add_setting('contactanos-telefono_url', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-telefono_url', array (
      'description' => 'Nº URL',
      'section' => 'Contactanos_telefono',
      'settings' => 'contactanos-telefono_url'
    ))); 
   
    ////////////////Correo////////////////////////////////////////////////

    $wp_customize->add_section('Contactanos_correo', array (
    'title' => 'Correo',
    'panel' => 'Contactanos'
  ));

     //image
  $wp_customize->add_setting('correo_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'correo_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_correo',
    'settings' => 'correo_img'
  )));

  // texto de red
    $wp_customize->add_setting('contactanos-correo_tittulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-correo_tittulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'Contactanos_correo',
      'settings' => 'contactanos-correo_tittulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('contactanos-correo_tittulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-correo_tittulo_en', array (
      'description' => 'Título (English)',
      'section' => 'Contactanos_correo',
      'settings' => 'contactanos-correo_tittulo_en'
    ))); 

    // texto de red
    $wp_customize->add_setting('contactanos-correo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-correo', array (
      'description' => 'Correo',
      'section' => 'Contactanos_correo',
      'settings' => 'contactanos-correo'
    ))); 
  

     ////////////////Redes Sociales////////////////////////////////////////////////

    $wp_customize->add_section('Contactanos_redes_sociales', array (
    'title' => 'Redes Sociales',
    'panel' => 'Contactanos'
  ));
         //image
  $wp_customize->add_setting('facebook_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facebook_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_redes_sociales',
    'settings' => 'facebook_img'
  )));

   // texto de red
    $wp_customize->add_setting('contactanos-social-facebook', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-social-facebook', array (
      'description' => 'Facebook URL',
      'section' => 'Contactanos_redes_sociales',
      'settings' => 'contactanos-social-facebook'
    ))); 
		
     //image
  $wp_customize->add_setting('instagram_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'instagram_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_redes_sociales',
    'settings' => 'instagram_img'
  )));
     // texto de red
    $wp_customize->add_setting('contactanos-sociales_instagram', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-sociales_instagram', array (
      'description' => 'Instagram URL',
      'section' => 'Contactanos_redes_sociales',
      'settings' => 'contactanos-sociales_instagram'
    ))); 

     //image
  $wp_customize->add_setting('youtube_img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'youtube_img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'Contactanos_redes_sociales',
    'settings' => 'youtube_img'
  )));

    // texto de red
    $wp_customize->add_setting('contactanos-social-youtube', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contactanos-social-youtube', array (
      'description' => 'Youtube URL',
      'section' => 'Contactanos_redes_sociales',
      'settings' => 'contactanos-social-youtube'
    ))); 

     ////////////////Servicio al Cliente////////////////////////////////////////////////
       $wp_customize->add_panel('servicio_cliente',
        array(
            'title' => 'Servicio al Cliente',
            'priority' => 1,
            )
        );

    $wp_customize->add_section('servicio_cliente_titulo', array (
    'title' => 'Título',
    'panel' => 'servicio_cliente'
  ));

  // texto de red
    $wp_customize->add_setting('servicio_al_cliente_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_al_cliente_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'servicio_cliente_titulo',
      'settings' => 'servicio_al_cliente_titulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('servicio_al_cliente_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_al_cliente_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'servicio_cliente_titulo',
      'settings' => 'servicio_al_cliente_titulo_en'
    ))); 

     $wp_customize->add_section('servicio_cliente_subtitulo', array (
    'title' => 'Descripción',
    'panel' => 'servicio_cliente'
  ));

  // texto de red
    $wp_customize->add_setting('servicio_al_cliente_subtitulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_al_cliente_subtitulo_es', array (
      'description' => 'Descripción (Español)',
      'section' => 'servicio_cliente_subtitulo',
      'settings' => 'servicio_al_cliente_subtitulo_es',
		'type' => 'textarea'
    ))); 
     // texto de red
    $wp_customize->add_setting('servicio_al_cliente_subtitulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_servicio_al_cliente_subtitulo_en', array (
      'description' => 'Descripción (English)',
      'section' => 'servicio_cliente_subtitulo',
      'settings' => 'servicio_al_cliente_subtitulo_en',
		'type' => 'textarea'
    ))); 
         ////////////////Trabaja para nosotros////////////////////////////////////////////////
       $wp_customize->add_panel('trabaja_con_nosotros',
        array(
            'title' => 'Trabaja con Nosotros',
            'priority' => 1,
            )
        );

    $wp_customize->add_section('trabaja_con_nosotros_titulo', array (
    'title' => 'Título',
    'panel' => 'trabaja_con_nosotros'
  ));

  // texto de red
    $wp_customize->add_setting('trabaja_co_nosotros_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_trabaja_co_nosotros_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'trabaja_con_nosotros_titulo',
      'settings' => 'trabaja_co_nosotros_titulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('trabaja_co_nosotros_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_trabaja_co_nosotros_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'trabaja_con_nosotros_titulo',
      'settings' => 'trabaja_co_nosotros_titulo_en'
    ))); 

     $wp_customize->add_section('trabaja_con_nosotros_subtitulo', array (
    'title' => 'Descripción',
    'panel' => 'trabaja_con_nosotros'
  ));

  // texto de red
    $wp_customize->add_setting('trabaja_co_nosotros_subtitulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_trabaja_co_nosotros_subtitulo_es', array (
      'description' => 'Descripción (Español)',
      'section' => 'trabaja_con_nosotros_subtitulo',
      'settings' => 'trabaja_co_nosotros_subtitulo_es',
		'type' => 'textarea'
    ))); 
     // texto de red
    $wp_customize->add_setting('trabaja_co_nosotros_subtitulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_trabaja_co_nosotros_subtitulo_en', array (
      'description' => 'Descripción (English)',
      'section' => 'trabaja_con_nosotros_subtitulo',
      'settings' => 'trabaja_co_nosotros_subtitulo_en',
		'type' => 'textarea'
    ))); 
    //////////////////////////PG Paises//////////////////////
       $wp_customize->add_panel('paises',
        array(
            'title' => 'Pg Paises',
            'priority' => 1,
            )
        );

    $wp_customize->add_section('paises_continente', array (
    'title' => 'Titulo, descripción',
    'panel' => 'paises'
  ));

  // texto de red
    $wp_customize->add_setting('paises_continente_titulo_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_paises_continente_titulo_es', array (
      'description' => 'Título (Español)',
      'section' => 'paises_continente',
      'settings' => 'paises_continente_titulo_es'
    ))); 
     // texto de red
    $wp_customize->add_setting('paises_continente_titulo_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_paises_continente_titulo_en', array (
      'description' => 'Título (English)',
      'section' => 'paises_continente',
      'settings' => 'paises_continente_titulo_en'
    ))); 

 
		
  // texto de red
    $wp_customize->add_setting('paises_descripcion_es', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_paises_descripcion_es', array (
      'description' => 'descripción (Español)',
      'section' => 'paises_continente',
      'settings' => 'paises_descripcion_es',
		'type' => 'textarea'
    ))); 

     // texto de red
    $wp_customize->add_setting('paises_descripcion_en', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_paises_descripcion_en', array (
      'description' => 'descripción (English)',
      'section' => 'paises_continente',
      'settings' => 'paises_descripcion_en',
		'type' => 'textarea'
    ))); 
   
 // texto de red
    $wp_customize->add_setting('paises_continente_correo_direccion', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_paises_continente_correo_direccion', array (
      'description' => 'Correo Eléctronico',
      'section' => 'paises_continente',
      'settings' => 'paises_continente_correo_direccion'
    ))); 
		
		  //image
  $wp_customize->add_setting('paises__img');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'paises__img', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'paises_continente',
    'settings' => 'paises__img'
  )));

    }
  /*********************************************************************/
add_action('customize_register','theme_customize_register');

// colocar en el title el nombre de la page 
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

    // Add the site name.
	$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

    // Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

function wpb_custom_new_menu()
{
	register_nav_menu('my-custom-menu', __('Main Menu'));
}
add_action('init', 'wpb_custom_new_menu');

