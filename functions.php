<?php
function simple_setup() {

  // Enable title in header
  add_theme_support( "title-tag" ); // setta dinamicamente il title in ogni pagina

  // Enable custom header in header
  add_theme_support( "custom-header" ); 

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'slug-theme' )
  ));

}
add_action( 'after_setup_theme', 'simple_setup' );

/*  Enqueue css
/* ------------------------------------ */
function simple_styles() {

	wp_enqueue_style( 'simple_styles', get_template_directory_uri().'/style.css');

}
add_action( 'wp_enqueue_scripts', 'simple_styles' );

?>
