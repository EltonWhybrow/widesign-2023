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
        slideshowSpeed: 5000,
        animationSpeed: 750,
        easing: "swing",
        startAt: 0,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: false,
        directionNav: true,
        controlsContainer: ".flexslider-quotes",
        itemWidth: 310,
        itemMargin: 10,
        minItems: 1,
        maxItems: 3,
        reverse: false,
        animationLoop: true,
      });

      $('#slider-heros .flexslider').flexslider({
        initDelay: 2000,
        animation: 'slide',
        slideshowSpeed: 5000,
        animationSpeed: 600,
        easing: "swing",
        startAt: 1,
        pauseOnAction: true,
        pauseOnHover: false,
        controlNav: true,
        directionNav: true,
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