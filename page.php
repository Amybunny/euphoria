<?php get_header(); ?>
<p>〜〜〜〜〜page.phpです〜〜〜〜〜</p>
<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content() ?></p>
    <?php endwhile; ?>



  </main>
</section>
<?php get_footer(); ?>