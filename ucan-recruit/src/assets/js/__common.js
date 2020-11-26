$(function() {

  /* ------------------
  TOP PAGE AND COMMON
  ---------------------*/

  // Menu
  // Open sub menu PC & SP
  var wWindow = $(window).outerWidth();
  $(window).resize(function () {
    wWindow = $(window).outerWidth();
  });


  // Open menu
  var menuLabel = $('.js-label-menu');
  var btnMenu = $('.js-btn-menu');
  var btnMenuWrapper = $('.js-btn-menu').parent();
  var menu = $('.js-menu');
  var menuBox = $('.js-menu-box');
  var btnGroup = $('.js-header-btnGroup');

  btnMenu.click(function() {
    // $('body').toggleClass('fixed');
    if (wWindow <= 950) {
      $('body').toggleClass('fixed');
    }

    $(this).toggleClass('active');
    btnMenuWrapper.toggleClass('active');
    menu.toggleClass('active');
    btnGroup.toggleClass('hide');

    if($(this).hasClass('active')) {
      menuLabel.html('CLOSE');
    } else {
      menuLabel.html('MENU');
    }
        
    // call TimelineMax
    // timeline.reversed() ? timeline.play() : timeline.pause(0).reversed(true);
  });


  // Animation

  // scrollBlockSlideUp();
  $(window).scroll(function() {
    // Scroll slide up out
    $('.fadeup').each(function() {
      let elemPos = $(this).offset().top;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('fadeup-in');
      }
    });

  });

  /*Min - height box*/
  $('.container').each(function(){  
      var highestBox = 0;
      $('.col-3--item .logan', this).each(function(){
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      });    
      $('.col-3--item .logan',this).height(highestBox);        
    }); 

});
