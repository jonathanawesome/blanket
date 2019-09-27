<?php 

function blanket_search_ajax_handler() {
  
  $search = sanitize_text_field( $_POST[ 'term' ] );
  
  $args = array(
    's'           => $search, 
    'numberposts' => -1,
    'orderby'     => 'date', 
    // 'post_type'   => 'custom_post_type'
  );
  
  $searchResults = get_posts( $args );
  
  if ($searchResults) {
    
    foreach ($searchResults as $searchResult) {
    
      include(locate_template('templates/partials/search_result.php'));
    
    }

  } else {
    
    echo 'No search results!';
  
  }

  die();
}// blanket_search

add_action('blanket_blanket_search', 'blanket_search_ajax_handler');
add_action('blanket_nopriv_blanket_search', 'blanket_search_ajax_handler');