<?php get_header(); ?>

<section class="content-area l-contentArea">
	<main id="main" class="site-main l-siteMain">
		<div class="l-contentWrapper">
			<h1 class="c-mainHeader">ニュース一覧</h1>
			<ol class="p-allNewsList">
				<?php while (have_posts()) : ?>
					<?php the_post() ?>
					<li>
						<a class="p-singleNewsLink" href="<?php esc_url(the_permalink()) ?>" target="_self">
							<article>
								<?php the_title('<h2 class="c-newsTitle">', '</h2>') ?>
								<?php the_excerpt() ?>
								<time class="c-newsPublishedDate" datetime="<?= get_the_date('m月d日') ?>" itemprop="datepublished"><?= get_the_date('m月d日') ?></time>
							</article>
						</a>
					</li>
				<?php endwhile ?>
			</ol>
			<!-- 前と次がわかりづらいため反転 -->
			<?php the_posts_navigation([
				'next_text' => '<i class="fa-solid fa-angle-left"></i>前のページへ',
				'prev_text' => '次のページへ<i class="fa-solid fa-angle-right"></i>',
			]) ?>
		</div>
	</main>
</section>

<?php get_footer(); ?>