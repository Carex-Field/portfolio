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

  //mockup
  $(".modal-container").hide();
  $(".pop_up").on("click", function () {
    var index = $(".pop_up").index(this);
    $(".modal-container").eq(index).fadeIn();
    // $(".modal-content").animate({ scrollTop: 0 });
    $("html, body").css("overflow", "hidden");
  });
  $(".modal-bg, .modal-close, .modal-btn").on("click", function () {
    $(".modal-container").fadeOut();
    $("html, body").removeAttr("style");
  });

  //sp_menu
  let w = $(window).width();
  if (w <= 768) {
    $(".openbtn").on("click", function () {
      $(this).toggleClass("active");
      $(".nav").slideToggle();
      $("html, body").toggleClass("is-fixed");
    });
    $(".nav a").on("click", function () {
      $(".openbtn").click();
    });
  }

  //fadeAnime
  function fadeAnime() {
    $(".fadeUp").each(function () {
      var textPosition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > textPosition - windowHeight + 100) {
        $(this).addClass("fadeUp-show");
      } else {
        $(this).removeClass("fadeUp-show");
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
