(function ( $ ) {

  $.fn.modal = function( options ) {

    // This is the easiest way to have default options.
    var settings = $.extend({
      // These are the defaults.
      header: '',
      message: '',
      buttons: 'close',
      lang: 'pl'
    }, options),
    msg, head, interaction;

    if (settings.message === '') {
      msg = '';
    } else {
      msg = '<p class="modal__msg">' + settings.message + '</p>';
    }

    if (settings.header === '') {
      head = '';
    } else {
      head = '<h2 class="modal__head">' + settings.header + '</h2>';
    }

    if (settings.buttons === 'close') {
      interaction = '</div><div class="modal__close-button" id="modal__close" data-icon="z"></div>';
    } else if (settings.buttons === 'ok') {
      interaction = '<a href="#" onclick="preventDefault" class="button" id="modal__close">Rozumiem</a></div>';
    }

    var $modal = $('<div>', {
      id: 'modal',
      class: 'modal__overlay',
      html: '<div class="modal__body">' + head + '' + msg + interaction
    });

    $(document).on('click touchstart', function(event) {
      if (event.target.id == 'modal__close') {
        $('#modal').fadeOut(300, function() { $(this).remove(); });
      }
      return;
    });

    // Show modal as setup
    return this.append($modal);

  };

}( jQuery ));
;

/**
* functions.js
*/

function flipOver(item) {
  var el = typeof item === 'object' ? item : document.getElementById(item);
  el.classList.toggle('hover');
}

// Broken images
function imgBroken(image) {
  // image.onerror = "";
  var randNum = Math.random()*16777215;
  var randHex = '#' + Math.floor(randNum).toString(16);
  var txtCol = (randNum > 11250603) ? '#000' : '#fff';
  $(image).parent()
          .removeClass('cover__container').attr('data-error', 'Image was broken. I deleted it...')
          .css({'backgroundColor': randHex, 'color': txtCol});
  image.remove();
  return true;
}

// Update kids
function updKids() {
  var $kNum = document.getElementById('kidsNumber');
  var kids = $kNum.value;
  var nowKids = $('#kidsInputs .grid__container').length;
  var r = -1*(nowKids-kids);
  var n = 0;
  var today = new Date();
  var dd = today.getDate();
  var m = today.getMonth()+1; //January is 0!
  var mm = (m <= 9) ? '0' + m : m;
  var yyyy = today.getFullYear();

  if(kids === 0) {
    $('#kidsInputs .grid__container').remove();
  } else {
    if(kids > nowKids) {
      for(i = 0; i < (kids-nowKids); i++) {
        n = 1 + nowKids + i;
        $('#kidsInputs').append('<div class="grid__container grid--gutter" data-row="'+ n +'">' +
          '  <div class="grid__item grid__item--1of2">' +
          '    <div class="input input--date input--show-label">' +
          '      <input tabindex' +
          '      name="user-baby' + n + '-bday" id="user-baby' + n + '-bday" type="date" max="' + yyyy + '-' + mm + '-' + dd + '"' +
          '      autocomplete="baby' + n + '-bday"' +
          '      required' +
          '      spellcheck="true"' +
          '      placeholder="Podaj datę">' +
          '      <label for="user-baby' + n + '-bday"' +
          '      data-focused="' + n + '. Data urodzenia"' +
          '      data-original="Podaj datę urodzenia"' +
          '      data-invalid="To pole jest wymagane."></label>' +
          '    </div>' +
          '  </div>' +
          '  <div class="grid__item grid__item--1of2">' +
          '    <div class="input input--select input--show-label">' +
          '      <select name="user-baby' + n + '-gender" id="user-baby' + n + '-gender" required>' +
          '        <option value="" selected disabled>Podaj płeć</option>' +
          '        <option value="K">Dziewczynka</option>' +
          '        <option value="M">Chłopiec</option>' +
          '      </select>' +
          '      <label for="user-baby' + n + '-gender"' +
          '      data-focused="Płeć dziecka"' +
          '      data-original="Podaj płeć dziecka"' +
          '      data-invalid="To pole jest obowiązkowe"></label>' +
          '    </div>' +
          '  </div>' +
          '</div>');
      }
      $('#kidsInputs input, #kidsInputs select').each( function() {
        var inputName = this.name;
        $(this).val( localStorage.getItem(inputName) ).updLabels();
      });
    } else {
      r = -1*(nowKids-kids);
      $('#kidsInputs .grid__container').slice(r).remove();
    }
  }
}

