<?php get_header(); ?>
<h1 class="text-center back-yellow page-title"><?php the_title(); ?></h1>
<?php breadcrumb(); ?>
<div class="main">
  <?php while(have_posts()): the_post(); ?>
  <?php the_content() ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>