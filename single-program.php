<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lunar_performance
 */
get_header();
if(get_field('price')) { $price = get_field('price'); } 
if(get_field('price_append')) { $price_append = get_field('price_append'); } 
if(get_field('price_append')) { $price_prepend = get_field('price_prepend'); } 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php while ( have_posts() ) :the_post();?>
				<div class="personalt">
					<div class="personalt__title"><?php the_title(); ?></div>
					<div class="personalt__content">
						<div class="personalt__description"><?php the_content(); ?></div>
						<p class="tprograms__iteminfo-price"><?php echo $price_prepend." Price: $".$price ." ". $price_append; ?></p>
					<div class="personalt__btn">
						<a href="http://lunar.web.dmitcapstone.ca/lunarperformance/contact/">Register Now </a>
					</div>
				</div>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();