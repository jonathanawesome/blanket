<?php

// constants
define('BLANKET_IMG_DIR', get_stylesheet_directory_uri() . '/src/img/');
define('BLANKET_SVG_DIR', get_stylesheet_directory_uri() . '/src/svg/');

// actions & filters
add_action('after_setup_theme', 'blanket_theme_setup');

function blanket_theme_setup() {
  // ajax/ajax-functions.php
  // add_action('blanket_blanket_search', 'blanket_search_ajax_handler');
  // add_action('blanket_nopriv_blanket_search', 'blanket_search_ajax_handler');

  // editor/classic.php
  add_filter('mce_buttons', 'blanket_remove_tinymce_buttons_from_editor');
  add_filter('mce_buttons_2', 'blanket_remove_tinymce_buttons_from_kitchen_sink');

  // editor/gutenberg.php
  add_filter( 'allowed_block_types', 'blanket_allowed_block_types' );
    
  // login
  add_action('login_head', 'blanket_custom_login_css');
  add_filter('login_headerurl', 'blanket_custom_loginlogo_url');
  
  // dashboard
  add_action('wp_dashboard_setup', 'blanket_remove_ataglance');
  add_filter('upload_mimes', 'blanket_add_mime_types');
  // add_filter('admin_menu', 'blanket_remove_taxonomy_meta_boxes');
  add_action('admin_menu', 'blanket_remove_menu_items');
    
  // head/cleanup.php
  add_action('init', 'blanket_head_cleanup');

  // assets
  add_action('wp_enqueue_scripts', 'blanket_add_scripts');

  // content...tax first...order is important!
  add_action('init', 'blanket_create_taxonomies');    
  add_action('init', 'blanket_create_post_types');    

}// BLANKET_theme_setup


// script, styles, assets
require get_template_directory() . '/_/assets/assets.php';

// editor
require get_template_directory() . '/_/editor/classic.php';
require get_template_directory() . '/_/editor/gutenberg.php';

// dashboard
require get_template_directory() . '/_/dashboard/dashboard.php';

// ajax
require get_template_directory() . '/_/ajax/ajax-functions.php';

// custom post types & taxonomies
require get_template_directory() . '/_/content/post-types.php';
require get_template_directory() . '/_/content/taxonomies.php';

// head  
require get_template_directory() . '/_/head/cleanup.php';
require get_template_directory() . '/_/head/meta-helpers.php';

// login  
require get_template_directory() . '/_/login/login.php';


// add_theme_support( 'post-thumbnails' ); 
// set_post_thumbnail_size( 800, 450, true );
// add_image_size('small', 384, 9999);
// add_image_size('card', 800, 450, true);


function php_console_log( $message ) {

  $message = htmlspecialchars( stripslashes( $message ) );
  //Replacing Quotes, so that it does not mess up the script
  $message = str_replace( '"', "-", $message );
  $message = str_replace( "'", "-", $message );

  return "<script>console.log('{$message}')</script>";
}


?>
