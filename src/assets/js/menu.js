$(function() {
  /*
  * Navigation hide/show
  *
  * Original script by Alex Cican
  * http://alexcican.com/post/teehan-lax-navigation/
  */
  var previousScroll = 0, // previous scroll position
  menuOffset = 36, // height of menu (once scroll passed it, menu is hidden)
  hideShowOffset = 10; // scrolling value after which triggers hide/show menu

  // on scroll hide/show menu
  $(window).on('scroll load', function() {

    if (!$('header').hasClass('nav--show-menu')) {

      var currentScroll = $(this).scrollTop(), // gets current scroll position
      scrollDifference = Math.abs(currentScroll - previousScroll); // calculates how fast user is scrolling

      // if scrolled past menu
      if (currentScroll > menuOffset) {

        if (!$('header').hasClass('scrolled')) {
          $('header').addClass('scrolled');
        }

        // if scrolling faster than hideShowOffset hide/show menu
        if (scrollDifference >= hideShowOffset) {
          if (currentScroll > previousScroll) {
            // scrolling down; hide menu
            if (!$('header').hasClass('hidden')) {
              $('header').addClass('hidden');
            }
          } else {
            // scrolling up; show menu
            if ($('header').hasClass('hidden')) {
              $('header').removeClass('hidden');
            }
          }
        }
      } else {
        $('header').removeClass('scrolled');
        // only remove “detached” class if user is at the top of document (menu jump fix)
        if (currentScroll <= 0){
          $('header').removeClass('hidden');
        }
      }

      // if user is at the bottom of document show menu
      if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        $('body:not(.template--poll) header').removeClass('hidden');
      }

      // replace previous scroll position with new one
      previousScroll = currentScroll;
    }
  });

  // shows/hides navigation’s popover if class 'expanded'
  $('#triggerMenu').on('click touchstart', function(e) {
    showHideNav();
    e.preventDefault();
  });

  // clicking anywhere inside navigation or heading won’t close navigation’s popover
  $('header nav').on('click touchstart', function(e){
    e.stopPropagation();
  });

  // clicking on secondary nav shows primary manu
  $('header .nav--secondary').on('click touchstart', function(e){
    if ($('header').hasClass('hidden')) {
      $('header').removeClass('hidden');
      e.preventDefault();
    }
  });

  $('main').on('click touchstart', function(e) {
    if ($('header').hasClass('nav--show-menu')) {
      hideNav();
      e.preventDefault();
    }
  });

  // checks if navigation’s popover is shown
  function showHideNav() {
    if ($('header').hasClass('nav--show-menu')) {
      hideNav();
    } else {
      showNav();
    }
  }

  // shows the navigation’s drawer
  function showNav() {
    $('header').removeClass('hidden').addClass('nav--show-menu');
    $('body, html').addClass('content--to-side');
    window.setTimeout(function(){$('body').addClass('page--noScroll');}, 10); // Firefox hack. Hides scrollbar as soon as menu animation is done
    $('header nav a').attr('tabindex', ''); // links inside navigation should be TAB selectable
  }


  // hides the navigation’s drawer
  function hideNav() {
    $('body, html').removeClass('content--to-side');
    window.setTimeout(function(){$('body').removeClass('page--noScroll');}, 10); // allow animations to start before removing class (Firefox)
    $('header').removeClass('nav--show-menu');
    $('header nav a').attr('tabindex', '-1'); // links inside hidden navigation should not be TAB selectable
    $('#triggerMenu').blur(); // deselect icon when navigation is hidden
  }

  // keyboard shortcuts
  $('body').keydown(function(e) {
    // menu accessible via TAB as well
    if ($('#triggerMenu').is(':focus')) {

      // if ENTER/SPACE show/hide menu
      if (e.keyCode === 13 || e.keyCode === 32) {
        showHideNav();
        e.preventDefault();
      }
    }
    // if ESC show/hide menu
    if (e.keyCode === 27) {
      showHideNav();
      e.preventDefault();
    }

  });
});
