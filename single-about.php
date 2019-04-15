<?php
 get_header();
 if(get_field('title')) { $title = get_field('title'); }
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="trainer clearfix">
            <?php while ( have_posts() ) :the_post();?>
            <div class="trainer__container">
                <div class="trainer__item">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="trainer__item">
                    <h3 class="trainer__name heading-tertiary"><?php the_title(); ?></h3>
                <div class="trainer__description">   
                    <?php echo the_content(); ?>
                    <div class="trainer__btn">
                        <a href="http://lunar.web.dmitcapstone.ca/lunarperformance/about-us/">See Other Trainers</a>
                    </div>
                </div>
                </div>
            </div>
            <?php endwhile; // End of the loop. ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>