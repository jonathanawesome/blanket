<?php

function getMetaTitle()
{
  if (is_archive()) {
    echo post_type_archive_title() . " | ";
  } elseif (is_single() || is_page()) {
    echo get_the_title() . " | ";
  } elseif (is_404()) {
    echo '404 Error - ';
  }
  bloginfo('name');
}//getMetaTitle

function getMetaDesc()
{
	$id = get_queried_object_id();
  if (is_404()) {
    echo "404";
  } else {
    echo get_the_title($id);
  }
}//getMetaDesc

function getMetaImage()
{
  $id = get_queried_object_id();
  if (get_the_post_thumbnail_url( $id )) {
    echo get_the_post_thumbnail_url( $id, 'card' );
  } else {
    echo STAGES_IMG_DIR . '/stages-16x9.jpg';
  }
}//getMetaImage

function getMetaURL()
{
	$id = get_queried_object_id();
	if (is_home()) {
		echo get_bloginfo('url');
	} else {
		echo get_permalink();
	}
}//getMetaURL


//admin stuff
// add_theme_support( 'post-thumbnails' ); 
// set_post_thumbnail_size( 800, 450, true );
// add_image_size('small', 384, 9999);
// add_image_size('card', 800, 450, true);

//options pages
// if (function_exists('acf_add_options_page')) {
//   acf_add_options_page(array(
//     'page_title' => 'Navigation',
//     'icon_url'   => get_template_directory_uri() . '/_/assets/img/menuicon.png',
//     'position'   => 20
//   ));
// }


?>