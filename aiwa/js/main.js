
 /*category*/
// scrollToppage
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.scrollTopPage').fadeIn();
        } else {
            $('.scrollTopPage').fadeOut();
        }
    });
    $('.scrollTopPage').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});

// faq
$(document).ready(function(menuSlide) {
  var $as = $('.accordion-header').click(function() {
    $(this).toggleClass('active').next('.accordion-body').slideToggle();
    $(this).parent().siblings().children('.accordion-body').slideUp();
    $(this).parent().siblings().children('.active').removeClass('active');
    return true;
  });
});

/*slider*/
//document ready
$(document).ready(function(){
    //Event for pushed the video
    $('#carouselTop').carousel({
        pause: true,
        interval: 5000
    });
});
/*change color left*/
var selector = '.categoInfo li, .eventBlue, .card-header';
    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
});

/*boostrapMenu*/
$(document).ready(function () {
    $(".navbar-toggler").on("click", function () {
        $(this).toggleClass("active");
        $("html").toggleClass("overflow-hidden");
  });

  /*click tab scrol company*/
  $('.list-tab a').click(function(e){
    e.preventDefault();
    var target = $($(this).attr('href'));
    if(target.length){
      var scrollTo = target.offset().top + 10;
      $('body, html').animate({scrollTop: scrollTo+'px'}, 1000);
    }
  });


  $('.clc-none-menu a').click(function(e){
    $('.menu-right').removeClass('active');
    $('body').removeClass('hidden');
  });

  $('.clc-menu').click(function(e){
    $('.menu-right').addClass('active');
    $('body').addClass('hidden');
  });

});

jQuery(document).ready(function($){
  'use strict';

  $.Scrollax();
});