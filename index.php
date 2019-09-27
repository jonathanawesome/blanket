<?php 

  get_template_part( 'templates/partials/head/_head' );
  
  if (is_single()) {

    get_template_part( 'templates/single' );

  } else {
  
    while ( have_posts() ) : the_post();
      
      the_content(); 
  
    endwhile; 
    
  }

  get_template_part( 'templates/partials/foot/_foot' ); 
  
?>