// Update pick answers
function updPicks() {
  $('.answer--pick > input').each(function() {
    var ischecked = $(this).is(':checked'),
    isdisabled = $(this).prop('disabled');

    if (ischecked) {
      $(this).parent().addClass('picked');
      $(this).parent().find('.input > input').focus();
    } else {
      $(this).parent().removeClass('picked');
      $(this).parent().find('.input > input').off('focus');
    }

    if (isdisabled) {
      $(this).parent().addClass('disabled');
    } else {
      $(this).parent().removeClass('disabled');
    }
  });
}

// Extend jQuery
(function( $ ) {
  $.fn.extend({

    // Update input labels
    updLabels: function () {
      $(this).each(function() {
        var label = $(this).next('label');
        var value = this.value;

        // check if the input has any value
        if ( value ) {

          $(this).addClass('input--used');

          if ( $(this).is(':invalid') ) {
            label.html( label.data('invalid') );
          } else {
            label.html( label.data('focused') );
          }

        } else {

          $(this).removeClass('input--used');
          label.html( label.data('original') );

          if ( $(this).is(':valid') ) {
            $(this).addClass('input--valid');
          }

        }
      });
      return;
    },
    updCovers: function () {
      return this.each(function() {
        var $el = $(this);
        var $parent = $(this).parent();
        var height = this.height;
        var width = this.width;
        var widthRatio = $parent.width / width;
        var imgRatio = height / width;
        var parRatio = $parent.height() / $parent.width();
        var compareRatios = imgRatio*parRatio;
        var ratioDifference = imgRatio-parRatio;

        if ( imgRatio >= parRatio ) {
          if ( compareRatios < imgRatio && compareRatios <= parRatio && ratioDifference < 0.164 && ratioDifference > 0 ){
            if ( !$el.hasClass('cover-height') ) $el.removeClass('cover--width').addClass('cover--height');
          } else {
            if ( !$el.hasClass('cover-width') ) $el.removeClass('cover--height').addClass('cover--width');
          }
        } else {
          if ( !$el.hasClass('cover-height') ) $el.removeClass('cover--width').addClass('cover--height');
        }
        // console.log($(this).parent().attr('data-index') + ': widthRatio: ' + widthRatio + '; ' + parRatio + ' / ' + imgRatio + '\n   (diff:' + ratioDifference + ') (comp:' + compareRatios + ')');
      });
    }

  });
})( jQuery );
;

/**
* main.js
*/

var isTouchDevice = 'ontouchstart' in document.documentElement;
var body = document.getElementsByTagName('body')[0];

if (isTouchDevice) {
  body.classList.add('device--touch');
} else {
  body.classList.add('device--no-touch');
}

