<?php
 
// activate wide- and full-width options for image and cover blocks
add_theme_support( 'align-wide' );

// disable manual font sizes
add_theme_support( 'editor-font-sizes' );
add_theme_support( 'disable-custom-font-sizes' );

// disable custom colors
// add_theme_support( 'disable-custom-colors' );

// remove color palette
// add_theme_support( 'editor-color-palette' );

// register custom blocks
require get_template_directory() . '/_/gutenberg/blocks/screenwidth/register.php';

// curate available block types per post type/page/etc
add_filter('allowed_block_types', function( $allowed_block_types ) {
  global $post;
  return array(
    'acf/screenwidth',
    'core/paragraph',
    'core/heading',
    'core/list',
    'core/table',
  );
  // $allowed_block_types is an empty array
  // return $allowed_block_types;
});


// gutenberg styles & editor interface overwrites (backend/dashboard only)
// for blocks with frontend js, import the js file to main.js
add_action('enqueue_block_editor_assets', function() {
  wp_enqueue_script( 'blocks-js', get_template_directory_uri() . getHashedAsset('blocks.js'), array('wp-blocks'), null, true );
  wp_enqueue_style( 'blocks-css', get_template_directory_uri() . getHashedAsset('blocks.css'), array(), null );
}); 


// this is bad...very bad. unfortunately, gutenberg is experiencing growing pains.
// https://github.com/WordPress/gutenberg/issues/6184
add_action('admin_head', function() {
  echo '<style>.blocks-font-size, .block-editor-block-inspector__advanced { display: none; }; </style>';
});