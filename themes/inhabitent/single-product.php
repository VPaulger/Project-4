<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
    <!-- create a list and get price data and image to display -->
    <h1><?php echo CFS()->get( 'name' ); ?></h1>
    <ul>
      <li><?php echo CFS()->get( 'price' ); ?></li>
      <li><img src="<?php echo CFS()->get( 'image' ); ?>"></li>
    <ul>

    <?php
      function my_add_template_to_posts() {
        $post_type_object = get_post_type_object( 'post' );
        $post_type_object->template = array(
          array( 'core/paragraph', array(
          'placeholder' => 'Add Description...',
          ) ),
        );
      $post_type_object->template_lock = 'all';
      }
      add_action( 'init', 'my_add_template_to_posts' );
    ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

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
<?php get_footer(); ?>
