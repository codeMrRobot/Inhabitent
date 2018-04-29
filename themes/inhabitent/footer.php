<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

		</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-info-container">
						<div class="footer-text">
							<h3>Contact Info</h3>
								<p>
									<i class="fa fa-envelope icon" aria-hidden="true"></i>
									<a href="">info@inhabitant.com</a>	
								</p>
								<p>
									<i class="fa fa-phone icon" aria-hidden="true"></i>
									<a href="">778-456-7891</a>
								</p>
								<p class="social-media-icons">
									<i class="fa fa-twitter-square" aria-hidden="true"></i>
									<i class="fa fa-google-plus-square" aria-hidden="true"></i>
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</p>						
					</div>
					<div class="footer-text">	
							<h3>Business Hours</h3>
								<p><span class="date-bold">Monday-Friday:</span> 9am to 5pm</p>
								<p><span class="date-bold">Saturday:</span> 10am to 2pm</p>
								<p><span class="date-bold">Sunday:</span> Closed</p>		
					</div>
					<div class="footer-text">
						<div class="text-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) );?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Green Inhabitent Logo"/>
							</a>
						</div>		
					</div>
				</div><!-- .site-info -->
				<div class="copyright">COPYRIGHT © 2018 INHABITENT</div>	
			</footer><!-- #colophon -->
		<?php wp_footer(); ?>
	</body>
</html>
