<?php
  
// enqueue custom login styles
add_action('login_head', function() {
  echo '<link rel="stylesheet" type="text/css" href="' . getHashedAssetWithPath("login.css") . '"/>';
});


// the wordpress logo link points to wordpress.org by default, override with the site url
add_filter('login_headerurl', function( $url ) {
  return get_bloginfo('url');
});