window.addEventListener("load", function () {
  // GSAP
  if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
  }
  window.scrollTo(0, 0);
  document.body.classList.add("is-loading");
  document.querySelector(".l-wrapper").classList.add("is-loading");

  const tl = gsap.timeline({
    onComplete: () => {
      document.body.classList.remove("is-loading");
      document.querySelector(".l-wrapper").classList.remove("is-loading");
      window.scrollTo(0, 0);
    },
  });
  tl.to(".u-loading__inner p", {
    opacity: 1,
    duration: 1,
    ease: "power2.out",
  })
    .to(".u-loading", {
      scaleY: 0,
      duration: 1.2,
      ease: "power4.inOut",
      delay: 1,
    })
    .to(
      ".l-wrapper",
      {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power3.out",
      },
      "-=0.5",
    )
    .set(".l-wrapper", { clearProps: "all" })
    .set(".u-loading", { display: "none" });
});

$(function () {
  //mockup
  $(".p-top1__modal__container").hide();
  $(".p-top1__box").on("click", function () {
    var index = $(".p-top1__box").index(this);
    $(".p-top1__modal__container").eq(index).fadeIn();
    $("html, body").css("overflow", "hidden");
  });
  $(".p-top1__modal__bg, .p-top1__modal__close, .p-top1__modal__btn").on(
    "click",
    function () {
      $(".p-top1__modal__container").fadeOut();
      $("html, body").removeAttr("style");
    },
  );
});
