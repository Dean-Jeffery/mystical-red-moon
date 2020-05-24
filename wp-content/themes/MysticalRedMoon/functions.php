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
//use 50 words on 'blog' page
//and 20 in recent blogs segment on other pages
 add_filter( 'excerpt_length', function($length) {
  if (is_page_template('blog.php')){
    return 50;
  } else{
    return 20;
  }

  }
 );

 // Changing excerpt more
 function new_excerpt_more($more) {
  global $post;
  return '<a href="'. get_permalink($post->ID) . '">' . 'Read More →' . '</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');


 ?>


