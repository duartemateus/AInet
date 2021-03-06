$(function () {
    'use strict';
    var sticky_navigation_offset_top = $('#secondnavbar').offset().top;
    var sticky_navigation = function () {
        var scroll_top = $(window).scrollTop();
        if (scroll_top > sticky_navigation_offset_top) {
            $('#secondnavbar').css({
                'position': 'fixed',
                'top': 0,
                'left': 0,
                'opacity': 0.9
            });
            $('#top').css({
                'z-index': '1000',
                'margin-bottom': '40px'
            })
        } else {
            $('#secondnavbar').css({
                'position': 'relative',
                'opacity': 1
            });
            $('#top').css({
                'z-index': '10',
                'margin-bottom': '0px'
            })
        }
    };
    sticky_navigation();
    $(window).scroll(function () {
        sticky_navigation();
    });
});