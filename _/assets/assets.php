<?php 

// use assets with hashed names
// credit: https://danielshaw.co.nz/wordpress-cache-busting-json-hash-map/
function getHashedAsset( $filename ) {
  $manifest_path = get_template_directory() . '/dist/manifest.json';
  if (!empty($manifest_path) && file_exists($manifest_path)) {
    $manifest = json_decode(file_get_contents($manifest_path, FILE_USE_INCLUDE_PATH), true);
    $clean_filename = basename($filename);
    if (!empty($manifest) &&
      is_array($manifest) &&
      array_key_exists($clean_filename, $manifest)) {
      return '/dist/' . $manifest[$clean_filename];
    }
  }
  // fall back to src images if the file cannot be found in the manifest
  return '/src/img/' . $filename;
}

// thanks grant!: https://github.com/gblakeman/blanket/commit/aad6e4328d86659dbc51ce3c7f09cfa3a581a821
function getHashedAssetWithPath( $filename ) {
  $base_path = get_template_directory_uri();
  $hashed_filename = getHashedAsset($filename);
  $name_with_path = $base_path . $hashed_filename;
  return $name_with_path;
}

//scripts & styles
function blanket_add_scripts() {
  
  //remove gutenberg stylesheet
  wp_dequeue_style( 'wp-block-library' );
    
  //remove core-provided jQuery
  wp_deregister_script('jquery');
  
  wp_enqueue_script( 'main-js', get_template_directory_uri() . getHashedAsset('main.js'), array(), null, true );
  wp_enqueue_style( 'main-css', get_template_directory_uri() . getHashedAsset('main.css'), array(), null );

  wp_localize_script(
    'main-js',
    'localized',
    array(
      'ajaxURL' => get_template_directory_uri() . '/_/ajax/custom-ajax-handler.php',
    )
  );
} //end blanket_add_scripts