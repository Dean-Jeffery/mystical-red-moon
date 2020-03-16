<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,400,400i,700,700i|Yeseva+One&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
  <header id="header">
    <div id="site-title">
        <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
    echo '<h1>';
} ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
        <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
    echo '</h1>';
} ?>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Blog">Blog</a></li>
        <li><a href="Shop">Shop</a></li>
      </ul>
    </nav>
  </header>
