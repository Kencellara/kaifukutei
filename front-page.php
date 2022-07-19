<?php
$recomList = ['osayan', 'yakitori_tomo', 'kuranoya'];
$post = get_page_by_path('tidoriya', OBJECT, 'post');
$post_id = $post->ID;
?>

<?php get_header(); ?>

<?php if (!is_paged()): ?>
  <div class="l-aboveSection">
    <div class="p-recomPosts">

      <div class="p-mostRecomPost">
        <?= get_the_post_thumbnail($post_id) ?>
        <div class="l-mostRecomText">
          <div class="p-mostRecomTitle">
            <?= get_the_title($post_id) ?>
          </div>
          <div class="p-mostRecomDescription">
            <?= wp_trim_words(strip_shortcodes($post->post_content), 80) ?>
          </div>
          <div class="p-toMostRecomPost"><a href="<?= get_permalink($post_id) ?>">この記事を読む<i class="fa-solid fa-circle-right"></i></a></div>
        </div>
      </div>

      <div class="p-subRecomPosts">
        <?php
        foreach ($recomList as $recom) :
          $post_id = get_page_by_path($recom, OBJECT, 'post')->ID;
        ?>
          <div class="a-subRecomPost">
            <a href="<?= get_permalink($post_id) ?>">
              <?= get_the_post_thumbnail($post_id) ?>
            </a>
            <div class="l-subRecomText">
              <div class="p-subRecomTitle">
                <a href="<?= get_permalink($post_id) ?>">
                  <?= get_the_title($post_id) ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>

    </div>
  </div>
<?php endif ?>

<div id="primary" class="content-area l-mainSection">
  <main id="main" class="site-main l-mainContent two-column">
    <div class="p-newPosts">
      <div class="p-newPostsHeader">新着記事</div>

      <div class="loop-wrapper">
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
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>