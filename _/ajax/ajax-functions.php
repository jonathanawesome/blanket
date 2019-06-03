<?php 

function blanket_search_ajax_handler() {
  
  $search = sanitize_text_field( $_POST[ 'term' ] );
  
  $args = array('s' => 
    $search, 
    'numberposts' => -1,
    'orderby' => 'date', 
    'post_type' => array('')
  );
  
  $thePosts = get_posts( $args );
  
  if ($thePosts) {
    foreach ($thePosts as $thePost) {
      $id = $thePost->ID; ?>

        <div>SEARCH RESULT</div>

  <?php }
  } else {
    echo 'No search results!';
  }
  die();
}// blanket_search

?>