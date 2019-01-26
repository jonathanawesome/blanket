<?php 
//scripts & styles
function blanket_add_scripts() {
  
  //remove gutenberg style file
  wp_dequeue_style( 'wp-block-library' );
    
  //remove core-provided jQuery
  wp_deregister_script('jquery');
  
  wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/dist/main.js', array(), BLANKET_VERSION, true);
  wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), BLANKET_VERSION );

  wp_localize_script(
    'main-js',
    'localized',
    array(
      'ajaxURL' => get_stylesheet_directory_uri() . '/_/php/custom-ajax-handler.php',
    )
  );
} //end blanket_add_scripts

?>