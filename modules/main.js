$(".js-ham-button").click(function () {
  $(this).toggleClass('active');
  $(".js-ham-contents").toggleClass('active');
});

$(".js-question").click(function() {
  $(this).children().toggleClass('active');
  $(this).next(".js-answer").fadeToggle();
});

//scroll hint
new ScrollHint('.js-scrollable');
