const $ = window.jQuery;
const $window = window.$window || $(window);

const MobileHamburgerMenu = {

  init() {

    var mobileNav = $('.navburger-main');
    var navToggle = $('#hamburger');
    var bkgScroll = $('body');
    var trigger = $('#hamburger');
    var isClosed = false;
    var isOpen = 0;
    var windowWidth = '-' + $window.width();

    //window resize
    $window.resize(function () {
      windowWidth = '-' + $window.width();
      $(mobileNav).animate({ 'left': windowWidth }, 0);
      isOpen = 0;
      bkgScroll.removeClass('no-scroll');
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
      //console.log('window width on load >>>>', windowWidth);
      $(mobileNav).css({ "width": "100%" });
    });

    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
    }

    $('html').click(function () {
      if (isOpen == 1) {
        $(mobileNav).animate({ 'left': windowWidth }, 300);
        navToggle.removeClass('open');
        isOpen--;
        bkgScroll.removeClass('no-scroll');
      }
      return;
    });

    $(navToggle).click(function (e) {
      e.stopPropagation();
      if (isOpen == 0) {
        $(mobileNav).animate({ 'left': 0 }, 500);
        navToggle.addClass('open');
        isOpen++;
        bkgScroll.addClass('no-scroll');
      } else {
        $(mobileNav).animate({ 'left': windowWidth }, 500);
        navToggle.removeClass('open');
        isOpen--;
        bkgScroll.removeClass('no-scroll');
      }
    })

  }
};

export default MobileHamburgerMenu;