<?php get_header(); ?>


<div class="tprograms" id="tprograms">

<?php while ( have_posts() ) : the_post(); ?>
<?php
if(get_field('program_name')) { $program_name = get_field('program_name'); }
if(get_field('program_description')) { $program_description = get_field('program_description'); } 
if(get_field('program_img')) { $program_img = get_field('program_img'); } 
?>

    <div class="tprograms__item">
        <div class="overlay"></div>
        <figure class="wp-block-image">
        <img src="<?php echo $program_img['url']; ?>" alt="" class="wp-image-216"></figure>
        <div class="tprograms__iteminfo">
            <h3 class="tprograms__iteminfo-heading" id="break"><?php echo $program_name; ?></h3>
            <p class="tprograms__iteminfo-description"><?php echo $program_description; ?></p>
            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="tprograms__btn">Learn More → 
            </a>
        </div>
    </div>
<?php endwhile; // End of the loop. ?>
    


</div>




<?php get_footer(); ?>