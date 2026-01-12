// import $ from 'jquery';
// import Anchor from '../Components/_Anchor.js';
// import Swiper from '../Components/_Slider.js';

$(function () {
  //smooth scroll
  $('a[href^="#"]').on("click", function () {
    let speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  //spMenu
  let w = $(window).width();
  if (w <= 768) {
    $(".c-spMenu").on("click", function () {
      $(this).toggleClass("is-active");
      $(".c-spMenu__nav").toggleClass("is-active");
      $("html, body").toggleClass("is-fixed");
    });
    $(".c-spMenu__nav a").on("click", function () {
      $(".c-spMenu").click();
    });
  }

  //fadeAnime
  function fadeAnime() {
    $(".c-fadeUp").each(function () {
      var textPosition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > textPosition - windowHeight + 100) {
        $(this).addClass("is-show");
      } else {
        $(this).removeClass("is-show");
      }
    });
  }
  $(window).scroll(function () {
    fadeAnime();
  });
  $(window).on("load", function () {
    fadeAnime();
  });
});
