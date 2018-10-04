<?php

// create taxonomies
add_action('init', 'create_taxonomies', 0);

function create_taxonomies()
{

	// News Category taxonomy, attached to news
  // $labels = array(
  //   'name' => _x('News Categories', 'taxonomy general name'),
  //   'singular_name' => _x('News Category', 'taxonomy singular name'),
  //   'search_items' => __('Search News Categories'),
  //   'popular_items' => __('Popular News Categories'),
  //   'all_items' => __('All News Categories'),
  //   'parent_item' => null,
  //   'parent_item_colon' => null,
  //   'edit_item' => __('Edit News Category'),
  //   'update_item' => __('Update News Category'),
  //   'add_new_item' => __('Add New News Category'),
  //   'new_item_name' => __('New News Category Name'),
  //   'separate_items_with_commas' => __('Separate News Categories with commas'),
  //   'add_or_remove_items' => __('Add or remove News Categories'),
  //   'choose_from_most_used' => __('Choose from the most used News Categories'),
  //   'not_found' => __('No News Categories found.'),
  //   'menu_name' => __('News Categories'),
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

  // register_taxonomy('news-categories', array('news'), $args);

} // end create taxonomies



//create post types
add_action('init', 'create_post_types');

function create_post_types()
{

  // //create news post type
  // $labels = array(
  //   'name' => 'News',
  //   'singular_name' => 'News Entry',
  //   'add_new' => 'Add New',
  //   'add_new_item' => 'Add New News Entry',
  //   'edit_item' => 'Edit News Entry',
  //   'new_item' => 'New News Entry',
  //   'all_items' => 'All News Entries',
  //   'view_item' => 'View News Entry',
  //   'search_items' => 'Search News Entries',
  //   'not_found' => 'No News Entries found',
  //   'not_found_in_trash' => 'No News Entries found in Trash',
  //   'parent_item_colon' => '',
  //   'menu_name' => 'News Entries'
  // );

  // $args = array(
  //   'labels' => $labels,
  //   'exclude_from_search' => false,
  //   'public' => true,
  //   'publicly_queryable' => true,
  //   'show_ui' => true,
  //   'show_in_menu' => true,
  //   'query_var' => true,
  //   //'rewrite' => array('slug' => 'news'),
  //   'capability_type' => 'post',
  //   'has_archive' => true,
  //   'hierarchical' => false,
  //   'menu_position' => 5,
  //   'menu_icon' => get_template_directory_uri() . '/_/assets/img/menuicon.png',
  //   'supports' => array('title', 'thumbnail')
  // );

  // register_post_type('news', $args);


} // end create post types

?>