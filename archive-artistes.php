<?php get_header(); ?>
<h2>Liste des artistes</h2>
<?php if(have_posts()) : while(have_posts()): the_post();?>
    <h3> <?php the_title() ?> </h3>
    <a href='<?php the_permalink() ?>'>Aller à l'artiste</a>
<?php endwhile; endif ?>
<?php get_footer(); ?>
