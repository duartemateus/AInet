$(function () {
    "use strict";
    /**************** Presentation **************************************/
    $('.slider.presentation').cycle({
        fx: 'fade',
        speed: 1000,
        timeout: 5000,
        prev: '.slider-wrapper.presentation .slider-content-previous',
        next: '.slider-wrapper.presentation .slider-content-next',
        before: function (currSlideElement, nextSlideElement) {
            var content = $('.item-content', $(nextSlideElement)).html();
            $('.slider-wrapper.presentation .slider-content').stop(true, true).animate({
                top: '-110px'
            }, 400, function () {
                $('.slider-wrapper.presentation .slider-content .item-content').html(content);
            });
            $('.slider-wrapper.presentation .slider-content').delay(100).animate({
                top: '0'
            }, 400);
        }
    });

    $('.slider-wrapper.presentation').mouseenter(function () {
        $('.slider.presentation').cycle('pause');
        $('.slider-wrapper.presentation .slider-content-previous').stop(true, true).animate({
            left: '20px'
        }, 200);
        $('.slider-wrapper.presentation .slider-content-next').stop(true, true).animate({
            right: '20px'
        }, 200);
    }).mouseleave(function () {
        $('.slider.presentation').cycle('resume');
        $('.slider-wrapper.presentation .slider-content-previous').stop(true, true).animate({
            left: '-80px'
        }, 200);
        $('.slider-wrapper.presentation .slider-content-next').stop(true, true).animate({
            right: '-80px'
        }, 200);
    });

    /**************** Publication **************************************/
    $('.slider.publication').cycle({
        fx: 'fade',
        speed: 1000,
        timeout: 5000,
        prev: '.slider-wrapper.publication .slider-content-previous',
        next: '.slider-wrapper.publication .slider-content-next',
        before: function (currSlideElement, nextSlideElement) {
            var content = $('.item-content', $(nextSlideElement)).html();
            $('.slider-wrapper.publication .slider-content *').stop(true, true).animate({
                opacity: '0'
            }, 400, function () {
                $('.slider-wrapper.publication .slider-content .item-content').html(content);
            });
            $('.slider-wrapper.publication .slider-content *').delay(0).animate({
                opacity: '1'
            }, 400);
        }
    });

    $('.slider-wrapper.publication').mouseenter(function () {
        $('.slider.publication').cycle('pause');
        $('.slider-wrapper.publication .slider-content-previous').stop(true, true).animate({
            left: '20px'
        }, 200);
        $('.slider-wrapper.publication .slider-content-next').stop(true, true).animate({
            right: '20px'
        }, 200);
    }).mouseleave(function () {
        $('.slider.publication').cycle('resume');
        $('.slider-wrapper.publication .slider-content-previous').stop(true, true).animate({
            left: '-80px'
        }, 200);
        $('.slider-wrapper.publication .slider-content-next').stop(true, true).animate({
            right: '-80px'
        }, 200);
    });

    /**************** News **************************************/
    $('.slider.news').cycle({
        fx: 'fade',
        speed: 1000,
        timeout: 15000,
        prev: '.slider-wrapper.news .slider-content-previous',
        next: '.slider-wrapper.news .slider-content-next',
        pager: '.slider-paging',
        pagerAnchorBuilder: function (index) {
            return '<a href="#"><p>' + $('.slider.news .slider-item .item-content h4 a')[index].text + '</p></a>';
        },
        before: function (currSlideElement, nextSlideElement) {
            var content = $('.item-content', $(nextSlideElement)).html();
            $('.slider-wrapper.news .slider-content *').stop(true, true).animate({
                opacity: '0'
            }, 400, function () {
                $('.slider-wrapper.news .slider-content .item-content').html(content);
            });
            $('.slider-wrapper.news .slider-content *').delay(0).animate({
                opacity: '1'
            }, 400);
        }
    });

    $('.slider-wrapper.news').mouseenter(function () {
        $('.slider.news').cycle('pause');
        $('.slider-wrapper.news .slider-content-previous').stop(true, true).animate({
            left: '20px'
        }, 200);
        $('.slider-wrapper.news .slider-content-next').stop(true, true).animate({
            right: '20px'
        }, 200);
    }).mouseleave(function () {
        $('.slider.news').cycle('resume');
        $('.slider-wrapper.news .slider-content-previous').stop(true, true).animate({
            left: '-80px'
        }, 200);
        $('.slider-wrapper.news .slider-content-next').stop(true, true).animate({
            right: '-80px'
        }, 200);
    });
});