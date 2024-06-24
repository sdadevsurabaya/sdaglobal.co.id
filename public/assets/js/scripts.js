$(window).scroll(function () {
   if ($(window).scrollTop() > 100) {
      $('body').addClass('scrollTop');
   } else {
      $('body').removeClass('scrollTop');
   }
})
