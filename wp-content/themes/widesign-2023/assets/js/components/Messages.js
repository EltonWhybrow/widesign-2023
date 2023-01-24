const $ = window.jQuery;
const $window = window.$window || $(window);

const Messages = {

  init() {
    // Closes messages if user wants to behaviour
    var currentMessage = $('#notification');
    var closeMessage = $('#close-message');
    // console.log('>>>LOG>>>', currentMessage);
    // console.log('>>>LOG>>>', closeMessage);

    $(closeMessage).click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      $(currentMessage).slideUp(400);
    });
  }

};

export default Messages;