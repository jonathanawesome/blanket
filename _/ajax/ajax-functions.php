<?php 

function blanket_search_ajax_handler() {
  
  $search = sanitize_text_field( $_POST[ 'term' ] );
  
  $args = array('s' => 
    $search, 
    'numberposts' => -1,
    'orderby' => 'date', 
    'post_type' => array('')
  );
  
  $searchResults = get_posts( $args );
  
  if ($searchResults) {
    foreach ($searchResults as $searchResult) { ?>

        <div>SEARCH RESULT</div>
        
        <?php // include(locate_template('templates/partials/search_result.php')); ?>

  <?php }
  } else {
    echo 'No search results!';
  }
  die();
}// blanket_search

?>