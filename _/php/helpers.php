<?php

/**
* Use assets with hashed names.
* credit: https://danielshaw.co.nz/wordpress-cache-busting-json-hash-map/
*
* Matches a filename against a hash manifest and returns the hash file name if
* it exists.
*
* @param  string $filename Original name of the file.
* @return string $filename Hashed name version of a file.
*/
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
function getHashedAssetWithPath( $filename ) {
  $base_path = get_template_directory_uri();
  $hashed_filename = getHashedAsset($filename);
  $name_with_path = $base_path . $hashed_filename;
  return $name_with_path;
}

function getMetaTitle() {
  if (is_archive()) {
    echo post_type_archive_title() . " | ";
  } elseif (is_single() || is_page()) {
    echo get_the_title() . " | ";
  } elseif (is_404()) {
    echo '404 Error - ';
  }
  bloginfo('name');
}//getMetaTitle

function getMetaDesc() {
	$id = get_queried_object_id();
  if (is_404()) {
    echo "404";
  } else {
    echo get_the_title($id);
  }
}//getMetaDesc

function getMetaImage() {
  $id = get_queried_object_id();
  if (get_the_post_thumbnail_url( $id )) {
    echo get_the_post_thumbnail_url( $id, 'custom_image_size' );
  } else {
    echo BLANKET_IMG_DIR . 'test.png';
  }
}//getMetaImage

function getMetaURL() {
	$id = get_queried_object_id();
	if (is_home()) {
		echo get_bloginfo('url');
	} else {
		echo get_permalink();
	}
}//getMetaURL

?>