(function ($) {
    /**
     * Navigation
     */
    $(function() {
        $(window).on('scroll', function () {
            $('.g-header').css('left', -$(window).scrollLeft());

            if ($(window).scrollTop() > 50) {
                $('html').addClass('is-fixed');
            } else {
                $('html').removeClass('is-fixed');
            }
        }).trigger('scroll');
    });

    /**
     * Scroll Fire
     */
    $(function () {
        var $fadeIn = $('.u-fade-in');
        new ScrollFire()
            .addTrigger($fadeIn, function ($target) {
                var delay = $target.data('delay');
                if (delay) {
                    delay = delay - 0;
                } else {
                    delay = 0;
                }

                setTimeout(function () {
                    $target.addClass('is-inview');
                }, delay);
            })
            .start();
    });

    /**
     * SP Global Nav
     */
    $(function () {
        var $html = $('html');
        $('.g-header-toggle').on('click', function () {
            $html.toggleClass('is-show-nav');
        });
    });

    /**
     * Background check
     */
    // $(function () {
    //     BackgroundCheck.init({
    //         targets: '.background-check',
    //         images: '.background-target'
    //     });
    // });

    /**
     * Sub page background
     */
    $(function () {
        var $background = $('.g-sub-main-background');
        if (!$background.length) {
            return;
        }

        var width = $background.data('background-width') - 0;
        var height = $background.data('background-height') - 0;
        var rBasePos = height - 556;// 124;
        var $svg = $background.find('.g-sub-main-svg');
        var $mask = $background.find('.g-sub-main-mask');
        var $image = $background.find('.g-sub-main-image');

        // Initialize
        $image.attr('width', width).attr('height', height);

        var render = function () {
            var winWidth = $(window).width();
            var isSP = $(window).width() <= 768;
            var scrollRatio = isSP ? 500 / winWidth : 1;

            // Change SVG Height : for IE11
            var ratio = height/width;
            $svg.height($svg.width() * ratio);

            // Change mask shape
            var scroll = $(window).scrollTop() * scrollRatio;
            var lPos = height - scroll;
            var rPos = rBasePos - scroll;
            var crop = 'M0,0L0,'+(lPos)+'L1400,'+(rPos)+'L1400,0Z';
            $mask.attr('d', crop);

            requestAnimationFrame(render);
        }
        render();
    });
})(jQuery);