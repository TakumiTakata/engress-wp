$(".js-ham-button").click(function () {
  $(this).toggleClass('active');
  $(".js-ham-contents").toggleClass('active');
});

$(".js-question").click(function() {
  $(this).next(".js-answer").addClass('test');
  $(this).next(".js-answer").fadeToggle();
});
