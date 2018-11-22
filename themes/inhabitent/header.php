<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class=<?php echo (is_front_page() OR is_page( $page = 'about')) ? '"site-header reverse-header"' : "site-header scroll-header" ?>role="banner">
				<div class= "container">
					<div class= "logo">
						<a href="http://localhost/wordpress/">
						  <h1 class="header-title">inhabitent</h1>
            </a>
					</div>

					<!-- <img src="<?php echo get_template_directory_uri(); ?>/inhabitent_assets/images/logos/inhabitent-logo-tent.svg"/> -->
					
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_name' => 'primary-menu' ) ); ?>
						<form role="search" method="get" class="search-form" action="http://localhost/wordpress/">
							<fieldset>
								<a href="#" class="search-toggle" aria-hidden="true">
									<i class="fa fa-search"></i>
								</a>
								<label style="display: none;">
									<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
								</label>
								<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
							</fieldset>
						</form>
					</nav><!-- #site-navigation -->
        </div>
			</header><!-- #masthead -->

    <!-- search script -->
    <script type="text/javascript" src="https://tent.academy.red/wp-content/themes/inhabitent/build/js/search-toggle.min.js"></script>
		
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
			console.log("we scripting");
			jQuery(function($) {
				var $nav = $('#masthead');
				var $win = $(window);
				var winH = $win.height(); // Get the window height.

				$win.on("scroll", function () {
						if ($(this).scrollTop() > winH ) {
								$nav.addClass("scroll-header");
						} else {
								$nav.removeClass("scroll-header");
						}
				}).on("resize", function(){ // If the user resizes the window
					winH = $(this).height(); // you'll need the new height value
				});

				});
		</script>
		<div id="content" class="site-content">
