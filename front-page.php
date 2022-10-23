<?php get_header(); ?>

<main id="main" class="p-mainContent">
  <div class="p-topSlideArea">
    <ul id="slide" class="p-topImgSlide">
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-1.jpg') ?>" alt="メイン画像１" height="270px" width="404px"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-2.jpg') ?>" alt="メイン画像２" height="270px" width="404px"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-3.jpg') ?>" alt="メイン画像３" height="270px" width="404px"></li>
    </ul>
  </div>

  <section class="p-newsSection">
    <div class="l-wrapper">
      <h2 class="c-mainHeader">ニュース</h2>

      <ul class="p-newsList">
        <?php query_posts('posts_per_page=2'); ?>
        <?php while (have_posts()) : ?>
          <?php the_post() ?>
          <li>
            <a class="p-singleNewsLink" href="<?php esc_url(the_permalink()) ?>" target="_self">
              <article>
                <time class="c-newsPublishedDate" datetime="<?= get_the_date('Y.m.d') ?>" itemprop="datepublished"><?= get_the_date('Y.m.d') ?></time>
                <?php the_title('<h3 class="c-newsTitle">', '</h3>') ?>
                <?php the_excerpt() ?>
              </article>
            </a>
          </li>
        <?php endwhile ?>
      </ul>

      <div class="p-toAllNews p-toDetail">
        <a href="<?= esc_url(home_url('news-archives')) ?>" target="_self">ニュース一覧<i class="fa-solid fa-play"></i></a>
      </div>
    </div>
  </section>

  <section class="p-kodawariHistorySection">
    <div class="l-wrapper">
      <h2 class="c-mainHeader">こだわりと歴史</h2>

      <div class="p-kodawariZone">
        <div class="p-kodawariBox">
          <div class="p-kodawariParagraphBox">
            <p class="c-afterDash"><span class="u-1-2em">1914年</span>（大正3年）創業</p>
            <p class="c-beforeDash"><span class="u-1-1em">お料理</span>を通じた</p>
            <p class="c-indent"><span class="u-1-1em">お客様</span>との<span class="u-1-1em">ご縁</span>を<span class="u-1-1em">大切</span>にしています。</p>
          </div>
          <figure class="u-withNotice">
            <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-1.jpg') ?>" height="270px" width="404px">
            <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
          </figure>
        </div>
        <div class="p-kodawariBox">
          <div class="p-kodawariParagraphBox">
            <p class="c-beforeDash"><span class="u-1em">2週間</span>じっくりと火入れした<span class="u-1em">デミグラスソース</span></p>
            <p class="c-afterDash c-indent"><span class="u-1em">脂</span>の<span class="u-1em">質</span>にこだわって仕入れた<span class="u-1em">お肉</span></p>
          </div>
          <figure class="u-withNotice">
            <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-2.jpg') ?>" height="270px" width="404px">
            <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
          </figure>
        </div>
        <div class="p-kodawariBox u-block">
          <div class="p-kodawariParagraphBox">
            <p class="c-beforeDash u-pc-textAlignRight"><span class="u-1-1em">受</span>け<span class="u-1-1em">継</span>がれてきた<span class="u-1-1em">伝統</span>の<span class="u-1-1em">味</span>を<span class="u-1-1em">ご賞味</span>ください。</p>
          </div>
        </div>
      </div>

      <div class="p-toAllKodawariHistory p-toDetail">
        <a href="<?= esc_url(home_url('history')) ?>" target="_self">もっと詳しく<i class="fa-solid fa-play"></i></a>
      </div>
    </div>
  </section>

  <section class="p-menuSection">
    <h2 class="c-mainHeader">メニュー</h2>

    <div class="p-sp-menuZone">
      <figure class="u-withNotice">
        <img src="<?= get_theme_file_uri('/assets/images/menu.jpg') ?>" alt="開福亭メニュー画像" height="270px" width="404px">
        <figcaption>
          仕込みや在庫の状況によってご提供できない場合がございます。<br>
          ご予約の際に、ご希望のメニューまでお伝えいただけると確実です。
        </figcaption>
      </figure>
    </div>

    <div class="p-pc-menuZone">
      <div class="p-menuRowBox">
        <a href="<?= esc_url(home_url('menu') . '#beaf') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/beaf.jpg') ?>" alt="タンシチュー" height="270px" width="404px">
            <figcaption>
              牛肉料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#poak') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/poak.jpg') ?>" alt="トンカツ" height="270px" width="404px">
            <figcaption>
              豚肉料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#chiken') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/beaf-2.jpg') ?>" alt="ヒレステーキ" height="270px" width="404px">
            <figcaption>
              鶏肉料理
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="p-menuRowBox">
        <a href="<?= esc_url(home_url('menu') . '#fish') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/fish.jpg') ?>" alt="エビフライ" height="270px" width="404px">
            <figcaption>
              鮮魚料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#salad') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/salad.jpg') ?>" alt="サラダ" height="270px" width="404px">
            <figcaption>
              サラダ
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#rice') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/rice-1.jpg') ?>" alt="オムライス" height="270px" width="404px">
            <figcaption>
              米飯料理
            </figcaption>
          </figure>
        </a>
      </div>
    </div>

    <div class="p-toAllMenu p-toDetail">
      <a href="<?= esc_url(home_url('menu')) ?>" target="_self">メニュー一覧<i class="fa-solid fa-play"></i></a>
    </div>
  </section>

  <section class="p-salesInfoSection">
    <h2 class="c-mainHeader">営業情報</h2>

    <div class="p-infoContents">
      <div class="p-calenderArea">
        <iframe src="https://calendar.google.com/calendar/embed?src=kenpum4a1business%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>

      <div class="p-infoTextArea">
        <h3 class="c-infoHeader">営業時間</h3>
        <ul>
          <li>11:00~14:00</li>
          <li>17:00~20:30</li>
        </ul>
        <h3 class="c-infoHeader">定休日</h3>
        <p>不定休</p>
        <!-- <div class="c-businessHoursAnnounce">
          営業時間は変更となることがあります。
          ご予約がない場合には閉店している場合も
          ございますので，ご来店前に店舗まで
          お問い合わせください。
        </div> -->
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>