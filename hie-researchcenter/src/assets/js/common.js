$(function() {

  /* ------------------
  TOP PAGE AND COMMON
  ---------------------*/

  // Menu
  // Open sub menu PC & SP
  var wWindow = $(window).outerWidth();
  $(window).resize(function () {
    wWindow = $(window).outerWidth();
    $('.js-main-slider')[0].slick.refresh()
  });

  // Open menu SP only
  $('.js-sp-navBtn').click(function() {
    $('body').toggleClass('fixed');
    $('.js-menu, .js-header').toggleClass('active');
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.logo-white').hide();
      $('.logo-blue').show();
    } else if ($(window).scrollTop() <= 0) {
      $('.logo-white').show();
      $('.logo-blue').hide();
    }
  });

  $('.js-gofooter').click(function() {
    if (wWindow <= 950) {
      $('body').removeClass('fixed');
      $('.js-menu, .js-header, .js-sp-navBtn').removeClass('active');
      $('.logo-white').show();
      $('.logo-blue').hide();
    }
  });


  // Animation on scroll
  $(window).scroll(function() {
    // Scroll slide up out
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    if (scroll > 0 && wWindow <= 950) {
      $('.js-header').addClass('active2');
      $('.logo-white').hide();
      $('.logo-blue').show();
    } else {
      $('.js-header').removeClass('active2');
      $('.logo-white').show();
      $('.logo-blue').hide();
    }

    $('.fadeup').each(function() {
      let elemPos = $(this).offset().top;
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('fadeup-in');
      }
    });

    $('.fadeinright').each(function() {
      let elemPos = $(this).offset().top;
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('fadeinright-in');
      }
    });

  });


  // Scroll to section
  $('a[href^="#"]').not("a[class*='carousel-control-']").click(function() {
    var href= $(this).attr("href");
    var hash = href == "#" || href == "" ? 'html' : href;
    var position = $(hash).offset().top - 100;
    $('body,html').stop().animate({scrollTop:position}, 1000);
    return false;
  });

  // Main Slider
  $('.js-main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    swipeToSlide: false,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    dots: true,
    customPaging: function(slider, i) {
      return '<span class="dot"></span>';
    }
  });


});

