<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="find-us-content content-area">
		<main id="main" class="site-main" role="main">

			<div class="page-header">
				<h1>FIND US</h1>
			</div>

			<div class="find-us-flex-container">
				<div class="find-us-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.2090409985303!2d-79.39997868497427!3d43.64381897912161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34ded41454b3%3A0x648b029428613f49!2sRED+Academy+Toronto!5e0!3m2!1sen!2sca!4v1542663139668" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<h2>WE TAKE CAMPING VERY SERIOUSLY.</h2>
					<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
					
					<h2>SEND US EMAIL!</h2>
					<form action="/find-us/#wpcf7-f61-p9-o1" method="post" class="wpcf7-form" novalidate="novalidate">
						<div style="display: none;">
							<input type="hidden" name="_wpcf7" value="61">
							<input type="hidden" name="_wpcf7_version" value="5.0.2">
							<input type="hidden" name="_wpcf7_locale" value="en_US">
							<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-p9-o1">
							<input type="hidden" name="_wpcf7_container_post" value="9">
						</div>
						<p class="name">
							<label>Name <span class="required">*</span></label>
							<span class="wpcf7-form-control-wrap your-name">
								<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
							</span> 
						</p>
						<p class="email">
							<label>Email <span class="required">*</span></label>
							<span class="wpcf7-form-control-wrap your-email">
								<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
							</span>
						</p>
						<p class="subject">
							<label>Subject <span class="required">*</span></label>
							<span class="wpcf7-form-control-wrap your-subject">
								<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
							</span> 
						</p>
						<p class="message">
							<label>Message <span class="required">*</span></label>
							<span class="wpcf7-form-control-wrap your-message">
								<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea>
							</span> 
						</p>
						<p>
							<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
							<span class="ajax-loader"></span>
						</p>
						<div class="wpcf7-response-output wpcf7-display-none"></div>
					</form>
				</div>

				<div class="sidebar-container">
					<div class="sidebar-content">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
