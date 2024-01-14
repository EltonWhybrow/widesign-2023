//
// Options and docs
// https://github.com/woocommerce/FlexSlider/wiki/FlexSlider-Properties
//

const $ = window.jQuery;
const $window = window.$window || $(window);

const FlexSliderSetUp = {

  init() {

    $(window).load(function () {

      $('#slider-quotes .flexslider').flexslider({
        initDelay: 3000,
        animation: 'slide',
        slideshowSpeed: 7000,
        animationSpeed: 800,
        easing: "swing",
        startAt: 0,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: true,
        directionNav: false,
        controlsContainer: ".flexslider-quotes",
        // itemWidth: 510,
        // itemMargin: 10,
        useCSS: true,
        touch: true,
        minItems: 1,
        maxItems: 3,
        reverse: false,
        animationLoop: true,
      });



      $('#slider-heros .flexslider').flexslider({
        initDelay: 2000,
        animation: 'fade',
        slideshowSpeed: 5000,
        animationSpeed: 800,
        easing: "swing",
        startAt: 1,
        pauseOnAction: true,
        pauseOnHover: false,
        controlNav: false,
        directionNav: false,
        controlsContainer: ".flexslider-hero",
        // itemWidth: 510,
        // itemMargin: 10,
        useCSS: true,
        touch: true,
        minItems: 1,
        maxItems: 3,
        reverse: false,
        animationLoop: true,
      });

    });

  }

};

export default FlexSliderSetUp;