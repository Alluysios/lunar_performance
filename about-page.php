<?php /* Template Name: About Template */
 
get_header();?>
<?php 
    $args = array(
        'post_type' => 'about'
    );
    $the_query = new WP_Query($args);
?>
<div class="about">
    <h2 style="heading-secondary">About Us</h2>

    <p>The goal of Lunar Performance is to train both athletes &amp; general public to get to their peak mental and physical performance early in their respective sports to prepare them for higher level of competition as well as every day life tasks and activities. We will look to provide the highest quality training to give each and every client the best experience when working with us.</p>
    <div class="about__container">
        <?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
        <?php if(get_field('title')) { $title = get_field('title'); } ?>
        <div class="about__container-author">
            <p class="about__name heading-tertiary"><?php the_title(); ?></p>
            <figure class="about__img">
                <p class="about__title"><?php echo $title; ?></p>
                <img src=<?php the_post_thumbnail(); ?>
                <a class="about__btn" href="<?php echo get_permalink(get_the_ID()); ?>">VIEW DETAIL </a>
            </figure>
            <p class="about__description"><?php the_excerpt(); ?></p>
            
        </div>
        <?php endwhile; // End of the loop. ?>
        <?php endif; // end of the the ?>
    </div>


</div>

<?php get_footer(); ?>