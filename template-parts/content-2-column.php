<div class="post-grid">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">

			<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('businesspress-post-thumbnail-eyecatch'); ?></a>
			</div><!-- .post-thumbnail -->
			<?php endif; ?>

			<h2 class="entry-title p-entryTitle">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			
			<div class="p-postDate g-postDate"><?= get_the_date(); ?></div>

		</header><!-- .entry-header -->

		<div class="entry-summary">
			<p><?= businesspress_shorten_text( get_the_excerpt(), 60 ); ?></p>
		</div><!-- .entry-summary -->

	</article><!-- #post-## -->
</div><!-- .post-grid -->