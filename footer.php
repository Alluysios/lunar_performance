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
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
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