//// Do stuff after page load
$(function() {

  $('body').removeClass('preload');

  $('a[href]:not(.roll-out__trigger):not(.no-ripple)').click( function(e) {
    var linkTarget = $(this).attr('href');

    if ( linkTarget !== '#' ) {
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
      $(this).append('<span class="ink"></span>');
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
  });

  //// ... on inputs
  $('.input').click(function(e){
    if($(this).find('.input__field').length === 0){
      $(this).append('<div class="input__field"></div>');
    }

    if($(this).find('.input__field .ink').length === 0){
      $(this).find('.input__field').append('<span class="ink"></span>');
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
  $(document).on('focus change paste propertychange', 'input, select, textarea', function(e) {
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
  $(window).on('change pageshow', function(e) {
    $('input, select, textarea').updLabels();
  });

  /*
  —— NOTE Just for beta testing localstorage data
  */
  // save data on change
  $(document).on('change', 'input:not([type=file]), select, textarea', function() {
    var inputName = this.name;
    var inputVal = this.value;
    localStorage.setItem(inputName, inputVal);
    // console.log(localStorage);
  });

  // fill data if exists
  if (localStorage.length > 0) {
    $('input:not([type=file]), select, textarea').each(function() {
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
    return false;
  });



  //// The rollout
  $('.roll-out__trigger').on('click', function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('roll-out--opened');
    return false;
  });


  //// On Logo click
  $('#triggerLogo').on('click', function(e) {
    e.preventDefault();
    window.location = '/';
    return false;
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
    if ($('#kidsNumber').length) updKids();
  });

  // Adding and deleting kids
  $(document).on('change', '#kidsNumber', function() {
    updKids();
  });

  // Some input masking
  // NOTE Disabled Formater for the time being as it disabled localStorage saveing on change
  // new Formatter(document.getElementById('user-phone'), {
  //   'pattern': '+48{{999999999}}',
  //   'persistent': false
  // });

});
;
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
;
/**
* polls.js
*/



//// Do stuff after poll pages load
$(function() {

  // Highlight the selected option
  $(document).on('change propertychange', '.answer--pick > input', function(e) {

    var max = $('.poll__answers').data('maxPick');
    console.log(max);
    if ( $(':checked').length == max ) {
        $('.answer--pick > input').prop('disabled', 'disabled');
        $(':checked').removeAttr('disabled');
    } else {
         $('.answer--pick > input').removeAttr('disabled');
    }

    updPicks();

  }).change();



  // Gdy podam nową wartość w polu tekstowym niech Checkbox się zaznacza
  $('.answer--input input[type=text], .answer--input input[type=number]').on('propertychange change click keyup input paste', function() {
    var inputVal = this.value;
    // console.log(inputVal);
    if (inputVal === '' || inputVal == '0' || inputVal === null) {
      // console.log('pusto');
      $(this).parent().siblings('input[type=checkbox], input[type=radio]').removeAttr('checked');
      updPicks();
    } else {
      $(this).parent().siblings('input[type=checkbox], input[type=radio]').prop('checked', true);
      updPicks();
    }
  });



  //// The number input
  $('.input--number').each(function() {
    var plus = $(this).find('.number__more');
    var minus = $(this).find('.number__less');
    var numberInput = $(this).find('input[type=number], input[type=tel]');
    var n = Number(numberInput.val());
    var min = numberInput.attr('min');
    var max = numberInput.attr('max');
    var step = (numberInput.attr('step')) ? Number(numberInput.attr('step')) : 1;
    var suffix = $(this).find('.number__suffix');
    var suffixData = suffix.data();
    var burst;
    var burstDelay;

    // [i] Init suffix state
    if ( Math.abs(n) >= 5 ) {
      suffix.text(suffixData.suffixFivemore);
    } else if ( Math.abs(n) >= 2 && Math.abs(n) <= 4 ) {
      suffix.text(suffixData.suffixMaxfive);
    } else if ( Math.abs(n) == 1 ) {
      suffix.text(suffixData.suffixSingle);
    } else {
      suffix.text(suffixData.suffixFivemore);
    }

    // [i] Roller controls
    plus.on('touchstart mousedown', function(e) {
      numberInput.addClass('input--used');
      n = Number(numberInput.val());
      if ( n < max || !max ) {
        n = n + step;
        numberInput.val( n ).change(); // just one value change on click
        e.preventDefault();

        burstDelay = setTimeout( function() {
          burst = setInterval(function() { // burst trigger on mouse down
            if ( n < max || !max ) {
              n = n + step;
              numberInput.val( n ).change();
            } else {
              n = max;
              numberInput.val( n ).change();
            }
          }, 100);
        }, 1000); // pause burst for 1sec before start
      } else {
        n = max;
        numberInput.val( n ).change();
      }
    });

    minus.on('touchstart mousedown', function(e) {
      n = Number(numberInput.val());
      if ( n > min || !min ) {
        n = n - step;
        numberInput.val( n ).change(); // just one value change on click
        e.preventDefault();

        burstDelay = setTimeout( function() {
          burst = setInterval(function() { // burst trigger on mouse down
            if ( n > min || !min ) {
              n = n - step;
              numberInput.val( n ).change();
            } else {
              n = min;
              numberInput.val( n ).change();
            }
          }, 100);
        }, 1000); // pause burst for 1sec before start
      } else {
        n = min;
        numberInput.val( n ).change();
      }
    });

    $(document).on('touchend mouseup', function(e) {
      clearInterval(burst);
      clearTimeout(burstDelay);
      // e.preventDefault();
    });

    // [i] Changin input value
    numberInput.on('change paste keyup', function() {
      n = Number(numberInput.val());

      // [i] update suffix on input change
      if ( Math.abs(n) >= 5 ) {
        suffix.text(suffixData.suffixFivemore);
      } else if ( Math.abs(n) >= 2 && Math.abs(n) <= 4 ) {
        suffix.text(suffixData.suffixMaxfive);
      } else if ( Math.abs(n) == 1 ) {
        suffix.text(suffixData.suffixSingle);
      } else {
        suffix.text(suffixData.suffixFivemore);
      }

    });
  });



  // Longpress on image answers
  $('.answer--image').longpress(function(){
    var imageURL = $(this).data(),
    modalContent = '<img src="' + imageURL.fullsize + '" alt="">';

    $('body').modal({
      message: modalContent,
    });

  });



  // Drag-n-Drop answers
  // Jabłka
  $('.answer--drag').draggable({
    addClasses: false,
    zIndex: 1111,
    revert: true,
    revertDuration: 150,
    drag: function( event, ui ) {
      $(this).addClass('picked');
    },
    stop: function( event, ui ) {
      $(this).removeClass('picked');
    }
  });

  //// Koszyki
  // On sort
  // TODO Sortable źle wyświetla pozycje przesówanego elementu.
  $('.sort-bucket--source').sortable({
    items: '.answer--sort',
    appendTo: $(this),
    classes: false,
    placeholder: 'answer--sort__placeholder',

    start: function( e,ui ) {
      $(ui.item).addClass('picked');
    },
    sort: function( e,ui ) {
      var thisTop = $(ui.item).position().top;
      $(ui.item).css('top', thisTop + $(window).scrollTop());
    },
    stop: function( e,ui ) {
      $(ui.item).removeAttr('style').removeClass('picked');
    },
  }).disableSelection();
  $('.answer--sort').disableSelection();

  // On drag
  $('.drag-bucket--target, .drag-bucket--source').droppable({
    addClasses: false,
    hoverClass: 'get-ready',
    drop: function( event, ui ) {
      $(ui.draggable).removeAttr('style').prependTo(this);
    },
    activate: function( event, ui ) {
      $(ui.draggable).addClass('picked');

      $('.drag-bucket--target, .drag-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
        } else {
          $(this).removeClass('has-content');
        }
      });
    },
    deactivate: function( event, ui ) {
      $(ui.draggable).removeClass('picked');

      // content check
      $('.drag-bucket--target, .drag-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
          $(this).find('.placeholder').appendTo(this);
        } else {
          $(this).removeClass('has-content');
        }
      });
    }
  });

  // First content check
  $('.drag-bucket--target, .drag-bucket--source, .sort-bucket--source').each(function() {
    if ( $(this).children().length > 1 ) {
      $(this).addClass('has-content');
    } else {
      $(this).removeClass('has-content');
    }
  });

  // Sliders

  $('.slider').each(function(e) {
    var $s = $(this),
        valPreffix = ($s.data('preffix')) ? $s.data('preffix') : '',
        valSuffix = ($s.data('suffix')) ? $s.data('suffix') : '',
        valBind = {
          slide: function( event, ui ) {
            var value = ui.value;
            $s.siblings('.slider__value').val( valPreffix + value + valSuffix );
          }
        },
        valuesBind = {
          slide: function( event, ui ) {
            var values = ui.values;
            $s.siblings('.slider__value').val( valPreffix + values[0] + valSuffix + ' — ' + valPreffix + values[1] + valSuffix );
          }
        },
        snapOptions = {
          value: $s.data('sDefault'),
          min: $s.data('sMin'),
          max: $s.data('sMax'),
          step: $s.data('sStep'),
        },
        rangeValOptions = {
          range: 'min',
        },
        rangeOptions = {
          range: true,
          values: $s.data('sDefault'),
          min: $s.data('sMin'),
          max: $s.data('sMax'),
          step: $s.data('sStep'),
        },
        options = {};

    if ( $s.hasClass('slider--snapping') ) {
      options = $.extend(options, snapOptions, valBind);
    }
    if ( $s.hasClass('slider--value-range') ) {
      options = $.extend(options, rangeValOptions);
    }
    if ( $s.hasClass('slider--range') ) {
      options = $.extend(options, rangeOptions, valuesBind);
    }
    if ( $s.hasClass('slider--select') ) {
      var $select = $s.siblings('select'),
          selectItems = $select.children().size();

      options = {
        range: 'min',
        value: $select[ 0 ].selectedIndex + 1,
        min: 1,
        max: selectItems,
        step: 1,
        slide: function( event, ui ) {
          $select[ 0 ].selectedIndex = ui.value - 1;
        }
      };
      $select.attr('disabled', 'disabled');
    }

    $s.slider(options);

    if ( $s.hasClass('slider--range') ) {
      $s.siblings('.slider__value').val( valPreffix + $s.slider( 'values', 0 ) + valSuffix + ' — ' + valPreffix + $s.slider( 'values', 1 ) + valSuffix );
    } else {
      $s.siblings('.slider__value').val( valPreffix + $s.slider( 'value' ) + valSuffix );
    }
  });

});
