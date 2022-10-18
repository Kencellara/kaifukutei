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
            <article>
              <time class="p-newsDate"><?= get_the_date('Y.m.d') ?></time>
              <?php the_title('<h3 class="p-newsTitle">', '</h3>') ?>
              <?php the_excerpt() ?>
            </article>
          </li>
        <?php endwhile ?>
      </ul>

      <div class="p-toAllNews p-toDetail">
        <a href="#">ニュース一覧<i class="fa-solid fa-play"></i></a>
      </div>
    </div>
  </section>

  <section class="p-kodawariHistorySection">
    <div class="l-wrapper">
      <h2 class="c-mainHeader">こだわりと歴史</h2>

      <div class="p-kodawariZone">
        <p class="c-afterDash"><span class="c-f19">1914年</span>（大正3年）創業</p>
        <p class="c-beforeDash"><span class="c-f17">お料理</span>を通じた</p>
        <p class="c-indent"><span class="c-f17">お客様</span>との<span class="c-f17">ご縁</span>を<span class="c-f17">大切</span>にしています。</p>
        <figure>
          <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-1.jpg') ?>" height="270px" width="404px">
          <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
        </figure>
        <p class="c-beforeDash"><span class="c-f16">2週間</span>じっくりと火入れした<span class="c-f16">デミグラスソース</span></p>
        <p class="c-afterDash c-indent"><span class="c-f16">脂</span>の<span class="c-f16">質</span>にこだわって仕入れた<span class="c-f16">お肉</span></p>
        <figure>
          <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-2.jpg') ?>" height="270px" width="404px">
          <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
        </figure>
        <p class="c-beforeDash"><span class="c-f17">受</span>け<span class="c-f17">継</span>がれてきた<span class="c-f17">伝統</span>の<span class="c-f17">味</span>を<span class="c-f17">ご賞味</span>ください。</p>
      </div>

      <div class="p-toAllKodawariHistory p-toDetail">
        <a href="#">もっと詳しく<i class="fa-solid fa-play"></i></a>
      </div>
    </div>
  </section>

  <section class="p-menuSection">
    <h2 class="c-mainHeader">メニュー</h2>

    <div class="p-menuZone">
      <figure>
        <img src="<?= get_theme_file_uri('/assets/images/menu.jpg') ?>" alt="開福亭メニュー画像" height="270px" width="404px">
        <figcaption>
          仕込みや在庫の状況によってご提供できない場合がございます。<br>
          ご予約の際に、ご希望のメニューまでお伝えいただけると確実です。
        </figcaption>
      </figure>
    </div>

    <div class="p-toAllMenu p-toDetail">
      <a href="<?= home_url('menu') ?>" target="_self">メニュー一覧<i class="fa-solid fa-play"></i></a>
    </div>
  </section>

  <section class="p-salesInfoSection">
    <h2 class="c-mainHeader">営業情報</h2>

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
  </section>
</main>

<?php get_footer(); ?>