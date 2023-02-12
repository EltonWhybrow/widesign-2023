const $ = window.jQuery;
const $window = window.$window || $(window);

const MobileHamburgerMenu = {

  init() {


    // $(window).resize(function () {
    //   var width = $(".navburger-main").width();
    //   var cheese = $(".navburger-main").css("width", width);
    //   console.log('>>>LOG>>>', cheese);
    // });

    var mobileNav = $('.navburger-main');
    var navToggle = $('#hamburger');

    // $(window).resize(cssWidth = $(mobileNav).css('width'));
    // var cssWidth = $(mobileNav).css('width');
    var cssWidth = $(window).width();

    var bkgScroll = $('body');
    var trigger = $('#hamburger');
    var isClosed = false;
    var isOpen = 0;
    var menuWidthInverse = '-' + cssWidth;

    var windowWidth = '-' + $(window).width();
    // console.log('window width on load >>>>', windowWidth);

    //window resize
    $(window).resize(function () {
      windowWidth = '-' + $(window).width();
      $(mobileNav).animate({ 'left': windowWidth }, 0);
      isOpen = 0;
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;

      console.log('window width on load >>>>', windowWidth);

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
        subMenu.hide();
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
        subMenu.hide();
        bkgScroll.removeClass('no-scroll');
      }
    });

    // Controls the nested menu behaviour
    // var primaryLink = $('.navbar-main ul li a[href^="#"]');
    var primaryLink = $('.navburger-main ul li a');
    var subMenu = $('.navburger-main ul li ul.sub-menu');

    $(primaryLink).click(function (e) {
      e.stopPropagation();
      $(primaryLink).not(this).each(function () {
        $(this).next().slideUp(300);
      });
      $(this).next().slideToggle(300);
    });

  }

};

export default MobileHamburgerMenu;