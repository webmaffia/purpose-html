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
        var $pauseWrap = $hero.find('.hero__pause-wrap');
        var activeVideo = null;

        $playWrap.on('click', function () {
            var video = getActiveHeroVideo();
            if (!video) return;

            activeVideo = video;
            $hero.addClass('is-playing');
            $pauseWrap.removeAttr('hidden');
            video.play();
        });

        $pauseWrap.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            // Pause the video we started, and both videos as fallback
            if (activeVideo) {
                activeVideo.pause();
                activeVideo = null;
            }
            $hero.find('.hero__video').each(function () {
                this.pause();
            });
            $hero.removeClass('is-playing');
            $pauseWrap.attr('hidden', true);
        });

        // Optional: pause when video ends (if not loop) or handle visibility
        $hero.find('.hero__video').on('ended', function () {
            activeVideo = null;
            $hero.removeClass('is-playing');
            $pauseWrap.attr('hidden', true);
        });
    });
}.call(window, window.jQuery);