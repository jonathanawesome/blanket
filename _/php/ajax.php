<?php 

function BLANKET_search_ajax_handler() {
  $search = sanitize_text_field( $_POST[ 'term' ] );
  $args = array('s' => 
    $search, 
    'numberposts' => -1,
    'orderby' => 'date', 
    'post_type' => array(''));
  $thePosts = get_posts( $args );
  if ($thePosts) {
    foreach ($thePosts as $thePost) {
      $id = $thePost->ID;
      ?>
        <div class="searchResult">
          SEARCH RESULT
        </div><!--searchResult-->

  <?php }
  } else {
    echo 'No search results!';
  }
  die();
}//BLANKET_search

function BLANKET_fetch_ajax_handler() {
  $offset = $_POST[ 'offset' ];
  $newOffset = $offset * 40;
  $args = array(
    'numberposts' => 40,
    'offset' => $newOffset,
    'orderby' => 'date', 
    'post_type' => array('')
  );
  include(locate_template('_/admin/partials/something.php'));
  die();
}//BLANKET_fetch

?>