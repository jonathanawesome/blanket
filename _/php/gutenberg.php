<?php
 
function blanket_block_editor_styles() {
  //wp_enqueue_style( 'blanket-editor-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:400,500,700' );
}


function blanket_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/image',
		'core/cover-image',
		'core/paragraph',
		'core/heading',
    'core/list',
    'core/html',   
    'core/table',   
    'core-embed/youtube',      
	);
}

?>