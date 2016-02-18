<?php
/**
 * Functions.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package generic
 */


/* Create Custom Post Type for Products */
function createProducts()
{
  $labels = array(
      'name' => __( 'Products ', 'products' ),
    'singular_name' => __( 'Product', 'products' ),
      'add_new' => __( 'Add New' , 'products' ),
      'add_new_item' => __( 'Add New Product' , 'products' ),
      'edit_item' =>  __( 'Edit Product' , 'products' ),
      'new_item' => __( 'New Product' , 'products' ),
      'view_item' => __('View Product', 'products'),
      'search_items' => __('Search Products', 'products'),
      'not_found' =>  __('No Products found', 'products'),
      'not_found_in_trash' => __('No Products found in Trash', 'products'),
  );

  register_post_type('products', array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    '_builtin' =>  false,
    'capability_type' => 'page',
    'hierarchical' => true,
    'query_var' => "products",
    'supports' => array(
      'title', 'editor', 'revisions',
    ),
    'show_in_menu'  => true,
    'rewrite' => array('slug' => '/products', 'with_front' => false)
  ));

  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ),
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );

  register_taxonomy('categories',array('products'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => '/products', 'with_front' => false),
  ));


}
//add_action( 'init', 'createProducts', 0 );


function fix_product_permalinks(){
  global $post;
  $permalink = str_replace("//products/products", "/products", $permalink);
  return $permalink;
}
//add_filter('post_link', 'fix_product_permalinks');



/*
* Remove Admin Bar on Front End
*/
add_filter('show_admin_bar', '__return_false');

/*
* Remove Featured Image
*/
function remove_post_thumb_meta_box(){
  global $pagenow, $_wp_theme_features;
  if ( in_array( $pagenow,array('post.php','post-new.php')) && !current_user_can('publish_posts')) {
    unset( $_wp_theme_features['post-thumbnails']);
  }
}
add_action( 'admin_menu' , 'remove_post_thumb_meta_box' );

/*
* Remove Custom Fields Meta
*/
function remove_post_custom_fields() {
  remove_meta_box( 'postimagediv' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

/*
* Setup Sidebar Widget Areas (For Blog Use Only)
*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Blog',
		'id' => 'blog',
		'description' => 'Widget sidebar for the blog/news section',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
}

/*
* Add Menus to Theme
*/
function template_setup() {
	register_nav_menus( array(
		'main' => 'Main Menu',
		'top' => 'Top Menu',
    'footer' => 'Footer Menu',
	) );
}
add_action( 'after_setup_theme', 'template_setup' );

/*
* Add stylesheet to the Visual Editor
*/
add_editor_style();

/*
* If search is submitted with no terms
*/
add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}

//Relevanssi Re-index shortcode content
if (!wp_next_scheduled('relevanssi_build_index')) {
    wp_schedule_event( time(), 'daily', 'relevanssi_build_index' );
}

/* Clean up the title of private links */
function the_title_trim($title)
{
  $pattern[0] = '/Protected:/';
  $pattern[1] = '/Private:/';
  $replacement[0] = ''; // Enter some text to put in place of Protected:
  $replacement[1] = ''; // Enter some text to put in place of Private:

  return preg_replace($pattern, $replacement, $title);
}
add_filter('the_title', 'the_title_trim');


// Filter The Content to change LI's to have the caret font awesome icon
function content_caret($content){
  $new_content = str_replace('<li>', '<li><i class="icon-disc">&bull;</i>', $content);
  return $new_content;
}
add_filter('the_content', 'content_caret');

// Changing excerpt more
function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More <i class="icon-caret-right"></i>' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');