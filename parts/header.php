<header id="js-fixHeader">
  <?php if (is_front_page()) : ?>
    <h1 class="c-topLogoHeader">
      <img src="<?= get_theme_file_uri('/assets/images/logo-green.png') ?>" alt="開福亭ロゴ緑">
    </h1>
  <?php else : ?>
    <a class="c-pageLogoHeader" href="<?= home_url() ?>" target="_self">
      <img src="<?= get_theme_file_uri('/assets/images/logo-green.png') ?>" alt="開福亭ロゴ緑">
    </a>
  <?php endif ?>

  <ul class="p-headerIconList">
    <li><img src="<?= get_theme_file_uri('/assets/images/instagram-logo.png') ?>" alt="Instagram"></li>
    <li>
      <a href="tel:0596-28-2952">
        <img src="<?= get_theme_file_uri('/assets/images/TEL-logo.png') ?>" alt="TEL">
      </a>
    </li>
    <li>
      <button id="js-hamburger" type="button" class="c-hamburger" aria-controls="navigation" aria-expanded="false">
        <img id="js-hamburgerInnerOpen" src="<?= get_theme_file_uri('/assets/images/hamburger-menu-open.png') ?>" alt="ハンバーガーメニュー開く">
        <img id="js-hamburgerInnerClose" style="display:none;" src="<?= get_theme_file_uri('/assets/images/hamburger-menu-close.png') ?>" alt="ハンバーガーメニュー閉じる">
      </button>
    </li>
  </ul>

  <?php get_template_part('parts/hamburger-menu'); ?>
</header>