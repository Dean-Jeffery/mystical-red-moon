<?php

//something for menus? scared to delete
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



//Change excerpt length
 add_filter( 'excerpt_length', function($length) {
  return 20;
} );
 ?>


