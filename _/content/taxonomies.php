<?php

function blanket_create_taxonomies() {

	// custom-taxonomy, attached to custom-posts
  // $labels = array(
  //   'name' => _x('CUSTOMs', 'taxonomy general name'),
  //   'singular_name' => _x('CUSTOM', 'taxonomy singular name'),
  //   'search_items' => __('Search CUSTOMs'),
  //   'popular_items' => __('Popular CUSTOMs'),
  //   'all_items' => __('All CUSTOMs'),
  //   'parent_item' => null,
  //   'parent_item_colon' => null,
  //   'edit_item' => __('Edit CUSTOM'),
  //   'update_item' => __('Update CUSTOM'),
  //   'add_new_item' => __('Add New CUSTOM'),
  //   'new_item_name' => __('New CUSTOM Name'),
  //   'separate_items_with_commas' => __('Separate CUSTOMs with commas'),
  //   'add_or_remove_items' => __('Add or remove CUSTOMs'),
  //   'choose_from_most_used' => __('Choose from the most used CUSTOMs'),
  //   'not_found' => __('No CUSTOMs found.'),
  //   'menu_name' => __('CUSTOMs'),
  // );

  // $args = array(
  //   'has_archive' => false,
  //   'hierarchical' => true,
  //   'labels' => $labels,
  //   'show_ui' => true,
  //   'show_admin_column' => true,
  //   'update_count_callback' => '_update_post_term_count',
  //   'query_var' => true,
  // );

  // register_taxonomy('custom-taxonomy', array('custom-posts'), $args);
  

} // end create taxonomies
add_action('init', 'blanket_create_taxonomies');    
