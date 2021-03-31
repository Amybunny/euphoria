<?php get_header(); ?>
！！！アーカイブページ！！！

  <section>
    <main>

      <header>
        <?php the_archive_title('<h1>','</h1>') ?>
      </header>

      <?php while(have_posts()):the_post() ?>
        <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
      <?php endwhile;
        the_posts_pagination([
          'prev_text'=> '&larr;',
          'next_text'=> '&rarr;',
        ]);
      ?>

    </main>
  </section>

<?php 
  get_template_part('widget');
  get_footer();
