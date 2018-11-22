<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			THIS IS THE JOURNAL PAGE!
			<?php
        $journal_args = array( 'post_type' => 'Journal', 'posts_per_page' => 4);
        $journal_query = new WP_Query($journal_args); // exclude category
        while($journal_query->have_posts()) : $journal_query->the_post();
        echo CFS()->get( 'name' );?>
        <img src="<?php echo CFS()->get( 'image' ); ?>"><?php
        endwhile;
        wp_reset_postdata();
      ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
