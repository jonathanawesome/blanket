<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<?php blanket_meta(); ?>

<?php blanket_favicon(); ?>
	
<title><?php blanket_title(); ?></title>
	
<?php wp_head(); ?>

</head>

<body data-template="<?php blanket_get_template(); ?>">

  <?php get_template_part( 'templates/partials/header/_header' ); ?>

 	<main class="content">