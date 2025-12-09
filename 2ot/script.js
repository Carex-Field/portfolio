$(function(){
  
  //pagetop
  $('#pagetop').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 300){
      $('#pagetop').fadeIn();
    }
    else{
      $('#pagetop').fadeOut();
    }
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

  //sp menu
  let w = $(window).width();
  if (w <= 640) {
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

  if(w > 640){
    //img 切り替え
    $('.thumb').click(function(){
      url = $(this).attr('src');
      $('#big_img').attr('src',url);
    });

    //explain 切り替え
    $('.thumb').click(function(){
      $('.active').removeClass('active');
      var index = $('.thumb').index(this);
      $('.explain').eq(index).addClass('active');
    });
  }

  //fadeAnime
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

    $('.fadeRight').each(function(){
      var textPosition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > textPosition - windowHeight + 100){
        $(this).addClass('fadeRight-show');
      }
      else{
        $(this).removeClass('fadeRight-show');
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