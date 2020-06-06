<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()): the_post();?>
    <h1> Concert : <?php the_title() ?> </h1>
    <b> <?php the_author() ?> </b>
<?php endwhile; endif ?>

<?php get_footer(); ?>
