<?php

function blanket_create_post_types() {
  
  // //create custom POSTs post type
  // $labels = array(
  //   'name'               => 'POSTs',
  //   'singular_name'      => 'POST',
  //   'add_new'            => 'Add New',
  //   'add_new_item'       => 'Add New POST',
  //   'edit_item'          => 'Edit POST',
  //   'new_item'           => 'New POST',
  //   'all_items'          => 'All POSTs',
  //   'view_item'          => 'View POST',
  //   'search_items'       => 'Search POSTs',
  //   'not_found'          => 'No POSTs found',
  //   'not_found_in_trash' => 'No POSTs found in Trash',
  //   'menu_name'          => 'POSTs'
  // );

  // $encoded_svg = base64_encode( file_get_contents(BLANKET_SVG_DIR . 'logo.svg' ));

  // $args = array(
  //   'labels'        => $labels,
  //   'public'        => true,
  //   'show_in_rest'  => true,   
  //   'has_archive'   => true,
  //   'menu_position' => 5,
  //   'menu_icon'     => 'data:image/svg+xml;base64,' . $encoded_svg, 
  //   'supports'      => array('title', 'thumbnail', 'editor', 'page-attributes')
  // );

  // register_post_type('custom-posts', $args);
 

} // end create post types
add_action('init', 'blanket_create_post_types');
