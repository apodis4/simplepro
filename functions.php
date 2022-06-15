<?php
function simple_setup() {

  // Enable title in header
  add_theme_support( "title-tag" ); // setta dinamicamente il title in ogni pagina

  // Enable custom header in header
  add_theme_support( "custom-header" ); // 

  // Enable featured image
  add_theme_support( 'post-thumbnails' ); // attiva immagine in evidenza nel be

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'slug-theme' ) // attivazione menu custom di nome Header
  ));

}
add_action( 'after_setup_theme', 'simple_setup' );

/*  Enqueue css
/* ------------------------------------ */
function simple_styles() {

	wp_enqueue_style( 'simple_styles', get_template_directory_uri().'/style.css'); // setta il foglio di stile

}
add_action( 'wp_enqueue_scripts', 'simple_styles' ); // funzione che inserisce gli script contenuti nella funzione


function gb_gutenberg_admin_styles() {
    echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1200px;
            }

            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1480px;
            }

            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }
        </style>
    ';
}

add_action('admin_head', 'gb_gutenberg_admin_styles');
?>
