const $ = window.jQuery;
const $window = window.$window || $(window);

const HeaderScroll = {

  init() {
    $(document).ready(function () {

      $(window).on("scroll", function () {

        if ($(this).scrollTop() > 50)

          $("header").removeClass("normal").addClass("active");

        else

          $("header").removeClass("active").addClass("normal");


      })
    })
  }

};

export default HeaderScroll;