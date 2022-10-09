// 参考：https://coco-factory.jp/ugokuweb/move01/5-1-9/

let beforePos = 0;

const scrollBehavior = () => {
  const mainTop = jQuery('#main').offset().top;
  const scroll = jQuery(window).scrollTop();

  if (scroll < mainTop || scroll < beforePos) {
    // 出現
    jQuery('#js-fixHeader').removeClass('disappear');
    jQuery('#js-fixHeader').addClass('appear');
  } else {
    // 消失
    jQuery('#js-fixHeader').removeClass('appear');
    jQuery('#js-fixHeader').addClass('disappear');
  }

  beforePos = scroll;
}

jQuery(window).scroll(() => {
  scrollBehavior();
});
