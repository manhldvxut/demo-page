$(document).ready(function(){
  $('.clc-menu').click(function(){
    $('.bar .submenu>ul').toggleClass('active');
    $('.h-menu').toggleClass('active');
  });

  $(".bar ul li i").click(function () {
    $(this).parents().children(".bar ul li > ul").slideToggle(100);
    $(this).toggleClass("active");
  });
});

$('.slider-for').slick({
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.slider-nav',
    prevArrow: '<button class="prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="next"><i class="fa fa-angle-right"></i></button>',
});
$('.slider-nav').slick({
    autoplay:false,
    arrow:false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ],
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    prevArrow: '', 
    nextArrow: '', 
});


var swiper = new Swiper('.slide-srv', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: false,
    effect: 'coverflow',
    // grabCursor: true,  
    slidesPerView: 5,
    centeredSlides: true,
    mousewheelControl: true,
    loop: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 400,
      modifier: 0,
      slideShadows : true,
    },
    breakpoints: {
    767: {
      spaceBetween: 10,
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: false,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 400,
        modifier: 0,
        slideShadows : true,
      },
    },
    320: {
      spaceBetween: 10,
      slidesPerView: 1,
      spaceBetween: 0,
      centeredSlides: false,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        modifier: 0,
        slideShadows : true,
      },
    }
  }
  });

$('.slide-inter').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1, 
    prevArrow: '<button class="prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="next"><i class="fa fa-angle-right"></i></button>',
    responsive: [
        {
            breakpoint: 1023,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

$('.item select').on('change', function() {
  if ($(this).val()) {
    return $(this).css('color', '#000000');
  } else {
     return $(this).css('color', '#cccccc');
  }
});

new WOW().init();

if($(window).innerWidth() >= 1024){
    $(function(){
      $('.list-blog .col-md-3 .avarta').hover(function() {
        $('.list-blog .col-md-3').addClass('hover');
      }, function() {
        $('.list-blog .col-md-3').removeClass('hover');
      })
    })

    $(function(){
      $('.list-blog .item').hover(function() {
        $(this).next('.list-blog .item').addClass('hide-hv');
      }, function() {
        $(this).next('.list-blog .item').removeClass('hide-hv');
      })
    })

    $(function(){
      $('.list-blog .item:nth-child(4n)').hover(function() {
        $(this).next('.list-blog .item').removeClass('hide-hv');
        $(this).prev('.list-blog .item').addClass('cir-rad');
      }, function() {
        $(this).prev('.list-blog .item').removeClass('cir-rad');
      })
    })

}

$(document).ready(function(){
  $('.list-tab a').click(function(e){
    e.preventDefault();
    var target = $($(this).attr('href'));
    if(target.length){
      var scrollTo = target.offset().top + 10;
      $('body, html').animate({scrollTop: scrollTo+'px'}, 1000);
    }
  });
});


$(window).scroll(function(){
    if ($(window).scrollTop() >= 10) {
        $('.cloud').addClass('animate-cloud');
    }
    else {
        $('.cloud').removeClass('animate-cloud');
    }
});

(function($){
    $(document).ready(function(){
    $('.lightbox').fancybox();
    });
})(jQuery)

jQuery(function($) {
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
  $(window).trigger('scroll');

});

$(window).load(function() {
  $(".bread-top, .avarta-bread, #breadcrumbs .container-fluid, .avarta-rec").addClass('active');
})
