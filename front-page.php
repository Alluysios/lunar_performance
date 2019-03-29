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

?>

<div class="tprograms" id="tprograms">
<?php if($the_query->have_posts() ) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>

<div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
    <img src="<?php the_post_thumbnail(); ?>" alt="" class="wp-image-216"></figure>
    <div class="tprograms__iteminfo">
        <h3 class="tprograms__iteminfo-heading"><?php the_title(); ?></h3>
        <p class="tprograms__iteminfo-description"><?php the_excerpt(); ?></p>

        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="tprograms__btn">Learn More → </a>
    </div>
</div>
<!-- <div class="tprograms" id="tprograms">
  <h2 class="heading-secondary">Training Programs</h2>
  <div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
    <img src="http://lunar.web.dmitcapstone.ca/lunarperformance/wp-content/uploads/2019/03/youth-707x1024.jpg" alt="" class="wp-image-216"></figure>
    <div class="tprograms__iteminfo">
      <h3 class="tprograms__iteminfo-heading">Youth Training</h3>
      <p class="tprograms__iteminfo-description">Provides youth athletes with specific programs to enhance their ability to play their respective sports. We will create these programs so that they are sports specific, increase strength, power and conditioning that can give them the edge over the other athletes.</p>
        <a href="http://lunar.web.dmitcapstone.ca/lunarperformance/youth-performance/" class="tprograms__btn">Learn More → 
        </a>
    </div>
  </div>
  <div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
    <img src="http://lunar.web.dmitcapstone.ca/lunarperformance/wp-content/uploads/2019/03/personal-826x1024.jpg" alt="" class="wp-image-216"></figure>
    <div class="tprograms__iteminfo">
      <h3 class="tprograms__iteminfo-heading">Personal Performance</h3>
      <p class="tprograms__iteminfo-description">Lunar Performance programs provide each client with every opportunity to reach their desired goals. We provide every new client with a free movement assessment and fitness test. This allows our trainer to get to know the biomechanics of your body. </p>
        <a href="http://lunar.web.dmitcapstone.ca/lunarperformance/personal-training/" class="tprograms__btn">Learn More → 
        </a>
    </div>
  </div>
  <div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
    <img src="http://lunar.web.dmitcapstone.ca/lunarperformance/wp-content/uploads/2019/03/group-853x1024.jpeg" alt="" class="wp-image-216"></figure>
    <div class="tprograms__iteminfo">
      <h3 class="tprograms__iteminfo-heading">Group Performance</h3>
      <p class="tprograms__iteminfo-description">Lunar Performance offers a very affordable, fun way for clients to take advantage of a trainer’s expertise at a lower financial investment, all while keeping the fun and competitiveness of a group dynamic. </p>
        <a href="http://lunar.web.dmitcapstone.ca/lunarperformance/group-performance/" class="tprograms__btn">Learn More → 
        </a>
    </div>
  </div>
    
  <div class="tprograms__item">
    <div class="overlay"></div>
    <figure class="wp-block-image">
    <img src="http://lunar.web.dmitcapstone.ca/lunarperformance/wp-content/uploads/2019/03/team-855x1024.jpg" alt="" class="wp-image-216"></figure>
    <div class="tprograms__iteminfo">
      <h3 class="tprograms__iteminfo-heading">Team Performance</h3>
      <p class="tprograms__iteminfo-description">Lunar Performance offers team dry-land training for hockey teams, soccer teams, basketball teams, volleyball teams etc. We provide mobile training in recreation centers, wherever is convenient for you and your team, we can handle teams with up to 25 athletes. </p>
        <a href="http://lunar.web.dmitcapstone.ca/lunarperformance/team-performance/" class="tprograms__btn">Learn More → 
        </a>
    </div>
  </div> -->

  <?php endwhile; // End of the loop. ?>
<?php endif; // end of the the ?>
  <?php if($num_post > 4): ?>
    <a href="<?php echo get_site_url(); ?>/program" class="tprograms__allprograms">SEE ALL PROGRAMS</a>
  <?php endif; ?>
</div>

<?php get_footer(); ?>