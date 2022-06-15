<?php get_header(); ?>

<main class="container">

  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->
    <article class="article">
      
      <?php the_content(esc_html__('Read More...', 'slug-theme'));?> <!-- mostra il contenuto dell'articolo -->

    </article>

  <?php endwhile; ?>

  <?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
