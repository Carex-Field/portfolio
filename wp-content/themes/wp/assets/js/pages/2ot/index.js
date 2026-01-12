$(function () {
  //pagetop
  $(".p-2ot__toTop").hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".p-2ot__toTop").fadeIn();
    } else {
      $(".p-2ot__toTop").fadeOut();
    }
  });
});

//swiper
const swiper = new Swiper(".p-2ot__section2__swiper__thumbs", {
  spaceBetween: 10,
  slidesPerView: 4,
});

const swiper2 = new Swiper(".p-2ot__section2__swiper", {
  loop: true,
  autoplay: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
