<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<?php blanket_meta(); ?>

<?php blanket_favicon(); ?>
	
<title><?php blanket_title(); ?></title>
	
<?php wp_head(); ?>

</head>

<body>

  <header>
    HEADER

    <button type="button" class="something">click</button>

    <form id="search__form" role="search">
      <input type="search" id="search__form__term" placeholder="<?php _e( 'Search', 'blanketisyourfriend' );?>">
    </form>

    <div class="svg">
      <?php echo file_get_contents(BLANKET_SVG_DIR . "blanket_logo.svg"); ?>
    </div>

  </header>

 	<main class="content">