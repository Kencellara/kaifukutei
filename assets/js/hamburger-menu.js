// 参考：https://baigie.me/engineerblog/?p=234

// 変数定義
const CLASS = "-active";
let isOpen = false;

let hamburger = document.getElementById("js-hamburger");
let hamburgerInnerOpen = document.getElementById("js-hamburgerInnerOpen");
let hamburgerInnerClose = document.getElementById("js-hamburgerInnerClose");
let hamburgerCloseBtn = document.getElementById("js-hamburgerClose");
let focusTrap = document.getElementById("js-focus-trap");
let menu = document.querySelector(".js-nav-area");

// メニュー展開時に背景を固定
const backgroundFix = (willFix) => {
  const scrollingElement = "scrollingElement" in document
    ? document.scrollingElement
    : document.documentElement;

  const scrollY = willFix
    ? scrollingElement.scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw"
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = willFix ? fixedStyles[key] : "";
  });

  if (!willFix) {
    window.scrollTo(0, scrollY * -1);
  }
};

// メニュー開閉制御
hamburger.addEventListener("click", (e) => {
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);

  if (isOpen) {
    // OPEN -> CLOSED
    backgroundFix(false);
    hamburger.setAttribute("aria-expanded", "false");
    hamburgerInnerClose.style.display = 'none';
    hamburgerInnerOpen.style.display = 'inherit';
    hamburger.focus();
    isOpen = false;
  } else {
    // CLOSED -> OPEN
    backgroundFix(true);
    hamburger.setAttribute("aria-expanded", "true");
    hamburgerInnerOpen.style.display = 'none';
    hamburgerInnerClose.style.display = 'inherit';
    isOpen = true;
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

window.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    hamburger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    backgroundFix(false);
    hamburger.focus();
    hamburger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  hamburger.focus();
});