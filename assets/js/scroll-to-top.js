jQuery(() => {
  jQuery(window).scroll(() => {
    if (jQuery(this).scrollTop() > 300) {
      jQuery('#js-scrollToTop').fadeIn();
    } else {
      jQuery('#js-scrollToTop').fadeOut();
    }
  });
  jQuery('#js-scrollToTop').on('click', () => {
    jQuery('html,body').animate({ scrollTop: 0 }, 600, 'swing');
    return false;
  });
});