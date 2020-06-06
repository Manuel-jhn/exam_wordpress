<?php get_header(); ?>

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu">
      <li class="menu-text"> ENSIMEVENT</li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li> <a href="#">One</a></li>
      <li> <a href="#">Two</a></li>
      <li> <a href="#">Three</a></li>
    </ul>
  </div>
</div>
<?php if(have_posts()) : while(have_posts()): the_post();?>

  <h1> <?php the_title() ?> </h1>
  <b> <?php the_author() ?> </b>
  <br>
  <?php the_post_thumbnail()?>
  <br>
  <p><?php the_excerpt() ?></p>

<?php endwhile; endif ?>

<?php get_footer(); ?>
