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
  });


  // Animation
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

  /*Min - height box - bennifix*/
  $('.benefit-row').each(function(){  
      var highestBox = 0;
      $('.col-4 .desc', this).each(function(){
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      });    
      $('.col-4 .desc',this).height(highestBox);        
    });

  /* スクロール */
  $('a[href^="#"]').on('click', function(e){
    e.preventDefault();
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    if(window.innerWidth >= 901){
        var position = target.offset().top -50;
        $('body,html').animate({scrollTop:position}, speed, 'swing');            
    }else{
        var position = target.offset().top - 70;
        $('body,html').animate({scrollTop:position}, speed, 'swing');  
    }
  })

  /*end*/

});

