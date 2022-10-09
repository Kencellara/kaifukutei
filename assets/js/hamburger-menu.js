// 参考：https://baigie.me/engineerblog/?p=234

// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();
    if ("scrollingElement" in document) return document.scrollingElement;
    return document.documentElement;
  };

  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw"
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "-active";
let flg = false;
let accordionFlg = false;

let hamburger = document.getElementById("js-hamburger");
let hamburgerInnerOpen = document.getElementById("js-hamburgerInnerOpen");
let hamburgerInnerClose = document.getElementById("js-hamburgerInnerClose");
let hamburgerCloseBtn = document.getElementById("js-hamburgerClose");
let focusTrap = document.getElementById("js-focus-trap");
let menu = document.querySelector(".js-nav-area");
let accordionTrigger = document.querySelectorAll(".js-sp-accordion-trigger");
let accordion = document.querySelectorAll(".js-sp-accordion");

// メニュー開閉制御
hamburger.addEventListener("click", (e) => { //ハンバーガーボタンが選択されたら
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);

  if (flg) {
    // OPEN -> CLOSED
    backgroundFix(false);
    hamburger.setAttribute("aria-expanded", "false");
    hamburgerInnerClose.style.display = 'none';
    hamburgerInnerOpen.style.display = 'inherit';
    hamburger.focus();
    flg = false;
  } else {
    // CLOSED -> OPEN
    backgroundFix(true);
    hamburger.setAttribute("aria-expanded", "true");
    hamburgerInnerOpen.style.display = 'none';
    hamburgerInnerClose.style.display = 'inherit';
    flg = true;
  }
});

hamburgerCloseBtn.addEventListener("click", (e) => {
  e.currentTarget.classList.remove(CLASS);
  menu.classList.remove(CLASS);
  backgroundFix(false);
  hamburger.setAttribute("aria-expanded", "false");
  hamburgerInnerClose.style.display = 'none';
  hamburgerInnerOpen.style.display = 'inherit';
  hamburger.focus();
  flg = false;
});

window.addEventListener("keydown", (e) => { //escキー押下でメニューを閉じられるように
  if (e.key === "Escape") {
    hamburger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    backgroundFix(false);
    hamburger.focus();
    hamburger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });

});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  hamburger.focus();
});