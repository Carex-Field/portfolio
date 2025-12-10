$(function(){

    //sp menu
    let w = $(window).width();
    if (w <= 799) {
        $('#nav_btn').click(function(){
          $('header').toggleClass('nav_open');
          $('#gnav').slideToggle();
        });
        $('#gnav a').click(function(){
          $('#nav_btn').click();
        });
    } else {
        $('#gnav').show();
    }  

  //fadein
  $('#pagetop').hide();
  $('.reserve_fadein').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 500){
      $('#pagetop').fadeIn();
      $('.reserve_fadein').fadeIn();
    }
    else{
      $('#pagetop').fadeOut();
      $('.reserve_fadein').fadeOut();
    }
  });

  //voice
  $('.child_btn').click(function(){
    $('.active').removeClass('active');
    $('.child_btn').addClass('active');
    $('.child').addClass('active');
  });
  $('.parent_btn').click(function(){
    $('.active').removeClass('active');
    $('.parent_btn').addClass('active');
    $('.parent').addClass('active');
  });

    //smooth scroll
    $('a[href^="#"]').click(function() {
      let speed = 500;
      let href= $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   }); 

  //fadeUp
  function fadeAnime(){
    $('.fadeUp').each(function(){
      var textPosition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > textPosition - windowHeight + 100){
        $(this).addClass('fadeUp-show');
      }
      else{
        $(this).removeClass('fadeUp-show');
      }
    });
  }
  $(window).scroll(function(){
    fadeAnime();
  });
  $(window).on('load', function(){
    fadeAnime();
  });

});