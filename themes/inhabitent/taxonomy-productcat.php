<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="shop-container">	
        <div class="page-header">
          <?php
            $title = get_the_archive_title();
            $title = single_cat_title( '', false);
            echo "<h1 class='page-title'>$title</h1>";
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
          ?>
        </div><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php 
        $query_vars = $wp_query->query_vars;
        $query_vars['orderby'] = 'title';
        $query_vars['order'] = 'ASC';
        $new_query = new WP_Query($query_vars);?>

        <div class="product-grid">
      
        <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
          <div class="product-grid-item">
            <div class="thumbnail-wrapper">
              <a href="<?php echo get_permalink(get_the_ID());?>">
                <img src="<?php echo CFS()->get( 'image' ); ?>">
              </a>
            </div>
            <div class="product-info">
              <?php the_title('<h2 class="entry-title">', '</h2>' ); ?>
              <span class="price">$<?php echo number_format(CFS()->get('price'), 2); ?></span>
            </div>
          </div>


        <?php endwhile; ?>
      </div>
    </div>

      <?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
