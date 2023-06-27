$(document).ready(function () {
  // Header Dropdown Menu
  $(".navbar-navigation-links > ul > li > a").click(function (e) {
    var currentUl = $(this).parent().children("ul");
    var status = null;
    e.preventDefault();
    if ($(currentUl).is(":visible")) {
      status = true;
    } else {
      status = false;
    }

    $(".navbar-navigation-links > ul > li > ul").slideUp();

    if (status) {
      $(currentUl).slideUp();
    } else {
      $(currentUl).slideDown();
    }
  });

  // Scroll Header System
  $(window).scroll(function () {
    var header_offset = $(window).scrollTop();

    console.log(header_offset);

    if (header_offset > 0) {
      // Add Class
      $("#navbar").addClass("navbar-withe");
    } else {
      // Remove Class
      $("#navbar").removeClass("navbar-withe");
    }
  });

  $(".navbar-menu-mobile").click(function name(params) {
    $(".navbar-navigation-elements").slideToggle(400);
    $("#navbar").toggleClass("navbar-withe");
  });
});
