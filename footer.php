<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunar_performance
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="footer">
		<div class="footer__info">
			<h3 class="heading-tertiary">Social Media.</h3>
			<div class="footer__sm">
				<a href="https://www.facebook.com/lunarperformance/">
					<img src="<?php echo get_site_url() ?>/wp-content/uploads/2019/04/icons8-facebook-48.png" alt="facebook-icon">
				</a>
				<a href="https://twitter.com/LunarPerform">
					<img src="<?php echo get_site_url() ?>/wp-content/uploads/2019/04/icons8-twitter-circled-48.png" alt="twitter-icon">
				</a>
				<a href="https://www.instagram.com/lunarperformance/">
					<img src="<?php echo get_site_url() ?>/wp-content/uploads/2019/04/icons8-instagram-48.png" alt="instagram-icon">
				</a>
				
			</div>
			<a href="<?php echo esc_url( __( 'http://lunar.web.dmitcapstone.ca/lunarperformance/', 'lunar_performance' ) ); ?>" class="footer__link">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright 2019 Lunar performance. All rights reserved' ), 'WordPress' );
				?>
			</a>
		</div><!-- .site-info -->

		<div class="footer__contact">
			<h3 class="heading-tertiary">Contact</h3>
			<p class="footer__contact-phone">Phone: 587-999-9999</p>
			<p class="footer__contact-email">Email: lunarperformance@gmail.com</p>
		</div><!-- .contact -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
