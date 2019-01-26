<?php

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