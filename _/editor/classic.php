<?php 

function blanket_custom_editor_styles() {
  add_editor_style( get_stylesheet_directory_uri() . getHashedAsset('editor.js'));  
}

function blanket_remove_tinymce_buttons_from_editor( $buttons ) {
  $remove_buttons = array(
      // 'bold',
      // 'italic',
      // 'strikethrough',
      // 'bullist',
      // 'numlist',
      'blockquote',
      // 'alignleft',
      // 'aligncenter',
      // 'alignright',
      // 'link',
      // 'unlink',
      'wp_more', // read more link
      'spellchecker',
      'dfw', // distraction free writing mode
      'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
  );
  foreach ( $buttons as $button_key => $button_value ) {
      if ( in_array( $button_value, $remove_buttons ) ) {
          unset( $buttons[ $button_key ] );
      }
  }
  return $buttons;
}//blanket_remove_tinymce_buttons_from_editor

function blanket_remove_tinymce_buttons_from_kitchen_sink( $buttons ) {
  $remove_buttons = array(
      // 'formatselect', // format dropdown menu for <p>, headings, etc
      // 'underline',
      // 'alignjustify',
      'hr', // horizontal line
      'forecolor', // text color
      'pastetext', // paste as text
      // 'removeformat', // clear formatting
      'charmap', // special characters
      'outdent',
      'indent',
      'undo',
      'redo',
      //'wp_help', // keyboard shortcuts
  );
  foreach ( $buttons as $button_key => $button_value ) {
      if ( in_array( $button_value, $remove_buttons ) ) {
          unset( $buttons[ $button_key ] );
      }
  }
  return $buttons;
}

?>