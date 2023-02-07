const $ = window.jQuery;
const $window = window.$window || $(window);
const bkgScroll = $('body');

const Modal = {

  init() {
    // simple modal
    $(".modal-trigger").click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      $(".modal").removeClass('scale-100');
      $("#modal-features").addClass('hidden');
      $("#modal-overlay").addClass('hidden');
      var $this = $(this);
      var $dataId = $this.attr("data-id");
      $('#' + $dataId).addClass('scale-100');
      $("#modal-features").removeClass('hidden');
      $("#modal-overlay").removeClass('hidden');
      bkgScroll.addClass('no-scroll');
    });


    $(".close-modal").bind("click", function () {
      $(".modal").removeClass('scale-100');
      $("#modal-features").addClass('hidden');
      $("#modal-overlay").addClass('hidden');
      bkgScroll.removeClass('no-scroll');
    });
    $("#modal-features").bind("click", function () {
      $(".modal").removeClass('scale-100');
      $("#modal-features").addClass('hidden');
      $("#modal-overlay").addClass('hidden');
      bkgScroll.removeClass('no-scroll');
    });


  }
};

export default Modal;