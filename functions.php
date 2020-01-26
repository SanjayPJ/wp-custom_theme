<?php 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );
add_theme_support( 'menus' );

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main' => __( 'Main' ),
      'hello-there' => __( 'Hello There' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
 ?>