(function ($) {
  $(document).ready(function () {
    // START ALL

    // start header fixed
    $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      if (scroll > 80) {
        $('header').addClass('fixed animate__animated animate__slideInDown');
      } else {
        $('header').removeClass('fixed animate__animated animate__slideInDown');
      }
    });
    // end header fixed

    // start top-nav
    $('.header__desk-sub-wrap').prev().append("<span class='nav-arr'>");
    $('.header__desk li').mouseover(function () {
      $(this).find('a').find('span').addClass('nav-arr_down');
      $(this).find('.header__desk-sub-wrap').css({ display: 'block' }).addClass('animate__animated animate__slideInDown');
    });
    $('.header__desk li').mouseleave(function () {
      $(this).find('a').find('span').removeClass('nav-arr_down');
      $(this).find('.header__desk-sub-wrap').css({ display: 'none' });
    });
    $('.header__desk-sub-wrap').mouseleave(function () {
      $(this).find('a').find('span').removeClass('nav-arr_down');
      $(this).css({ display: 'none' });
    });
    // end top-nav

    // start easy scroll on Contact Us
    $('.feedback-form-link').on('click', function (e) {
      $('html,body')
        .stop()
        .animate({ scrollTop: $('#feedback-form').offset().top - 190 }, 700);
      e.preventDefault();
    });
    // end easy scroll on Contact Us

    // start WOW
    var wow = new WOW({
      offset: 50,
    });
    wow.init();
    // end WOW

    // start job-preview hover
    $('.job-preview .job-preview__item').mouseover(function () {
      $(this).addClass('job-preview__item__active');
    });
    $('.job-preview .job-preview__item').mouseleave(function () {
      $(this).removeClass('job-preview__item__active');
    });
    // end job-preview hover
    // END ALL
  });
})(jQuery);
