<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="<?php getMetaTitle(); ?>"/>
	<meta property="og:description" content="<?php getMetaDesc(); ?>" />
	<meta property="og:url" content="<?php getMetaURL(); ?>"/>
	<meta property="og:image" content="<?php getMetaImage(); ?>" />
	<meta property="og:type" content="<?php if (is_single() || is_page() || is_tax()) {
                                    echo "article";
                                  } else {
                                    echo "website";
                                  } ?>"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>


	<title><?php getMetaTitle(); ?></title>

	<?php wp_head(); ?>

</head>

<body>

  <header>
    HEADER
  </header>

  <div id="contentWrap">
  	<div class="content">