$(document).ready(function () {
  $(".navbar-navigation-links ul li a").click(function (e) {
    e.preventDefault();

    var currentUl = $(this).parent().find("ul");
    var status = null;

    if ($(currentUl).is(":visible")) {
      status = true;
    } else {
      status = false;
    }

    $(".navbar-navigation-links ul li > ul").hide();

    if (status) {
      $(currentUl).hide();
    } else {
      $(currentUl).show();
    }
  });
});
