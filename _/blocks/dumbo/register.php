<?php

// register the block
function register_acf_block_dumbo() {
  acf_register_block_type( array(
    'name'			      => 'dumbo',
    'title'			      => __( 'Dumbo', 'blanketisyourfriend' ),
    'render_template' => get_template_directory() . '/_/blocks/dumbo/template.php',
    'category'		    => 'common',
    'icon'			      => 'editor-code',
    'mode'			      => 'preview',
    'keywords'		    => array( 'dumbo'),
  ));
}

// check if ACF is installed and hook into setup
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_dumbo');
}