<?php /* Template Name: Contact Template */
get_header();?>

<div class="contact">
    <h2 class="contact__heading">Get Your Personal Trainer Now!</h2>
    
    <?php echo do_shortcode('[wpforms id="573" title="false" description="false"]'); ?>
</div>


<?php get_footer(); ?>