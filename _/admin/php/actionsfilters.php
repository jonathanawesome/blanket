<?php
//scripts & styles
function BLANKET_add_scripts()
{
	//remove core-provided jQuery
  wp_deregister_script('jquery');
  wp_enqueue_script('app-js', BLANKET_THEME . '/app.min.js', array(), '0.0.1', true);
  
  wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '0.0.1' ); 

  wp_localize_script(
    'app-js',
    'localized',
    array(
      'siteurl' => BLANKET_URL,
    )
  );
} //end BLANKET_add_scripts


//clean up <head>
function BLANKET_head_cleanup()
{
	// Originally from http://wpengineer.com/1438/wordpress-header/
  remove_action('wp_head', 'feed_links_extra', 3);
  add_action('wp_head', 'ob_start', 1, 0);
  add_action('wp_head', function () {
    $pattern = '/.*' . preg_quote(esc_url(get_feed_link('comments_' . get_default_feed())), '/') . '.*[\r\n]+/';
    echo preg_replace($pattern, '', ob_get_clean());
  }, 3, 0);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_action('wp_head', 'rest_output_link_wp_head', 10);
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('use_default_gallery_style', '__return_false');

}

//admin screen stuff
//login styles
function BLANKET_custom_login_css()
{
  echo '<link rel="stylesheet" type="text/css" href="' . BLANKET_THEME . '/_/assets/css/loginstyles.css" />';
}

function BLANKET_custom_loginlogo_url($url)
{
  return get_bloginfo('url');
}

function BLANKET_remove_ataglance()
{
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}

//allow svg uploads
function BLANKET_add_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

//remove height and width from WYSIWYG images
function BLANKET_remove_width_attribute($html)
{
  $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
  return $html;
}

//tinymce changes
function BLANKET_custom_editor_styles()
{
  add_editor_style(BLANKET_THEME . '/_/admin/css/style.css');
}

function BLANKET_editor_dash_cleanup()
{
	//remove taxonomy meta boxes
		//remove_meta_box( 'formatsdiv', array('articles', 'blog'), 'normal' );
  global $menu;
	// check if admin and hide these for admins
  if ((current_user_can('install_themes'))) {
    $restricted = array(
      __('Posts'),
      __('Comments'),

    );
  }
	// hide these for other roles
  else {
    $restricted = array(
      __('Posts'),
      __('Links'),
      __('Appearance'),
      __('Tools'),
      __('Users'),
      __('Settings'),
      __('Comments'),
      __('Plugins')
    );
  }
  end($menu);
  while (prev($menu)) {
    $value = explode(' ', $menu[key($menu)][0]);
    if (in_array($value[0] != null ? $value[0] : "", $restricted)) {
      unset($menu[key($menu)]);
    }
  }
}

//admin css
function BLANKET_admin_css()
{
  echo '<style type="text/css">
		  #adminmenu .wp-menu-image img {
			  width: 20px;
			  height: 20px;
			  padding-top: 6px;
      }
      .column-lead_asset {
        width: 6rem;
      }
      .column-lead_asset img {
        width: 100%;
      }
		 </style>';
}

?>