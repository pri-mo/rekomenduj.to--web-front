$(function() {
  /*
  * Navigation hide/show
  *
  * Original script by Alex Cican
  * http://alexcican.com/post/teehan-lax-navigation/
  */
  var previousScroll = 0; // previous scroll position
  var menuOffset = 36; // height of menu (once scroll passed it, menu is hidden)
  var hideShowOffset = 10; // scrolling value after which triggers hide/show menu
  var $head = document.getElementsByTagName('header')[0];

  // on scroll hide/show menu
  $(window).on('scroll load', function() {

    if (!$head.classList.contains('nav--show-menu')) {

      var currentScroll = $(this).scrollTop(), // gets current scroll position
      scrollDifference = Math.abs(currentScroll - previousScroll); // calculates how fast user is scrolling

      // console.log($head.classList + ":  " + currentScroll + " / " + scrollDifference + " / " + previousScroll);

      // if scrolled past menu
      if (currentScroll > menuOffset) {

        if (!$head.classList.contains('scrolled')) {
          $head.classList.add('scrolled');
        }

        // if scrolling faster than hideShowOffset hide/show menu
        if (scrollDifference >= hideShowOffset) {
          if (currentScroll > previousScroll) {
            // scrolling down; hide menu
            // console.log('Down');
            // if (!$head.classList.contains('hidden')) {
              $head.classList.add('hidden');
            // }
          } else {
            // scrolling up; show menu
            // console.log('Up');
            // if ($head.classList.contains('hidden')) {
              $head.classList.remove('hidden');
            // }
          }
        }
      } else {
        $head.classList.remove('scrolled');
        // only remove “detached” class if user is at the top of document (menu jump fix)
        if (currentScroll <= 0){
          // console.log('Reset');
          $head.classList.remove('hidden');
        }
      }

      // if user is at the bottom of document show menu
      // if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
      //   console.log('Floor')
      //   $('body:not(.template--poll) header').removeClass('hidden');
      // }

      previousScroll = currentScroll; // replace previous scroll position with new one
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
    if ($head.classList.contains('hidden')) {
      $head.classList.remove('hidden');
      e.preventDefault();
    }
  });

  $('main').on('click touchstart', function(e) {
    if ($head.classList.contains('nav--show-menu')) {
      hideNav();
      e.preventDefault();
    }
  });

  // checks if navigation’s popover is shown
  function showHideNav() {
    if ($head.classList.contains('nav--show-menu')) {
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
