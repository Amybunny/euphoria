<?php get_header(); ?>
<h1 class="page-title text-center back-yellow"><?php the_archive_title() ?></h1>
<?php breadcrumb(); ?>
<div class="container">
  <section class="contents">
    <ul>
      <?php while(have_posts()):the_post() ?>
        <li>
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
        </li>		
      <?php endwhile;?>
    </ul>
    <div class="archive-pagination">
      <?php the_posts_pagination([
          'prev_text'=> '&larr;',
          'next_text'=> '&rarr;',
        ]);
      ?>
    </div>
  </section>
  <section class="widget"><?php get_template_part('widget'); ?></section>
</div>
<?php get_footer();?>