$(function () {
  //voice
  $(".p-abc-school5__btn--1").click(function () {
    $(".p-abc-school5 .is-active").removeClass("is-active");
    $(".p-abc-school5__btn--1").addClass("is-active");
    $(".p-abc-school5__container--1").addClass("is-active");
  });
  $(".p-abc-school5__btn--2").click(function () {
    $(".p-abc-school5 .is-active").removeClass("is-active");
    $(".p-abc-school5__btn--2").addClass("is-active");
    $(".p-abc-school5__container--2").addClass("is-active");
  });

  //fadeIn
  $(".p-abc-school__toTop").hide();
  $(".p-abc-school__aside").hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".p-abc-school__toTop").fadeIn();
      $(".p-abc-school__aside").fadeIn();
    } else {
      $(".p-abc-school__toTop").fadeOut();
      $(".p-abc-school__aside").fadeOut();
    }
  });
});
