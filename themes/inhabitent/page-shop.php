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
          <h1>Shop Stuff</h1>

          <ul class="product-type-list"><?php
            $categories = get_categories( array(
              'orderby' => 'name',
              'order' => 'ASC',
              'taxonomy' => 'productcat'
            ));

            foreach( $categories as $category ) {
              $categorylink = home_url('/') . $category->taxonomy . '/' . $category->name; ?>
              <li>
                <a href = <?php echo "$categorylink" ?>><?php echo $category->name ?></a>
              </li><?php

            }?>
          </ul>
        </div><!-- .page-header -->

        <div class="product-grid"><?php

            $first_args = array( 'post_type' => 'Product', 'posts_per_page' => 16);
            $first_args['orderby'] = 'title';
            $first_args['order'] = 'ASC';
            $first_query = new WP_Query($first_args); // exclude category

            while($first_query->have_posts()) : $first_query->the_post();?>
              <div class="product-grid-item">
                <div class="thumbnail-wrapper">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>" rel="bookmark">
                    <img src="<?php echo CFS()->get( 'image' ); ?>">
                  </a>
                </div>
                <div class="product-info">
                  <h2><?php echo CFS()->get( 'name' ); ?>....</h2>  
                  <span class="price"><?php echo CFS()->get( 'price' );?></span>
                </div>
              </div><!-- end product-grid-item --><?php
            endwhile;
            wp_reset_postdata(); ?>
        </div><!-- end product-grid -->
      </div><!-- end shop container -->

          
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>  