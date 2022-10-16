<div class="header__nav-area js-nav-area" id="navigation">
  <nav id="js-global-navigation" class="global-navigation">
    <ul class="global-navigation__list">
      <li>
        <a href="<?= home_url() ?>" class="global-navigation__link" target="_self">
          ホーム
        </a>
      </li>
      <li>
        <a href="#" class="global-navigation__link">
          ニュース
        </a>
      </li>
      <li>
        <a href="<?= home_url('history') ?>" class="global-navigation__link">
          こだわりと歴史
        </a>
      </li>
      <li>
        <a href="<?= home_url('menu') ?>" class="global-navigation__link" target="_self">
          メニュー
        </a>
      </li>
      <li>
        <a href="<?= home_url('shop-info') ?>" class="global-navigation__link" target="_self">
          店舗案内
        </a>
      </li>
    </ul>
    <button id="js-hamburgerClose" class="c-hamburgerCloseBtn" type="button">閉じる</button>
    <div id="js-focus-trap" tabindex="0"></div>
  </nav>
</div>