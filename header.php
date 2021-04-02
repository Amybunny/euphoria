<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div>
  <header>
    <div>
      <div class="sp-menu">
        <img class="sp-menu-btn phone" src="/wordpress/wp-content/themes/ayaka/phone.png" alt="">
        <img class="sp-menu-btn hamburger" id="open" src="/wordpress/wp-content/themes/ayaka/menu.png" alt="">
      </div>
      <div><?php the_custom_logo(); ?></div>
      <?php if(has_nav_menu('menu-1')): ?>
        <nav class="pc-menu" aria-label="トップメニュー">
          <?php 
          wp_nav_menu(
            [
              'theme_location' => 'menu-1',
              'menu_class'=>'menu-common main-menu',
            ]
            );
          ?>
        </nav>
        <nav class="overlay " aria-label="トップメニュー">
          <span id="close"><i class="fas fa-times"></i></span>
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