<?php get_header(); ?>
<p>〜〜〜〜〜singular.phpです〜〜〜〜〜</p>
<section>
  <main>
    <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content() ?></p>

    <?php if(is_singular('post')) :?>
      <footer class="entry-footer">
        <span class="cat-links">
          カテゴリー：<?php the_category(',') ?>
        </span>
      </footer>
    <?php endif; ?>

    <?php 
      the_post_navigation([
        'prev_text'=> '<span class="post-title">&lt;&lt; %title</span>',
        'next_text'=> '<span class="post-title">%title &gt;&gt;</span>',
      ]);
    ?>
    <?php endwhile; ?>
  </main>
</section>

<?php 
  get_template_part('widget');
  get_footer(); 
?>


