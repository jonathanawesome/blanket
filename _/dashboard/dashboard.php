<?php 

// remove base dashboard meta boxes
add_action('wp_dashboard_setup', function() {
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'side');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  
});


//inject admin-specific css
add_action( 'admin_head', function() {
  echo "<style>table.media .column-title .media-icon img[src*='.svg']{
      width: 100%;
      height: auto;
  }</style>";
} );


// allow svg uploads
add_filter('upload_mimes', function( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;  
});


// remove taxonomy meta boxes from custom post type edit screens in favor of using ACF fields to manage custom taxonomies
// after you've added the custom post/tax, inspect the metabox element to get the ID to use in the first parameter below
add_filter('admin_menu', function() {
  // remove_meta_box( 'formatsdiv', array('blankets'), 'normal' );
});


// remove posts and comments from dashboard menu
function blanket_remove_menu_items() { 
  remove_menu_page( 'edit.php' ); //remove default Post type menu item
  remove_menu_page( 'edit-comments.php' ); //remove Comments menu item
  
  if ( !current_user_can( 'manage_options' ) ) { //not an administrator
    remove_menu_page( 'tools.php' ); //remove Tools menu item
    blanket_remove_customizer(); //remove customizer
  }  
}
function blanket_remove_customizer() {
  global $current_user;
  $current_user = wp_get_current_user();
  $user_name = $current_user->user_login;
  //check condition for the user means show menu for this user
  if(is_admin() &&  $user_name != 'USERNAME') {
      //We need this because the submenu's link (key from the array too) will always be generated with the current SERVER_URI in mind.
      $customizer_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
      remove_submenu_page( 'themes.php', $customizer_url );
  }
}
add_action('admin_menu', 'blanket_remove_menu_items');


// remove items from the WordPress admin bar
add_action('wp_before_admin_bar_render', function() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'new-content' ); //remove '+ New' menu item
  $wp_admin_bar->remove_menu( 'comments' ); // remove edit comments menu item  
});  


