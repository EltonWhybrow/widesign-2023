const $ = window.jQuery;
const $window = window.$window || $(window);

const HeaderScroll = {

  init() {
    $(document).ready(function () {

      const debounce = (func, delay) => {
        let debounceTimer
        return function () {
          const context = this
          const args = arguments
          clearTimeout(debounceTimer)
          debounceTimer
            = setTimeout(() => func.apply(context, args), delay)
        }
      }

      $(window).on("scroll", debounce(function () {
        // console.log($(this).scrollTop());
        if ($(this).scrollTop() >= 75)

          $("header").addClass("active");

        else if ($(this).scrollTop() <= 50)

          $("header").removeClass("active");
      }, 100)).trigger("scroll");

    })
  }

};

export default HeaderScroll;