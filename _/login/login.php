<?php
  
// login styles
function blanket_custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' . getHashedAssetWithPath("login.css") . '"/>';
}

// the wordpress logo link points to wordpress.org by default, override with the site url
function blanket_custom_loginlogo_url($url) {
  return get_bloginfo('url');
}

?>