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

	<footer id="colophon" class="footer site-footer">
		<div class="footer_info site-info">
			<a href="<?php echo esc_url( __( 'http://lunar.web.dmitcapstone.ca/lunarperformance/', 'lunar_performance' ) ); ?>" class="footer__link">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright 2019 Lunar performance. All rights reserved' ), 'WordPress' );
				?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
