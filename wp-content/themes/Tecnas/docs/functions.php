<?php 


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
            'menu_icon'             => 'dashicons-format-gallery',
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
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
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
            'menu_name'             => __( 'Destacados.', 'text_domain' ),
            'name_admin_bar'        => __( 'Destacados.', 'text_domain' ),
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
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
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
            'name'                  => _x( 'Producto', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Producto', 'text_domain' ),
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
            'description'           => __( 'producto de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-gallery',
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
    'name'                       => _x( 'Categoria de Productos', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Categoria de Productos', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'categoria-deproductos', 'text_domain' ),
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
            'menu_icon'             => 'dashicons-format-gallery',
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
            'menu_icon'             => 'dashicons-format-gallery',
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
            'menu_icon'             => 'dashicons-format-gallery',
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

    // Register Collection Custom Taxonomy
function ciudades_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Ciudades', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Ciudades', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'ciudades', 'text_domain' ),
    'all_items'                  => __( 'All ciudadess', 'text_domain' ),
    'parent_item'                => __( 'Parent ciudades', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent ciudades:', 'text_domain' ),
    'new_item_name'              => __( 'New ciudades', 'text_domain' ),
    'add_new_item'               => __( 'Add Nueva ciudades', 'text_domain' ),
    'edit_item'                  => __( 'Edit| ciudades', 'text_domain' ),
    'update_item'                => __( 'Update ciudades', 'text_domain' ),
    'view_item'                  => __( 'See Item', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
    'popular_items'              => __( 'Popular Items', 'text_domain' ),
    'search_items'               => __( 'Search ciudades', 'text_domain' ),
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
  register_taxonomy( 'ciudades', array( 'punto_de_venta' ), $args );
}
add_action( 'init', 'ciudades_taxonomy', 0 );
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
  //image
  $wp_customize->add_setting('aliados_item_2');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_2', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_2'
  )));
//image
  $wp_customize->add_setting('aliados_item_3');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_3', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_3'
  )));
  //image
  $wp_customize->add_setting('aliados_item_4');
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aliados_item_4', array (
    'label' => 'Logo',
    'description' => 'Imagen',
    'section' => 'aliados',
    'settings' => 'aliados_item_4'
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
    $wp_customize->add_setting('footer_politicas', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_politicas', array (
      'description' => 'Políticas de privacidad',
      'section' => 'politicas',
      'settings' => 'footer_politicas'
    )));  

      $wp_customize->add_section('contacto', array (
    'title' => 'Contacto',
    'panel' => 'footer'
  ));
       // texto de red
    $wp_customize->add_setting('footer_contacto', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_footer_contacto', array (
      'description' => 'Contacto',
      'section' => 'contacto',
      'settings' => 'footer_contacto'
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
    $wp_customize->add_setting('titulo_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestra_empresa', array (
      'description' => 'Titulo',
      'section' => 'pagina_nuestra_empresa_titulo',
      'settings' => 'titulo_nuestra_empresa'
    )));  


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
    $wp_customize->add_setting('contenido_1_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_1_nuestra_empresa', array (
      'description' => 'Texto',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'contenido_1_nuestra_empresa',
      'type' => 'textarea'
    )));  
    // texto de red
    $wp_customize->add_setting('texto_del_boton_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_texto_del_boton_nuestra_empresa', array (
      'description' => 'Texto del Boton',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'texto_del_boton_nuestra_empresa'
    )));  

    // texto de red
    $wp_customize->add_setting('url_del_boton_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_url_del_boton_nuestra_empresa', array (
      'description' => 'Url del Boton',
      'section' => 'pagina_nuestra_empresa_contenido',
      'settings' => 'url_del_boton_nuestra_empresa'
    )));  



    $wp_customize->add_section('pagina_nuestra_empresa_contenido_2', array (
    'title' => 'Segundo párrafo',
    'panel' => 'pagina_nuestra_empresa'
  ));
     // texto de red
    $wp_customize->add_setting('titulo_2_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_2_nuestra_empresa', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'titulo_2_nuestra_empresa'
    )));  
   // texto de red
    $wp_customize->add_setting('contenido_2_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_contenido_2_nuestra_empresa', array (
      'description' => 'Texto',
      'section' => 'pagina_nuestra_empresa_contenido_2',
      'settings' => 'contenido_2_nuestra_empresa',
      'type' => 'textarea'
    )));


    $wp_customize->add_section('pagina_nuestra_empresa_pilares', array (
    'title' => 'Nuestros Pilares',
    'panel' => 'pagina_nuestra_empresa'
  ));
     // texto de red
    $wp_customize->add_setting('titulo_nuestros_pilares_nuestra_empresa', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_titulo_nuestros_pilares_nuestra_empresa', array (
      'description' => 'Título Principal',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'titulo_nuestros_pilares_nuestra_empresa'
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
    $wp_customize->add_setting('nuestros_pilares_img_1_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_1_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_1_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_img_2_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_2_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_2_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_img_3_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_3_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_3_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_img_4_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_img_4_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_pilares',
      'settings' => 'nuestros_pilares_img_4_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_sloga_img_1_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_1_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_1_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_sloga_img_2_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_2_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_2_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_sloga_img_3_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_3_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_3_titulo'
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
    $wp_customize->add_setting('nuestros_pilares_sloga_img_4_titulo', array(
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'texto_control_nuestros_pilares_sloga_img_4_titulo', array (
      'description' => 'Título',
      'section' => 'pagina_nuestra_empresa_slogan',
      'settings' => 'nuestros_pilares_sloga_img_4_titulo'
    ))); 
    }
  /*********************************************************************/
add_action('customize_register','theme_customize_register');
