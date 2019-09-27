<?php

// register the block
function register_acf_block_screenwidth() {
  acf_register_block_type( array(
    'name'			      => 'screenwidth',
    'title'			      => __( 'Screen Width', 'solutionsource_developerhub' ),
    'description'     => __('This block displays the current width of the content area, allowing you to more accurately determine how content looks on the front end. This block will not display on the front end of the site.', 'solutionsource_developerhub'),
    'render_template' => get_template_directory() . '/_/gutenberg/blocks/screenwidth/screenwidth.php',
    'category'		    => 'common',
    'icon'			      => 'editor-code',
    'mode'			      => 'preview',
    'supports'        => array(
      // disable alignment toolbar
      'align' => false,
    ),
    // 'keywords'		    => array( 'screenwidth'),
  ));
}

// check if ACF is installed and hook into setup
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_screenwidth');
}

// remove the acf/screenwidth block from the_content() on the front end
add_filter( 'render_block', function( $block_content, $block ) {
  if ( 'acf/screenwidth' === $block['blockName'] ) {
      $block_content = '';
  }
  return $block_content;
}, 10, 2 );