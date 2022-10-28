<?php get_header(); ?>

<div class="content-area l-postContentArea l-singularContentArea">
	<main id="js-main" class="site-main l-siteMain">
		<div class="l-contentWrapper">
			<article class="p-singleNews">
				<h1 class="c-newsHeader"><?php the_title() ?></h1>
				<time class="c-newsPublishedDate" datetime="<?= get_the_date('Y年m月d日') ?>" itemprop="datepublished"><?= get_the_date('Y年m月d日') ?></time>
				<?php the_content() ?>
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('medium') ?>
				<?php endif ?>
			</article>
			<button class="c-toNewsArchive" type="button">
				<a href="<?= home_url('news-archives') ?>" target="_self">
					一覧へ戻る
				</a>
			</button>
		</div>
	</main>
</div>

<?php get_footer(); ?>