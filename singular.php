<?php get_header(); ?>
  <h1 class="text-center back-yellow page-title">ブログ</h1>
    <?php while(have_posts()): the_post(); ?>
      <h1 class="single-title"><?php the_title(); ?></h1>
      <div class="single-info">
        <p class="single-date"><?php the_time('Y.n.j'); ?></p> 
        <p class="single-category rectangle-border text-center"><?php the_category(',') ?></p>
      </div>

      <div class="main">
        <?php the_content() ?>
      </div>
    <?php endwhile; ?>
      
      <?php  ?>
      <div class="singular-pagination">
        <?php
          $prev_post = get_previous_post();
          $next_post = get_next_post();
        ?>
        <?php  if($prev_post): ?>
          <a class="prev-post" href="<?php echo get_permalink($prev_post->ID); ?>">
            <h4><i class="fas fa-chevron-left"></i></h4>
            <img class="rectangle-border" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)); ?>" alt="">
            <h4><?php echo $prev_post->post_title; ?></h4>
          </a>
        <?php endif; ?>
        <?php if($next_post): ?>
          <a class="next-post" href="<?php echo get_permalink($next_post->ID); ?>">
            <h4><?php echo $next_post->post_title; ?></h4>
            <img class="rectangle-border" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)); ?>" alt="">
            <h4><i class="fas fa-chevron-right"></i></h4>
          </a>
        <?php endif; ?>
      </div>
      <?php ?> 



<?php 
  get_template_part('widget');
  get_footer(); 
?>


