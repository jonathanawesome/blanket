<?php 
//scripts & styles
function blanket_add_scripts() {
	//remove core-provided jQuery
  wp_deregister_script('jquery');
  
  wp_enqueue_script('main-js', BLANKET_THEME . '/dist/main-bundle.js', array(), BLANKET_VERSION, true);
  
  wp_enqueue_style( 'styles', BLANKET_THEME . '/dist/main.css', array(), BLANKET_VERSION ); 

  wp_localize_script(
    'main-js',
    'localized',
    array(
      'ajaxURL' => BLANKET_THEME . '/_/php/custom-ajax-handler.php',
    )
  );
} //end blanket_add_scripts

?>