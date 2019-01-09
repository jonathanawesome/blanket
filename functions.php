<?php

//constants
define('BLANKET_VERSION', '2.0.1');
define('BLANKET_THEME', get_stylesheet_directory_uri());
define('BLANKET_URL', get_bloginfo('url'));
define('BLANKET_IMG_DIR', BLANKET_THEME . '/_/img/');
define('BLANKET_SVG_DIR', BLANKET_THEME . '/_/svg/');


//actions & filters
add_action('after_setup_theme', 'BLANKET_theme_setup');
function BLANKET_theme_setup() {

  add_action('init', 'BLANKET_head_cleanup');
  add_action('login_head', 'BLANKET_custom_login_css');
  add_filter('login_headerurl', 'BLANKET_custom_loginlogo_url');
  add_action('wp_dashboard_setup', 'BLANKET_remove_ataglance');
  add_filter('upload_mimes', 'BLANKET_add_mime_types');
  add_filter('post_thumbnail_html', 'BLANKET_remove_width_attribute', 10);
  add_filter('image_send_to_editor', 'BLANKET_remove_width_attribute', 10);

  add_action('admin_init', 'BLANKET_custom_editor_styles');
  add_action('admin_menu', 'BLANKET_editor_dash_cleanup');
  add_action('admin_head', 'BLANKET_admin_css');

  add_action('BLANKET_BLANKET_search', 'BLANKET_search_ajax_handler');
  add_action('BLANKET_nopriv_BLANKET_search', 'BLANKET_search_ajax_handler');
  
  add_action('BLANKET_BLANKET_fetch', 'BLANKET_fetch_ajax_handler');
	add_action('BLANKET_nopriv_BLANKET_fetch', 'BLANKET_fetch_ajax_handler');

  add_action('wp_enqueue_scripts', 'BLANKET_add_scripts');

}//BLANKET_theme_setup


// requires & includes
require get_template_directory() . '/_/php/scriptsandstyles.php';
require get_template_directory() . '/_/php/posttypes.php';
require get_template_directory() . '/_/php/taxonomies.php';
require get_template_directory() . '/_/php/theme.php';
require get_template_directory() . '/_/php/helpers.php';
require get_template_directory() . '/_/php/dashboard.php';
require get_template_directory() . '/_/php/ajax.php';
require get_template_directory() . '/_/php/head.php';

?>
