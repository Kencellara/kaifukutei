<div class="p-navigationArea js-nav-area" id="navigation">
  <nav id="js-global-navigation" class="global-navigation">
    <ul class="global-navigation__list">
      <li>
        <a href="<?= home_url() ?>" class="c-hamburgerNavLink" target="_self">
          ホーム
        </a>
      </li>
      <li>
        <a href="<?= home_url('news-archives') ?>" class="c-hamburgerNavLink" target="_self">
          ニュース
        </a>
      </li>
      <li>
        <a href="<?= home_url('history') ?>" class="c-hamburgerNavLink" target="_self">
          こだわりと歴史
        </a>
      </li>
      <li>
        <a href="<?= home_url('menu') ?>" class="c-hamburgerNavLink" target="_self">
          メニュー
        </a>
      </li>
      <li>
        <a href="<?= home_url('shop-info') ?>" class="c-hamburgerNavLink" target="_self">
          店舗案内
        </a>
      </li>
    </ul>
    <button id="js-hamburgerClose" class="c-hamburgerCloseBtn" type="button">閉じる</button>
    <div id="js-focus-trap" tabindex="0"></div>
  </nav>
</div>