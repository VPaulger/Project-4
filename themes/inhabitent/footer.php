<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

 </div><!-- #content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="footer-block">
        
        <div class="contact-info">
          <h4>CONTACT INFO</h4>
          <h5><i class="fa fa-envelope" aria-hidden="true"></i>  info@inhabitent.com</h5>
          <h5><i class="fa fa-phone"></i>  778-456-7891</h5>
          <i class="fa fa-facebook-square"></i>
          <i class="fa fa-twitter-square"></i>
          <i class="fa fa-google-plus-square"></i>
        </div><!-- .contact-info -->

        <div id="footer-widget-area" class="secondary">
          <div id="footer_widget">
            <?php
            if(is_active_sidebar('footer')){
            dynamic_sidebar('footer');
            }
            ?>
          </div>
        </div>
        
        <div class="empty-footer-block"></div>

        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/inhabitent_assets/images/logos/inhabitent-logo-text.svg"/>
        </div>

      </div><!-- end of footer block -->

      <div class="copyright">
        <h5>COPYRIGHT <i class="fa fa-copyright"></i> 2019 INHABITENT</h5>
      </div><!--.end-copyright-->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <div id="secondary" class="widget-area" role="complementary">
    <?php wp_footer(); ?>
 </div><!-- #secondary -->
  

  </body>
</html>
