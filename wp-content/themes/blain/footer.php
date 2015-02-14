<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Blain
 */
?>

	</div><!-- #content -->

	<footer id="colophon" role="contentinfo">
          <div class="site-footer-top container row">
            <div class="col-md-3">
              <h3>Follow Us</h3>
              <a href="http://www.facebook.com/Feskyval"><img src="wp-content/themes/blain/images/facebook.png" /></a>
              <a href="http://www.twitter.com/feskyval"><img src="wp-content/themes/blain/images/twitter.png" /></a>
            </div>
            <div class="col-md-3">
              <h3>About Feskyval</h3>

              <?php
                 wp_nav_menu( array(
                   'theme_location'    => 'footer-about',
                   'depth'             => 1,
                   'container'         => 'div',
                   'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                   'menu_class'        => 'nav',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
                 );
              ?>

            </div>
            <div class="col-md-3">
              <h3>Feskyval Information</h3>

              <?php
                 wp_nav_menu( array(
                   'theme_location'    => 'footer-info',
                   'depth'             => 1,
                   'container'         => 'div',
                   'container_class'   => '',
                   'menu_class'        => 'nav',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
                 );
              ?>

            </div>
            <div class="col-md-3">
              <h3>Contact Us</h3>
              <p>
                If you have any enquires, feel free to contact us at:
                <a href="mailto:feskyval@gmail.com">feskyval@gmail.com</a>
              </p>
            </div>
          </div>
	  <div class="site-footer container row">
	    <div class="copyright col-md-12">
	      Copyright &copy; <?php echo date("Y") ?> Feskyval
	    </div><!-- .site-info -->
	  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>
</body>
</html>
