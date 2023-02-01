const $ = window.jQuery;
const $window = window.$window || $(window);

const ScrollAni = {

  init() {
    $(document).ready(function () {
      var breakpoint = 840;

      // If the screen is smaller then 840px wide remove all classes.
      if ($(window).width() < breakpoint) {
        $('.js-slidein').removeClass('js-slidein');
        $('.js-slidein-2').removeClass('js-slidein-2');
        $('.js-slidein-3').removeClass('js-slidein-3');
        $('.js-slidein-4').removeClass('js-slidein-4');
      }

      // Check which of the elements with this class is visible on the page
      $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
          $(this).removeClass('js-slidein');
        }
      });

      $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
          $(this).removeClass('js-slidein');
        }
      });
      $('.js-slidein-2').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
          $(this).removeClass('js-slidein-2');
        }
      });
      $('.js-slidein-3').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
          $(this).removeClass('js-slidein-3');
        }
      });
      $('.js-slidein-4').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
          $(this).removeClass('js-slidein-4');
        }
      });

      // Trigger the slide-in effect on scroll
      $(window).scroll(function () {
        $('.js-slidein').each(function (i) {
          var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
          var bottomWindow = $(window).scrollTop() + $(window).height();

          if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
          }
        });
      });
      $(window).scroll(function () {
        $('.js-slidein-2').each(function (i) {
          var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
          var bottomWindow = $(window).scrollTop() + $(window).height();

          if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
          }
        });
      });
      $(window).scroll(function () {
        $('.js-slidein-3').each(function (i) {
          var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
          var bottomWindow = $(window).scrollTop() + $(window).height();

          if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
          }
        });
      });
      $(window).scroll(function () {
        $('.js-slidein-4').each(function (i) {
          var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
          var bottomWindow = $(window).scrollTop() + $(window).height();

          if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
          }
        });
      });
    });

  }

};

export default ScrollAni;