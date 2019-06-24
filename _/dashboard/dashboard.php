<?php 

function blanket_remove_ataglance() {
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}

// allow svg uploads
function blanket_add_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

// remove taxonomy meta boxes from custom post type edit screens in favor of using ACF to manage custom taxonomies
// after you've added the custom post/tax, inspect the metabox element to get the ID to use in the first parameter below
function blanket_remove_taxonomy_meta_boxes() {
  // remove_meta_box( 'formatsdiv', array('blankets'), 'normal' );
}

function blanket_remove_menu_items() { 
  remove_menu_page( 'edit.php' ); //remove default Post type menu item
  remove_menu_page( 'edit-comments.php' ); //remove comments menu item
}