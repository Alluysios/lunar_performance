

<?php get_header(); 

if(get_field('question')) {
    $question = get_field('question');
}

if(get_field('answer')) {
    $answer = get_field('answer');
}
?>
<?php while ( have_posts() ) : the_post(); ?>

    <button class="accordion"><?php echo $question; ?></button>
    <div class="panel">
        <p><?php echo $answer; ?></p>
    </div>
<?php endwhile; // End of the loop. ?>
    


<?php get_footer(); ?> 