<?php get_header(); ?> <!-- inclusione del file header.php -->

<main class="container">


    <!-- wordpress loop -->
    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

      <!-- loop content -->

      <article class="article">

        <a href="<?php the_permalink(); ?>">

          <!--
            thumbnail: w=150px, h=150px
            medium: w=300px
            large: w=1024px
          -->

          <?php the_post_thumbnail('large', array('class' => 'img-res','alt' => get_the_title())); ?> <!-- immagine in evidenza -->

          <h3><?php the_title(); ?></h3>

          <?php the_excerpt();?>

        </a>

      </article>

    <?php endwhile; ?>
      <p><?php previous_posts_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?></p>
    <?php else : ?>
      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
