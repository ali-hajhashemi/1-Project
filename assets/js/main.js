$(document).ready(function () {
    // Header Dropdown Menu
    $('.navbar-navigation-links > ul > li.menu-item-has-children > a').click(
        function (e) {
            e.preventDefault();
            var currentUl = $(this).parent().children('ul');
            var status = null;
            if ($(currentUl).is(':visible')) {
                status = true;
            } else {
                status = false;
            }

            $('.navbar-navigation-links > ul > li > ul').slideUp();

            if (status) {
                $(currentUl).slideUp();
            } else {
                $(currentUl).slideDown();
            }
        }
    );

    $('.navbar-navigation-links ul ul .menu-item-has-children > a').click(
        function (e) {
            e.preventDefault();
            var currentUl = $(this).parent().children('ul');
            $('.menu-item-has-children > ul').slideToggle();
            var status = null;
            if ($(currentUl).is(':visible')) {
                status = true;
            } else {
                status = false;
            }
            if (status) {
                $(currentUl).slideUp();
            } else {
                $(currentUl).slideDown();
            }
        }
    );

    scroll_load();

    // Scroll Header System
    $(window).scroll(function () {
        scroll_load();
    });

    $('.navbar-menu-mobile').click(function name(params) {
        $('.navbar-navigation-elements').slideToggle(400);
        $('.navbar-menu-mobile').toggleClass('active');
    });

    /* Show Case Slide Changer
  =================================================================== */

    // Variables
    var showcase_slide = $('.showcase-slide');
    var slide_changer_left = $('.showcase-slide-changer-left a');
    var slide_changer_right = $('.showcase-slide-changer-right a');
    var i = 0;

    $(showcase_slide).hide();
    $(showcase_slide[0]).show();

    // Left Side Click
    $(slide_changer_right).click(function (e) {
        e.preventDefault();
        $(showcase_slide).hide();
        i++;
        if (i >= showcase_slide.length) {
            i = 0;
        }
        $(showcase_slide[i]).fadeToggle();
    });

    $(slide_changer_left).click(function (e) {
        e.preventDefault();
        $(showcase_slide).hide();
        i--;
        if (i < 0) {
            i = showcase_slide.length - 1;
        }
        $(showcase_slide[i]).fadeToggle();
    });
});

/* Functions
====================================================================== */

// Scroll Refresh Load
function scroll_load() {
    var header_offset = $(window).scrollTop();

    if (header_offset > 0) {
        // Add Class
        $('#navbar').addClass('navbar-withe');
    } else {
        // Remove Class
        $('#navbar').removeClass('navbar-withe');
    }
}
