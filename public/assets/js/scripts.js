$(window).scroll(function () {
   if ($(window).scrollTop() >= 200) {
      $('body').addClass('scrollTop');
   }
   if ($(window).scrollTop() <= 199) {
      $('body').removeClass('scrollTop');
   }
})
