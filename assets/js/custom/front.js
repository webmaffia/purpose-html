!function ($) {
    'use strict';

    var MOBILE_BREAK = 414;

    function isMobile() {
        return window.matchMedia('(max-width: ' + MOBILE_BREAK + 'px)').matches;
    }

    function getActiveHeroVideo() {
        var $hero = $('.hero');
        if (!$hero.length) return null;
        return isMobile()
            ? $hero.find('.hero__video--mobile')[0]
            : $hero.find('.hero__video--desktop')[0];
    }

    $(document).ready(function () {
        var $hero = $('.hero');
        var $playWrap = $hero.find('.hero__play-wrap');

        $playWrap.on('click', function () {
            var video = getActiveHeroVideo();
            if (!video) return;

            $hero.addClass('is-playing');
            video.play();
        });

        // Optional: pause when video ends (if not loop) or handle visibility
        $hero.find('.hero__video').on('ended', function () {
            $hero.removeClass('is-playing');
        });
    });
}.call(window, window.jQuery);