// $('.page-wrapper').css({'padding-top': $('.page-header').height()});

$(window).scroll(function () {
   if ($(window).scrollTop() >= 100) {
      $('body').addClass('scrollTop');
   }
   if ($(window).scrollTop() <= 95) {
      $('body').removeClass('scrollTop');
   }
});

$('.form-control').hover(function() {
    $(this).select();
});

$('.navbar-nav .nav-link').click(function() {
    $('#navside').offcanvas('hide');
});
