<?php get_header(); 

$args = array(
  'post_type' => 'program',
  'posts_per_page' => '4'
);
$the_query = new WP_Query($args);

$args2 = array(
  'post_type' => 'program',
);
$num_post = count( get_posts( $args2 ) );
if(get_field('price')) { $price = get_field('price'); } 
?>

<div class="tprograms" id="tprograms">
<h2 class="heading-secondary">Training Programs</h2>

<?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>

<div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
      <?php the_post_thumbnail(); ?>
    </figure>
    <div class="tprograms__iteminfo">
        <h3 class="tprograms__iteminfo-heading"><?php the_title(); ?></h3>
        <div class="tprograms__iteminfo-description">
          <?php the_excerpt(); ?>
        </div>
        
        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="tprograms__btn">Learn More → </a>
    </div>
</div>
  <?php endwhile; // End of the loop. ?>
<?php endif; // end of the the ?>
  <?php if($num_post > 4): ?>
    <a href="<?php echo get_site_url(); ?>/program" class="tprograms__allprograms">SEE ALL PROGRAMS</a>
  <?php endif; ?>
</div>

<?php get_footer(); ?>