<?php get_header() ?>

<!-- blanket index -->


<?php if (is_singular('blankets')) {
  get_template_part( 'templates/core/single-blankets' );
} ?>

<?php get_footer(); ?>
