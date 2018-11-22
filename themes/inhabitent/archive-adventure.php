<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="adventure-content content-area">
		<main id="main" class="site-main" role="main">
      <div class="adventure-box">

        <div class ="adventure-header">
          <h1>Latest Adventures</h1>
        </div>
        <div class="adventure-grid">
          <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="adventure-grid-item">
              <div class="adventure-content">
                <a class ="adventure-link" href = <?php echo get_permalink(get_the_ID()); ?> ><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
                <a class ="adventure-button" href = <?php echo get_permalink(get_the_ID()); ?>>Read More</a>
              </div>
              <img src="<?php echo CFS()->get( 'image' ); ?>">
            </div>

          <?php endwhile; // End of the loop. ?>
        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
