<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div class="journal-container">

    <div id="primary" class="journal-area">
      <main id="main" class="site-main" role="main">

        THIS IS THE JOURNAL PAGE!
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'single-journal' ); ?>

        <?php the_post_navigation(); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

  </div> <!-- end content container -->
<?php get_footer(); ?>
