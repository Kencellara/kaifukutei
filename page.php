<?php get_header(); ?>

<?php $slug = get_post_field('post_name', get_the_ID()); ?>

<div class="l-pageContentArea l-singularContentArea">
	<main id="main" class="l-siteMain">
		<?php if (is_page($slug)) : ?>
			<?php get_template_part("pages/{$slug}") ?>
		<?php endif ?>
	</main>
</div>

<?php get_footer(); ?>