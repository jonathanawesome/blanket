<?php
 
function blanket_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
    'core/list',
    'core/spacer',        
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

?>