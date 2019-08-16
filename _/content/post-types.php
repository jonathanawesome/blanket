<?php

function blanket_create_post_types() {
  
  //create custom Threads post type
  $labels = array(
    'name' => 'Threads',
    'singular_name' => 'Thread',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Thread',
    'edit_item' => 'Edit Thread',
    'new_item' => 'New Thread',
    'all_items' => 'All Threads',
    'view_item' => 'View Thread',
    'search_items' => 'Search Threads',
    'not_found' => 'No Threads found',
    'not_found_in_trash' => 'No Threads found in Trash',
    'menu_name' => 'Threads'
  );

  $encoded_svg = base64_encode( file_get_contents(BLANKET_SVG_DIR . 'blanket_logo.svg' ));

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'data:image/svg+xml;base64,' . $encoded_svg, 
    'supports' => array('title', 'thumbnail', 'editor', 'page-attributes')
  );

  register_post_type('thread', $args);

} // end create post types