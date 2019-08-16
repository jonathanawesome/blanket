<?php
 
function blanket_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
    'core/list',
    'core/spacer',   
    'acf/dumbo'     
	);
}

// activate wide- and full-width options for image and cover blocks
add_theme_support( 'align-wide' );

// disable manual font sizes
add_theme_support( 'editor-font-sizes' );
add_theme_support( 'disable-custom-font-sizes' );

// disable custom colors
add_theme_support( 'disable-custom-colors' );

// remove color palette
add_theme_support( 'editor-color-palette' );

// gutenberg scripts
function blanket_blocks_scripts() {
  wp_enqueue_script( 'blocks-js', get_template_directory_uri() . getHashedAsset('blocks.js'), array(), null, true );
}

// gutenberg styles
function blanket_blocks_styles() {
  wp_enqueue_style( 'blocks-css', get_template_directory_uri() . getHashedAsset('blocks.css'), array(), null );
}