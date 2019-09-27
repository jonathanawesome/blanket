<?php

// constants
define('BLANKET_IMG_DIR', get_stylesheet_directory_uri() . '/src/img/');
define('BLANKET_SVG_DIR', get_stylesheet_directory_uri() . '/src/svg/');


// script, styles, assets
require get_template_directory() . '/_/assets/assets.php';

// dashboard
require get_template_directory() . '/_/dashboard/dashboard.php';

// ajax
require get_template_directory() . '/_/ajax/ajax-functions.php';

// custom post types & taxonomies
// taxonomies first...order is important!
require get_template_directory() . '/_/content/taxonomies.php';
require get_template_directory() . '/_/content/post-types.php';

// head  
require get_template_directory() . '/_/head/cleanup.php';
require get_template_directory() . '/_/head/meta-helpers.php';

// login  
require get_template_directory() . '/_/login/login.php';

// rest api
require get_template_directory() . '/_/restapi/restapi.php';

// gutenberg
require get_template_directory() . '/_/gutenberg/gutenberg.php';


// add options pages via acf
if( function_exists('acf_add_options_page') ) {
	
	// acf_add_options_page(array(
	// 	'page_title' 	=> 'Theme Settings',
	// 	'menu_title'	=> 'Theme Settings',
	// 	'menu_slug' 	=> 'theme-general-settings',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> true
	// ));
	
  // acf_add_options_sub_page(array(
  //   'page_title' 	=> 'Navigation',
  //   'menu_title'	=> 'Navigation',
  //   'parent_slug'	=> 'theme-general-settings',
  // ));
  
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> '3rd Party Integration Settings',
	// 	'menu_title'	=> 'Integrations',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}