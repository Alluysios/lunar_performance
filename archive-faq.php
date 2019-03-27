

<?php get_header(); 

if(get_field('question')) {
    $question = get_field('question');
}

if(get_field('answer')) {
    $answer = get_field('answer');
}
?>

<?php while ( have_posts() ) : the_post(); ?>

        <h2><?php echo $question; ?></h2>
        <h2><?php echo $answer; ?></h2>

<?php endwhile; // End of the loop. ?>
    


<?php get_footer(); ?> 