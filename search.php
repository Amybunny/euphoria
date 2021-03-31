<?php get_header(); ?>
！！！検索結果ページ！！！
  <section>
    <main>
      <header>
        <h1>「<?php the_search_query(); ?>」で検索した結果</h1>
      </header>
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) :the_post(); ?>
        <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
        <?php endwhile;
          the_posts_pagination([
            'prev_text'=> '&larr;',
            'next_text'=> '&rarr;',
          ]);
        else :?>
          <section>
            <div>
              <p>お探しの記事は見つかりませんでした</p>
              <?php 
              if(is_active_sidebar('search_notfound')){
                dynamic_sidebar('search_notfound');
              }?>
            </div>
          </section>
        <?php endif; ?>
    </main>
  </section>

<?php
  get_template_part('widget');
  get_footer();
?>