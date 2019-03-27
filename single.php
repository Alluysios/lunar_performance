<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lunar_performance
 */
if(get_field('program_name')) { $program_name = get_field('program_name'); }
if(get_field('program_description')) { $program_description = get_field('program_description'); } 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	

		<div class="personalt" id="group-performance">
			<p class="personalt__title"><?php echo $program_name; ?></p>
			<div class="personalt__content">
				<p class="personalt__description"><?php echo $program_description; ?></p>
			<div class="personalt__btn">
				<a href="#">Register Now </a>
			</div>
		</div>
		<?php
		
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation();

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();