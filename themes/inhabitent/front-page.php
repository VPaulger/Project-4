<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
      <section class="home-hero">
        <img src="https://tent.academy.red/wp-content/themes/inhabitent/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
      </section>

      <!-- Shop stuff section -->
      <div class ="product-info-container">
        <h2>Shop Stuff</h2>
        <div class ="product-type-container"><?php

          $categories = get_categories( array(
            'orderby' => 'name',
            'order' => 'ASC',
            'taxonomy' => 'productcat'
          ));

          // for each category return the category link via the home url, the taxonomy name and category name
          foreach( $categories as $category ) {
            $categorylink = home_url('/') . $category->taxonomy . '/' . $category->name;?>

            <div class ="product-type-wrapper">
              <!-- return an image via the link related to each product category and set the text value to the name of the product category -->
              <img src =<?php echo get_template_directory_uri()."/inhabitent_assets/images/product-type-icons/$category->slug.svg"?> alt="<?php echo $category->name?>">
              <p><?php echo $category->description ?></p>
              <p>
                <a href =<?php echo "$categorylink" ?> class ="button"><?php echo $category->name ?> Stuff</a>
              </p>
            </div><?php

          } ?>
        </div><!-- product type container -->
      </div><!-- product info container -->

      <!-- Journal Section -->
      <div class ="journal-entries">
        <h2>Inhabitent Journal</h2>
        <div class ="journal-wrapper"><?php

          //set the number of posts limit to 3 from the post type adventure
          $args = array(
            'numberposts' => 3,
            'post_type'   => 'Journal'
          );

          $journals = get_posts( $args ); ?>
          <ul><?php 
              // for each journal return the link and the image via custom feild group
              foreach( $journals as $journal ) {
              $journallink = get_permalink($journal->ID);
              $post_image = CFS()->get( 'image' , $journal->ID ); ?>

              <li>
                <div class ="journal-pic-container">
                  <img class ="journal-pic" src =" <?php echo $post_image ?> ">
                </div>
                <div class ="journal-info-container">
                <span>
                  <span class ="posted-date">
                    <time>
                      <!-- echo mysql post date -->
                      <time><?php echo mysql2date('j F, Y', $journal->post_date); ?></time>
                    </time>
                  </span>
                  <!-- return the number of comments for each journal post -->
                  <?php echo $journal->comment_count?> Comment<?php echo ($journal->comment_count == 1) ? "" : "s" ?>
                </span>
                <h3 class ="journal-title">
                  <!-- echo the jounal link for each journal entry and set the link text to the journal post title -->
                  <a href = <?php echo "$journallink" ?> ><?php echo $journal->post_title ?></a>
                </h3> 
                </div>
                <a class ="journal-entry-button" href = <?php echo "$journallink" ?>>Read Entry</a>
              </li><?php

            } ?>
          </ul>
        </div><!-- journal wrapper -->
      </div><!-- journal entries -->

        <!-- Adventure Section -->
      <div class ="adventure-wrapper">
        <h2>Latest Adventures</h2>
        <ul><?php

          //set the number of posts limit to 4 from the post type adventure
          $args = array(
          'numberposts' => 4,
          'post_type'   => 'Adventure'
          );  

          // get the posts from journal taxonomy
          $adventures = get_posts( $args ); 
          //get the url of the adventure page
          $adventurehomelink = home_url('/') . 'adventure/';
          foreach( $adventures as $adventure ) {
            //return the link for each adventure post and the image for each post
            $adventurelink = get_permalink($adventure->ID);
            $post_image = CFS()->get( 'image' , $adventure->ID );?>

            <li>
              <div class ="adventure-content-container">
                <img src = <?php echo $post_image ?>>
                <div class ="adventure-info">
                  <h3 class ="adventure-title">
                    <a href = <?php echo "$adventurelink" ?> ><?php echo $adventure->post_title ?></a>
                  </h3>
                  <!-- create a button via the link related to each post -->
                  <a class ="adventure-button" href = <?php echo "$adventurelink" ?>>Read More</a>
                </div>
              </div>
            </li><?php

          } ?>
        </ul>

        <!-- create a link to adventure page via the adventure page url -->
        <p class ="more-adventures">
          <a href = <?php echo "$adventurehomelink" ?>> More Adventures</a>
        </p>

      </div><!-- adventure wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
