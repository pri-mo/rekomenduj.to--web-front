
/**
* main.js
*/


//// Do stuff after page load
$(function() {
  $('body').removeClass('preload');

  $('a[href]:not(.roll-out__trigger):not(.no-ripple)').click( function(e) {
    var linkTarget = $(this).attr('href');

    if ( linkTarget !== "#" ) {
      e.preventDefault();
      setTimeout( function() {
        window.location.href = linkTarget;
      }, 250);
    }
  });

  $('.social-reach__add-channel').on('click', function() {
    $('body').modal({
      header: 'Udało się!',
      message: 'Dodałeś społeczność',
      buttons: 'ok'
    });
  });

  // In case you want to preload images
  $('img').each(function() {
    $(this).addClass('preload');
    $(this).on('load', function() {
      $(this).removeClass('preload');
    });
  });

  // Prevent transitions on load.
  $('body').removeClass('preload');

  // Set classes to cover images based on dimensions of parent and image.
  $('img.image--cover').each(function() {
    $(this).parent().addClass('cover__container');

    // Work when image is loaded
    $(this).on('load', function() {
      $(this).updCovers();
    }).each(function() {
      // If chached, say it's loaded
      if(this.complete) $(this).load();
      // if(this.error imgBroken(this);
    });
  });
  // Do the same on window resize
  $(window).resize(function() {
    $('img.image--cover').each(function() { $(this).updCovers(); });
  });


  /*
  * Google Material design riples...
  */
  var ink, d, x, y;

  //// ... on links and buttons
  $('a:not(.no-ripple), button:not(.no-ripple), .ripple').click(function(e){
    if($(this).find('.ink').length === 0){
      $(this).prepend('<span class="ink"></span>');
    }

    ink = $(this).find('.ink');
    ink.removeClass('animate');

    if(!ink.height() && !ink.width()){
      d = Math.max($(this).outerWidth(), $(this).outerHeight());
      ink.css({height: d, width: d});
    }

    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;

    ink.css({top: y+'px', left: x+'px'}).addClass('animate');
    return false;
  });

  //// ... on inputs
  $('.input').click(function(e){
    if($(this).find('.input__field').length === 0){
      $(this).prepend('<div class="input__field"></div>');
    }

    if($(this).find('.input__field .ink').length === 0){
      $(this).find('.input__field').prepend('<span class="ink"></span>');
    }

    ink = $(this).find('.input__field .ink');
    ink.removeClass('animate');

    if(!ink.height() && !ink.width()){
      d = Math.max($(this).outerWidth(), $(this).outerHeight());
      ink.css({height: d, width: d});
    }

    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;

    ink.css({top: y+'px', left: x+'px'}).addClass('animate');
  });


  //// Facilitate appearance change on focus when input used
  $(document).on('focus change', 'input, select, textarea', function(e) {
    var label = $(this).next('label');
    // console.log(e.type);

    $(this).on('focusout', function() {
      $(this).updLabels();
    });
    // Change when on focus
    if ($(this).hasClass('input--used') ) {
      $(this).removeClass('input--used');
    }
  });

  // Correct input styles on page enter — in case values passing/set
  $(document).on('change ready', function() {
    $('input, select, textarea').updLabels();
  });

  /*
  —— NOTE Just for beta testing localstorage data
  */
  // save data on change
  $(document).on('change', 'input, select, textarea', function() {
    var inputName = this.name;
    var inputVal = this.value;
    localStorage.setItem(inputName, inputVal);
    console.log(localStorage);
  });

  // fill data if exists
  if (localStorage.length > 0) {
    $('input, select, textarea').each(function() {
      var inputName = this.name;
      $(this).val(localStorage.getItem(inputName)).addClass('input--used');

    });

    $('#welcomeName').html(localStorage.getItem('user-name'));
  }


  // Autogrow init
  $('textarea').autogrow({
    horizontal: false,
    vertical: true,
    flickering: false
  });


  //// Show password plugin
  $('#showPass').on('click', function () {
    $(this).toggleClass('showing');
    if ( $('#password').is('[type=password]') ) {
      $('#password').attr('type', 'text').focus();
    } else {
      $('#password').attr('type', 'password').focus();
    }
  });



  //// The rollout
  $('.roll-out__trigger').on('click', function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('roll-out--opened');
  });


  //// On Logo click
  $('#triggerLogo').on('click', function(e) {
    e.preventDefault();
    window.location = '/';
  });


  // Media Query Specific code
  // Event handler
  // TODO Should work on touch too... or rather on touch...
  if (matchMedia) {
    var mq = window.matchMedia('(min-width: 768px)');
    mq.addListener(WidthChange);
    WidthChange(mq);
  }

  // Media query change
  function WidthChange(mq) {
    if (mq.matches) {
      // Window width is at least 768px
      $('body').addClass('device--desktop');
      $('body').removeClass('device--mobile');
    } else {
      $('body').removeClass('device--desktop');
      $('body').addClass('device--mobile');
    }
  }

  $(document).on('ready', function(e) {
    if ($('#kidsNumber').length)
    updKids();
  });

  // Adding and deleting kids
  $(document).on('change', '#kidsNumber', function() {
    updKids();
  });

});
