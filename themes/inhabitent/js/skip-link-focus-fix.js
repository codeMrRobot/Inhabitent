/**
 * skip-link-focus-fix.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/_s/pull/136
 */
(function() {
  var isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
    isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
    isIE = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

  if (
    (isWebkit || isOpera || isIE) &&
    document.getElementById &&
    window.addEventListener
  ) {
    window.addEventListener(
      'hashchange',
      function() {
        var id = location.hash.substring(1),
          element;

        if (!/^[A-z0-9_-]+$/.test(id)) {
          return;
        }

        element = document.getElementById(id);

        if (element) {
          if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
            element.tabIndex = -1;
          }

          element.focus();
        }
      },
      false
    );
  }
})();




$(document).ready(function() {
  // expand search bar in navigation
  $('.main-navigation')
    .find('.search-form')
    .hide();

  $('.search-button').on('click', function() {
    $('.main-navigation')
      .find('.search-form')
      .animate({ width: 'toggle' });
    $('.main-navigation')
      .find('.search-field')
      .focus();
  });

  $('.main-navigation')
    .find('.search-form')
    .on('focusout', function() {
      if (
        !$(this)
          .find('.search-field')
          .val()
      ) {
        $('.main-navigation')
          .find('.search-form')
          .animate({ width: 'toggle' });
      }
    });

  var heroHeight = $('.hero-banner').height();
  // add reverse header class to pages with hero image
  // Instead of doing ($('div')) // <--- add a class and target the class the class is (.hero-banner
  if ($('div').hasClass('hero-banner') && $(window).scrollTop() <= heroHeight) {
    $('header').addClass('reverse-header');
  }

  // remove inverse header class on scroll
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= heroHeight) {
      $('header').removeClass('reverse-header');
    } else {
      $('header').addClass('reverse-header');
    }
  });
});
