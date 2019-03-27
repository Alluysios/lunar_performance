<?php get_header(); 

if(get_field('program_name')) {
    $program_name = get_field('program_name');
}

if(get_field('program_description')) {
    $program_description = get_field('program_description');
}
?>

<?php echo $program_name; ?>
<?php echo $program_description; ?>

<?php get_footer(); ?>