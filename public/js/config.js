$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('#back-top').fadeIn();
  } else {
      $('#back-top').fadeOut();
  }
});

$("#back-top").click(function () {
  $("html, body").animate({scrollTop: 0}, 1000);
});
