<?php /* Template Name: About Template */
 
get_header();?>
<?php 
    $args = array(
        'post_type' => 'about'
    );
    $the_query = new WP_Query($args);
?>
<div class="about">
    <h2 class="heading-secondary">About Us</h2>
        <div class="about__mission">
            <p>The goal of Lunar Performance is to train both athletes &amp; general public to get to their peak mental and physical performance early in their respective sports to prepare them for higher level of competition as well as every day life tasks and activities. We will look to provide the highest quality training to give each and every client the best experience when working with us.</p>
        </div>
        <div class="about__container">
        <?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
        <?php if(get_field('title')) { $title = get_field('title'); } ?>
        <div class="about__container-author">
            <div class="about__name heading-tertiary"><?php the_title(); ?></div>
            <figure class="about__img">
                <?php the_post_thumbnail(); ?>
                <a class="about__btn" href="<?php echo get_permalink(get_the_ID()); ?>">VIEW DETAIL </a>
            </figure>
            <div class="about__description"><?php the_excerpt(); ?></div>
            
        </div>
        <?php endwhile; // End of the loop. ?>
        <?php endif; // end of the the ?>
    </div>
</div>

<?php get_footer(); ?>