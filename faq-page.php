<?php /* Template Name: FAQs Template */

get_header();?>
<?php 
    $args = array(
        'post_type' => 'faq'
    );
    $the_query = new WP_Query($args);
?>
<div class="accordion-container">
    <?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
    <?php
        if(get_field('answer')) { $answer = get_field('answer'); }
    ?>
    <button class="accordion"><?php the_title(); ?></button>
    <div class="panel">
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php endwhile; // End of the loop. ?>
<?php endif; // end of the the ?>
<?php get_footer(); ?> 