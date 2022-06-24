<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- style files -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>> <!-- inserisce classi dinamicamente in base alla pagina -->

  <header class="header">

    <!-- logo (nome del sito) -->
    <a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('title'); ?></a>

    <nav class="menu">
      <!-- template menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        //'walker' => new Clean_Walker_Nav(),
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>'
      ));
      ?>
    </nav>

  </header>

  <div class="hero" style="background: url(<?php echo header_image(); ?>) no-repeat center center; background-size: cover;"> <!-- caricamento immagine di header -->
    <!-- Conditional tag Wordpress -->
    <?php if(is_home()){ ?> <!-- eseguito se siamo in home -->
        <h1><?php bloginfo('name'); ?><!-- template tag di wordpress --></h1>
    <?php  } ?>

    <?php if(is_page()){ ?> <!-- eseguito se siamo in una pagina -->
      <h1><?php the_title(); ?></h1>
    <?php  } ?>

  </div>
