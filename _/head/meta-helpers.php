<?php

function blanket_get_template() {
  if (is_front_page()) {    
    echo "template_home";
  } else {
    echo "template_name";
  }
}//blanket_get_template

function blanket_title() {
  if (is_archive()) {
    echo post_type_archive_title() . " | ";
  } elseif (is_single() || is_page()) {
    echo get_the_title() . " | ";
  } elseif (is_404()) {
    echo '404 Error - ';
  }
  echo bloginfo('name');
}//blanket_title

function blanket_meta_description() {
	$id = get_queried_object_id();
  if (is_404()) {
    echo "404";
  } elseif (is_home()){
    echo "blanket home page";
  } else {
    echo get_the_title($id);
  }
}//blanket_meta_description

function blanket_meta_image() {
  $id = get_queried_object_id();
  if (get_the_post_thumbnail_url( $id )) {
    // the post has a thumbnail, 
    echo get_the_post_thumbnail_url( $id, 'medium' );
  } else {
    echo get_template_directory_uri() . '/screenshot.png';
  }
}//blanket_meta_image

function blanket_meta_url() {
	$id = get_queried_object_id();
	if (is_home()) {
		echo get_bloginfo('url');
	} else {
		echo get_permalink();
	}
}//blanket_meta_url

function blanket_meta_type() {
  $id = get_queried_object_id();
  if (is_single() || is_page() || is_tax()) {
    echo "article";
  } else {
    echo "website";
  }
}//blanket_meta_type

function blanket_meta() {
  echo '<meta charset="' , bloginfo('charset') , '">' , "\r";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' , "\r";  
  echo '<meta property="og:title" content="' , blanket_title() , '"/>' , "\r";
  echo '<meta property="og:description" content="' , blanket_meta_description() , '"/>' , "\r";
	echo '<meta property="og:url" content="' , blanket_meta_url() , '"/>' , "\r";
	echo '<meta property="og:image" content="' , blanket_meta_image() , '"/>' , "\r";
	echo '<meta property="og:type" content="' , blanket_meta_type() , '"/>' , "\r";
  echo '<meta property="og:site_name" content="' , bloginfo('name') , '"/>' , "\r";
}

function blanket_favicon() {
  echo '<link rel="icon" type="image/x-icon"  href="' , get_stylesheet_directory_uri() , '/src/favicon/favicon.ico">' , "\r";
}