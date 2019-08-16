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

  // editor/gutenberg.php
  add_filter('allowed_block_types', 'blanket_allowed_block_types');
  add_action('admin_enqueue_scripts', 'blanket_blocks_scripts');
  add_action('enqueue_block_editor_assets', 'blanket_blocks_styles');  

  // login
  add_action('login_head', 'blanket_custom_login_css');
  add_filter('login_headerurl', 'blanket_custom_loginlogo_url');
  
  // dashboard
  add_action('wp_dashboard_setup', 'blanket_remove_dashboard_meta_boxes');
  add_filter('upload_mimes', 'blanket_add_mime_types');
  // add_filter('admin_menu', 'blanket_remove_taxonomy_meta_boxes');
  add_action('admin_menu', 'blanket_remove_menu_items');
    
  // head/cleanup.php
  add_action('init', 'blanket_head_cleanup');

  // front end assets
  add_action('wp_enqueue_scripts', 'blanket_add_scripts');

  // content...tax first...order is important!
  add_action('init', 'blanket_create_taxonomies');    
  add_action('init', 'blanket_create_post_types');    

}// BLANKET_theme_setup


// script, styles, assets
require get_template_directory() . '/_/assets/assets.php';

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

// blocks
require get_template_directory() . '/_/blocks/gutenberg.php';
require get_template_directory() . '/_/blocks/dumbo/register.php';