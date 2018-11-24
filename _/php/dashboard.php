<?php 
//admin screen stuff
//login styles
function BLANKET_custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' . BLANKET_THEME . '/dist/login.css" />';
}

function BLANKET_custom_loginlogo_url($url) {
  return get_bloginfo('url');
}

function BLANKET_remove_ataglance() {
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
function BLANKET_remove_width_attribute($html) {
  $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
  return $html;
}

//tinymce changes
function BLANKET_custom_editor_styles() {
  add_editor_style(BLANKET_THEME . '/dist/editor.css');
}

function BLANKET_editor_dash_cleanup() {
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