$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll > 100) {
    $(".navu").css("background", "#ffff");
    $(".navuclr").css("color", "#000");
    $(".navuhgy").css("padding", "0px 0px");
  } else {
    $(".navu").css("background", "none");
    $(".navuclr").css("color", "#000");
    $(".navuhgy").css("padding", "10px 4px");
  }
});
