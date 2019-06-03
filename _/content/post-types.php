<?php

function blanket_create_post_types() {

  //create custom Blankets post type
  $labels = array(
    'name' => 'Blankets',
    'singular_name' => 'Blanket',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Blanket',
    'edit_item' => 'Edit Blanket',
    'new_item' => 'New Blanket',
    'all_items' => 'All Blankets',
    'view_item' => 'View Blanket',
    'search_items' => 'Search Blankets',
    'not_found' => 'No Blankets found',
    'not_found_in_trash' => 'No Blankets found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Blankets'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'rewrite' => array('slug' => 'news'),
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode( file_get_contents(BLANKET_SVG_DIR . 'blanket_menu_icon.svg' )), 
    'supports' => array('title', 'thumbnail')
  );

  register_post_type('blankets', $args);


} // end create post types

?>