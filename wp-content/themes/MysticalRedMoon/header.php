<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,700,700i|Yeseva+One&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
  <header id="header">
  <div class="wrapper">
    <div id="site-title">
        <h1><a href="<?php echo get_bloginfo('wpurl');?>">Red Moon Tarot</a></h1>
    </div>
    <div class="nav-bar">
    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'Header-menu' ) );?>
    </nav>
    </div>
    </div>
  </header>
