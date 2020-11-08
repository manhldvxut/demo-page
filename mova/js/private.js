$(document).ready(function(){
	wow = new WOW(
      {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
    )
    wow.init();

    /*click PC submenu*/
    $( ".menu ul li.js-sub-menu" ).click(function(e) {
    	// e.preventDefault();
  		$(this).toggleClass('show');
  	});

    if ($(window).innerWidth() <= 768) {
      $( ".menu > ul > li:nth-child(5)" ).click(function(e) {
        e.preventDefault();
      $(this).removeClass('show');
      $(this).parents().children("i").addClass('active');


    })
  }

	/*sp Menu*/
	$( ".bar" ).click(function() {
		$('.header-menu').toggleClass('active'); 
		/*$('.menu > ul').toggleClass('active');*/
	});
	$( ".menu li i" ).click(function() {
		$(this).parents().children(".menu ul li > .sub-menu").slideToggle(300);
    	$(this).toggleClass("active");
	});

	/*tit h2 run*/
		var text_effect = function() {
	    var offset = $(window).scrollTop() + $(window).height(),
	        $animatables = $('.title h2');
	    if ($animatables.length == 0) {
	        $(window).off('scroll', text_effect);
	    }
	    $animatables.each(function(i) {
	        var $animatable = $(this);
	        if (($animatable.offset().top + $animatable.height() - 20) < offset) {
	            $animatable.removeClass('animatable').addClass('animated');
	        }
	    });

	};
	$(window).on('scroll', text_effect);
	$(window).trigger('scroll'); /*end*/

	/* スクロール */

   /*Min - height box -*/
  $('.ser-list').each(function(){  
      var highestBox = 0;
      $('.ser-inf .desc', this).each(function(){
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      });    
      $('.ser-inf .desc',this).height(highestBox);        
    });

  /*sp bunner*/
  var offs,
      wWindow = $(window).outerWidth();

  $(window).scroll(function() {
    wWindow = $(window).outerWidth();
    offs = $(this).scrollTop();
    if (offs > 1000 && wWindow <= 768) {
        $('.js-bunder').fadeOut();
    } else {
        $('.js-bunder').fadeIn();
    }
  });

  /*changer color text select-option*/
   $("select").change(function(){
    if ($(this).val()=="") $(this).css({color: "#1a1a1a"});
    else $(this).css({color: "#ccc"});
  });

    /*Dropdown Menu*/
    $('.dropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdown .dropdown-menu li').click(function () {
        $(this).parents('.dropdown').find('span').text($(this).text());
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
    });
    /*reset*/
    $( "#reset" ).click(function() {
      document.getElementById('rs-id-01').innerHTML ='都道府県で絞り込む';
      document.getElementById('rs-id-02').innerHTML ='業種で絞り込む';
      document.getElementById('rs-id-03').innerHTML ='ご利用プランで絞り込む';
    });
    
    /*my page sp*/
    $('.toggle-btn').click(function () {
      if ($('body').hasClass('toggle-show')) {
        $('body').removeClass('toggle-show');
        $('.toggle-title .text').text('マイページメニュー');
        $('aside .search-box').slideUp(500);
      } else {
        $('body').addClass('toggle-show');
        $('.toggle-title .text').text('閉じる');
        $('aside .search-box').slideDown(500);
      }
    });
})
