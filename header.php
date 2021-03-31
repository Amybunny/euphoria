<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div>
  
  <header>
    <div>
      <div class="sp-menu">
        <img class="sp-menu-btn phone" src="/wordpress/wp-content/themes/ayaka/phone.png" alt="">
        <img class="sp-menu-btn hamburger" src="/wordpress/wp-content/themes/ayaka/menu.png" alt="">
      </div>
      
      <?php if(has_custom_logo()) : ?>
        <div><?php the_custom_logo(); ?></div>
      <?php endif; ?>

      <?php if(has_nav_menu('menu-1')): ?>
        <nav class="pc-menu" aria-label="トップメニュー">
          <?php 
          wp_nav_menu(
            [
              'theme_location' => 'menu-1',
              'menu_class'=>'main-menu',
            ]
            );
          ?>
        </nav>
      <?php endif; ?>
    </div>
  </header>
  <div>