$(function () {
  //mockup
  $(".p-top1__modal__container").hide();
  $(".p-top1__box").on("click", function () {
    var index = $(".p-top1__box").index(this);
    $(".p-top1__modal__container").eq(index).fadeIn();
    // $(".modal-content").animate({ scrollTop: 0 });
    $("html, body").css("overflow", "hidden");
  });
  $(".p-top1__modal__bg, .p-top1__modal__close, .p-top1__modal__btn").on(
    "click",
    function () {
      $(".p-top1__modal__container").fadeOut();
      $("html, body").removeAttr("style");
    }
  );
});
