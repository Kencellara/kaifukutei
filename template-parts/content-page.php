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

</article><!-- #post-## -->