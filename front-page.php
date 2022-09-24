<?php get_header(); ?>

<main id="main" class="c-mainContent">
  <div class="c-topSlideArea">
    <ul id="slide" class="c-topImgSlide">
      <li><img src="<?= get_theme_file_uri('/assets/images/slide-sample-1.png') ?>" alt="画像１"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/slide-sample-1.png') ?>" alt="画像２"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/slide-sample-1.png') ?>" alt="画像３"></li>
    </ul>
  </div>

  <div class="c-newsArea">
    <h2>ニュース</h2>

    <ul class="c-newsList">
      <?php query_posts('posts_per_page=2'); ?>
      <?php while (have_posts()) : ?>
        <?php the_post() ?>
        <li>
          <article>
            <div class="p-newsDate">
              <?= get_the_date('Y.m.d') ?>
            </div>
            <?php the_title('<h3 class="p-newsTitle">', '</h3>') ?>
            <?php the_content() ?>
          </article>
        </li>
      <?php endwhile ?>
    </ul>

    <div class="p-toAllNews">
      <a href="#">ニュース一覧<i class="fa-solid fa-play"></i></a>
    </div>
  </div>
</main>

<?php get_footer(); ?>