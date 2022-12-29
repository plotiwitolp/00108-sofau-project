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
      $(this).find('.header__desk-sub-wrap').css({ display: 'block' }).addClass('animate__animated animate__fadeIn');
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
        .animate({ scrollTop: $('#feedback-form').offset().top - 100 }, 700);
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
    // -- может быть нужна проверка на наличие на странице эл .job-preview
    $('.job-preview .job-preview__item').mouseover(function () {
      $(this).addClass('job-preview__item__active');
    });
    $('.job-preview .job-preview__item').mouseleave(function () {
      $(this).removeClass('job-preview__item__active');
    });
    // end job-preview hover

    // start временная пагинация для демонстрации
    $('.pagination__page-item a').bind('click.dontClick', function (e) {
      e.preventDefault();
    });
    let $set = $('.pagination__page-item');
    $('.pagination__page-item').on('click', function () {
      $('.pagination__page-item').removeClass('pagination__page-item_active');
      $(this).addClass('pagination__page-item_active');
      let n = $set.index(this);
      console.log($set.length);
      if (n == 0) {
        $('.pagination__prev ').hide();
      } else {
        $('.pagination__prev ').show();
      }
      if (n == $set.length - 1) {
        $('.pagination__next').hide();
      } else {
        $('.pagination__next').show();
      }
    });
    // end временная пагинация для демонстрации

    // start временное переключение по меткам для демонстрации
    /* services & portfolio при переходе по страницам*/
    let link = window.location.href;
    let linkId = link.split('id')[1];
    let linkIdEl = $('.services .tag__item')[+linkId];
    let linkIdElPrtf = $('.portfolio .tag__item')[+linkId];
    $(linkIdEl).addClass('hover');
    $(linkIdElPrtf).addClass('hover');
    /* portfolio & services  при клике на самой странийце по меткам*/
    $('.portfolio .tag__item').on('click', function () {
      $('.portfolio .tag__item').removeClass('hover');
      $(this).addClass('hover');
    });
    $('.header__desk-sub_test a').on('click', function () {
      let id = $(this).attr('href').split('id')[1];
      let elTag = $('.tag .tag__item')[id];
      $('.tag .tag__item').removeClass('hover');
      $(elTag).addClass('hover');
    });
    // end временное переключение по меткам для демонстрации

    // start верхнее меню для моб версии
    $('.nav-burger').on('click', function () {
      $('.header-right-bottom').toggle();
      $('.header__mob').toggle();
      $('.header__socials').toggle();
    });
    $('.header__mob-sub').prev().append("<span class='nav-arr'>");

    $('.header__mob a').on('click', function () {
      if ($(this).next().css('display') == 'none') {
        $(this).find('span').addClass('nav-arr_down');
        $(this).next().css({ display: 'block' }).addClass('animate__animated animate__fadeIn');
      } else {
        $(this).find('span').removeClass('nav-arr_down');
        $(this).next().css({ display: 'none' });
      }
    });
    $('.nav-burger').on('click', function () {
      $(this).toggleClass('nav-burger_close', '');
    });
    // end верхнее меню для моб версии

    // start закрытие мобильного меню при клике на Contact Us
    $('.feedback-form-link').on('click', function () {
      let windowsize = $(window).width();
      if (windowsize < 1325) {
        $('.nav-burger').removeClass('nav-burger_close');
        $('.header-right-bottom').hide();
        $('.header__mob').hide();
        $('.header__socials').hide();
      }
    });
    // end закрытие мобильного меню при клике на Contact Us

    // start blockInspector
    function blockInspector() {
      document.onkeydown = function (e) {
        if (event.keyCode == 123) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
          return false;
        }
      };
    }
    // blockInspector();
    // end blockInspector

    // END ALL
  });
})(jQuery);
