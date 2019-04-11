<?php /* Template Name: FAQs Template */
get_header();?>
<?php 
    $args = array(
        'post_type' => 'faq'
    );
    $the_query = new WP_Query($args);
?>
<div class="faq">
    <?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
        <?php if(get_field('answer')) { $answer = get_field('answer'); }?>
        <button class="faq__accordion"><?php the_title(); ?></button>
        <div class="faq__panel">
            <div><?php the_content(); ?></div>
        </div>
    <?php endwhile; // End of the loop. ?>
    <?php endif; // end of the the ?>
</div>
<?php get_footer(); ?> 