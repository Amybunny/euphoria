<?php get_header(); ?>
<h1 class="page-title text-center back-yellow">検索結果</h1>
<?php breadcrumb(); ?>
<div class="container">
  <section class="contents">
    <p class="text-center back-white mt24">「<?php the_search_query();?>」を含む記事</p>
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) :the_post(); ?>
        <a class="rectangle-border entry-card" href="<?php the_permalink(); ?>"> 
          <figure class="rectangle-border entry-img">
            <?php the_post_thumbnail([96,54]); ?>
          </figure>
          <div class="entry-card-text">
            <p class="entry-card-title">
              <?php the_title(); ?>
            </p>
            <p class="entry-card-date">
              <?php the_time('Y.n.j'); ?>  
            </p>
          </div>
        </a>
      <?php endwhile; 
        the_posts_pagination([
          'prev_text'=> '&larr;',
          'next_text'=> '&rarr;',
        ]);
    else :?>
      <div>
        <p class="text-center back-white mt32">お探しの記事は見つかりませんでした</p>
        <?php 
        if(is_active_sidebar('search_notfound')){
          dynamic_sidebar('search_notfound');
        }?>
      </div>
    <?php endif; ?>
  </section>
  <section class="widget"><?php get_template_part('widget'); ?></section>
</div>
<?php get_footer();?>