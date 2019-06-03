<?php

// 

function blanket_get_title() {
  if (is_archive()) {
    return post_type_archive_title() . " | ";
  } elseif (is_single() || is_page()) {
    return get_the_title() . " | ";
  } elseif (is_404()) {
    return '404 Error - ';
  }
  return bloginfo('name');
}//blanket_get_title

function blanket_get_meta_description() {
	$id = get_queried_object_id();
  if (is_404()) {
    echo "404";
  } else {
    echo get_the_title($id);
  }
}//blanket_get_meta_description

function blanket_get_meta_image() {
  $id = get_queried_object_id();
  if (get_the_post_thumbnail_url( $id )) {
    // the post has a thumbnail, 
    echo get_the_post_thumbnail_url( $id, 'medium' );
  } else {
    echo getHashedAssetWithPath('test.png');
  }
}//blanket_get_meta_image

function blanket_get_meta_url() {
	$id = get_queried_object_id();
	if (is_home()) {
		echo get_bloginfo('url');
	} else {
		echo get_permalink();
	}
}//blanket_get_meta_url

function blanket_get_meta_type() {
  $id = get_queried_object_id();
  if (is_single() || is_page() || is_tax()) {
    echo "article";
  } else {
    echo "website";
  }
}//blanket_get_meta_type

function blanket_get_meta() {
  echo '<meta charset="' , bloginfo('charset') , '">' , "\r";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' , "\r";  
  echo '<meta property="og:title" content="' , blanket_get_title() , '"/>' , "\r";
  echo '<meta property="og:description" content="' , blanket_get_meta_description() , '"/>' , "\r";
	echo '<meta property="og:url" content="' , blanket_get_meta_url() , '"/>' , "\r";
	echo '<meta property="og:image" content="' , blanket_get_meta_image() , '"/>' , "\r";
	echo '<meta property="og:type" content="' , blanket_get_meta_type() , '"/>' , "\r";
  echo '<meta property="og:site_name" content="' , bloginfo('name') , '"/>' , "\r";
}

?>

