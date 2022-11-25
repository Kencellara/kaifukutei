<?php get_header(); ?>

<main id="js-main" class="p-mainContent">
  <div class="p-topSlideArea">
    <ul id="slide" class="p-topImgSlide">
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-1.jpg') ?>" alt="開福亭の名物ステーキ" height="270px" width="404px"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-2.jpg') ?>" alt="開福亭料理長の調理風景" height="270px" width="404px"></li>
      <li><img src="<?= get_theme_file_uri('/assets/images/main-slide-3.jpg') ?>" alt="伊勢市にある開福亭の看板" height="270px" width="404px"></li>
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
          <figure class="u-withNotice">
            <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-1.jpg') ?>" alt="1914年創業の老舗洋食店" height="270px" width="404px">
            <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
          </figure>
          <div class="p-kodawariParagraphBox">
            <h3>1914年創業の老舗洋食店</h3>
            <p>伊勢市で創業１０８年を迎える老舗洋食店として、現在は４代目”下村忠”が店主を務め、家族代々その伝統の味を受け継いでいます。お客様に本当に美味しい洋食を食べてもらえるように、日々真剣に料理と向き合っています。</p>
          </div>
        </div>
        <div class="p-kodawariBox">
          <figure class="u-withNotice">
            <img src="<?= get_theme_file_uri('/assets/images/top/kodawari-2.jpg') ?>" alt="秘伝のデミグラスソースとこだわりのお肉" height="270px" width="404px">
            <figcaption>調理や接客を1人で行っているので、<br>提供や対応に時間がかかる場合がございます。</figcaption>
          </figure>
          <div class="p-kodawariParagraphBox">
            <h3>秘伝のデミグラスソースとこだわりのお肉</h3>
            <p>創業当初から愛され続ける秘伝のデミグラスソースは、2週間かけて仕込みを行っています。手間暇を惜しまず、先祖代々受け継がれる濃厚なソースを再現。お肉は人気のタンだけでなく、ステーキなど口の中で溶けるような味をご堪能いただけます。</p>
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
        <img src="<?= get_theme_file_uri('/assets/images/menu.jpg') ?>" alt="机いっぱいに並んだ開福亭の料理" height="270px" width="404px">
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
            <img src="<?= get_theme_file_uri('/assets/images/menu/beaf.jpg') ?>" alt="タンシチューの写真" height="270px" width="404px">
            <figcaption>
              牛肉料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#poak') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/poak.jpg') ?>" alt="トンカツの写真" height="270px" width="404px">
            <figcaption>
              豚肉料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#chiken') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/beaf-2.jpg') ?>" alt="ヒレステーキの写真" height="270px" width="404px">
            <figcaption>
              鶏肉料理
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="p-menuRowBox">
        <a href="<?= esc_url(home_url('menu') . '#fish') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/fish.jpg') ?>" alt="エビフライの写真" height="270px" width="404px">
            <figcaption>
              鮮魚料理
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#salad') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/salad.jpg') ?>" alt="サラダの写真" height="270px" width="404px">
            <figcaption>
              サラダ
            </figcaption>
          </figure>
        </a>
        <a href="<?= esc_url(home_url('menu') . '#rice') ?>" target="_self">
          <figure>
            <img src="<?= get_theme_file_uri('/assets/images/menu/rice-1.jpg') ?>" alt="オムライスの写真" height="270px" width="404px">
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
        <ul class="p-businessHoursList">
          <li>11:00~14:00</li>
          <li>17:00~20:30</li>
        </ul>
        <h3 class="c-infoHeader">定休日</h3>
        <p>不定休</p>
        <p class="c-businessHoursAnnounce">
          ※ご予約がない場合は閉店する場合もございます。
        </p>
        <h3>注意事項</h3>
        <ul class="p-noticeList">
          <li>予約可能</li>
          <li>ご要望の料理がある場合は、事前の予約が推奨されます。</li>
          <li>提供には多少のお時間を頂く場合がございます。</li>
        </ul>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>