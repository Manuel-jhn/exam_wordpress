<?php get_header(); ?>
<h2>Liste des concerts</h2>
<?php if(have_posts()) : while(have_posts()): the_post();?>
    <h3> <?php the_title() ?> </h3>
    <p><?php the_permalink() ?></p>
<?php endwhile; endif ?>
<?php get_footer(); ?>
