<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="http://placehold.it/500x200" alt="">
      </div>
      <?php
        $defaults = array(
          'theme_location' =>'main_menu'
        );
        wp_nav_menu( $defaults);
       ?>
    </header>
