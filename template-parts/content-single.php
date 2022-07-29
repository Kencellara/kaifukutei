<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header p-entryHeader">

		<div class="p-postTitleArea">
			<div class="a-postTitleBefore">
				<i class="fa-solid fa-utensils"></i>
			</div>
			<h1 class="entry-title a-postTitle"><?php the_title(); ?></h1>
		</div>

		<div class="p-postDate g-postDate"><?= get_the_date(); ?></div>

		<?php if (has_post_thumbnail()) : ?>
			<div class="post-thumbnail a-postEyecatch">
				<?php the_post_thumbnail('businesspress-post-thumbnail-eyecatch'); ?>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry-content p-entryContent">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<!-- 関連記事 -->
	<?php $relatedPosts = fetchRelatedPosts(4) ?>

	<div class="p-relatedPostsHeader"><i class="fa-solid fa-paperclip"></i>関連記事</div>

	<div class="l-relatedPostsArea">
		<?php foreach ($relatedPosts as $post) : ?>
			<div class="p-relatedPost">

				<a class="p-relatedPostImg" href="<?php the_permalink() ?>">
					<?php the_post_thumbnail('businesspress-post-thumbnail-eyecatch') ?>
				</a>

				<div class="p-relatedPostText">
					<div class="p-relatedPostTitle">
						<a href="<?php the_permalink() ?>">
							<?php the_title() ?>
						</a>
					</div>
				</div>

			</div>
		<?php endforeach ?>
	</div>

</article><!-- #post-## -->