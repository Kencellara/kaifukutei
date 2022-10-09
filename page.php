<?php get_header(); ?>

<div class="l-pageContentArea l-singularContentArea">
	<main id="main" class="l-siteMain">
		<?php if (is_page('menu')): ?>
			<?php get_template_part('pages/menu') ?>
		<?php endif ?>
	</main>
</div>

<?php get_footer(); ?>