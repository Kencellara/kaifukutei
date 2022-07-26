<?php get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main l-mainSection two-column">

		<?php if (have_posts()) : ?>

			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>

			<div class="loop-wrapper l-archiveLoopWrapper">
				<?php while (have_posts()) : the_post();
					get_template_part('template-parts/content', '2-column');
				endwhile; ?>
			</div>

			<?php
			the_posts_pagination(array(
				'prev_text' => esc_html__('&laquo; Previous', 'businesspress'),
				'next_text' => esc_html__('Next &raquo;', 'businesspress'),
			));
			?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>