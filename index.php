<?php get_header(); ?>
！！！ブログ一覧ページ(index.php)！！！

	<section>
		<main>

			<h1>ブログ記事一覧</h1>
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

				<?php endwhile;
					the_posts_pagination([
						'prev_text'=> '&larr;',
						'next_text'=> '&rarr;',
					]);
				?>
			</ul>
			

		</main>
	</section>

<?php 
	get_template_part('widget');
	get_footer();