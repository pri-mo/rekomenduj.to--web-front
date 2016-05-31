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
    });

    // Show modal as setup
    return this.append($modal);

  };

}( jQuery ));
;

/**
* main.js
*/


//// Do stuff after page load
$(function() { console.log( 'ready!' );


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

// Set classes to cover images based on dimensions.
$('img.image--cover').each(function() {
  $(this).on('load', function(e) { // Check if loaded
    var height = this.height;
    var width = this.width;
    var ratio = height / width;

    // console.log($(this) + ' = ' + ratio);

    $(this).parent().addClass('cover__container');

    if (ratio < 0.8) {
      $(this).addClass('cover--wide');
    } else if (ratio > 1.2) {
      $(this).addClass('cover--tall');
    } else {
      $(this).addClass('cover--sqr');
    }
  }).each(function() { // If chached, say it's loaded
  if(this.complete) $(this).load();
});
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
$('body').bind('DOMSubtreeModified', function() {
  $('input, select, textarea').on('focus', function(e) {
    var label = $(this).next('label');

    $(this).on('blur', function() {
      var value = $(this).val();

      // check if the input has any value (if we've typed into it)
      if ( value ) {
        $(this).addClass('input--used');

        if ( $(this).is(':invalid') ) {
          label.html( label.data('invalid'));
        } else {
          label.html( label.data('focused') );
        }

      } else {
        $(this).removeClass('input--used');
        label.html( label.data('original') );
      }
    });
    // Change when on focus
    if ($(this).hasClass('input--used') ) {
      $(this).removeClass('input--used');
    }
  });
});

// Correct input styles on page enter — in case values passing/set
$('body').bind('DOMSubtreeModified', function() {
  $('input, select, textarea').each(function() {
    var label = $(this).next('label');
    var value = $(this).val();

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
});


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

// Adding and deleting kids
$('#kidsNumber').on('change each', function() {
  var kids = $(this).val();
  var nowKids = $("#kidsInputs .grid__container").length;
  var r = -1*(nowKids-kids);
  var n = 1;
  var html = '';

  if(kids === 0) {
    $("#kidsInputs .grid__container").slice(r).remove();
  } else {
    if(kids > nowKids) {
      for(i = 0; i < (kids-nowKids); i++) {
        $('#kidsInputs').append('<div class="grid__container grid--gutter">' +
        '  <div class="grid__item grid__item--1of2">' +
        '    <div class="input input--date input--show-label">' +
        '      <input tabindex' +
        '      name="user-baby' + kids + '-bday" id="user-baby' + kids + '-bday" type="date"' +
        '      autocomplete="baby' + kids + '-bday"' +
        '      required' +
        '      spellcheck="true"' +
        '      placeholder="Podaj datę">' +
        '      <label for="user-baby' + kids + '-bday"' +
        '      data-focused="' + kids + '. Data urodzenia"' +
        '      data-original="Podaj datę urodzenia"' +
        '      data-invalid="To pole jest wymagane."></label>' +
        '    </div>' +
        '  </div>' +
        '  <div class="grid__item grid__item--1of2">' +
        '    <div class="input input--select input--show-label">' +
        '      <select name="user-baby' + kids + '-gender" id="user-baby' + kids + '-gender" required>' +
        '        <option value="" selected disabled>Podaj płeć</option>' +
        '        <option value="K">Dziewczynka</option>' +
        '        <option value="M">Chłopiec</option>' +
        '      </select>' +
        '      <label for="user-baby' + kids + '-gender"' +
        '      data-focused="Płeć dziecka"' +
        '      data-original="Podaj płeć dziecka"' +
        '      data-invalid="To pole jest obowiązkowe"></label>' +
        '    </div>' +
        '  </div>' +
        '</div>');
        $('#kidsInputs input, #kidsInputs select').each( function() {
          var label = $(this).next('label');
          var value = $(this).val();

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
      }
    } else {
      r = -1*(nowKids-kids);
      $("#kidsInputs .grid__container").slice(r).remove();
    }
  }
});

$('.input').blur(function () {
  localStorage.setItem('savedData', 'true');
  localStorage[$(this).attr('name')] = $(this).val();
  console.log(localStorage);
});

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
  $(window).scroll(function() {

    if (!$('header').hasClass('nav--showMenu')) {

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
  $('#triggerMenu').on('click touchstart', function(event) {
    showHideNav();
    event.preventDefault();
  });

  // clicking anywhere inside navigation or heading won’t close navigation’s popover
  $('header nav').on('click touchstart', function(event){
    event.stopPropagation();
  });

  // clicking on secondary nav shows primary manu
  $('header .nav--secondary').on('click touchstart', function(event){
    if ($('header').hasClass('hidden')) {
      $('header').removeClass('hidden');
      event.preventDefault();
    }
  });

  $('main').on('click touchstart', function(event) {
    if ($('header').hasClass('nav--showMenu')) {
      hideNav();
      event.preventDefault();
    }
  });

  // checks if navigation’s popover is shown
  function showHideNav() {
    if ($('header').hasClass('nav--showMenu')) {
      hideNav();
    } else {
      showNav();
    }
  }

  // shows the navigation’s drawer
  function showNav() {
    $('header').removeClass('hidden').addClass('nav--showMenu');
    $('body, html').addClass('content--toSide');
    window.setTimeout(function(){$('body').addClass('page--noScroll');}, 200); // Firefox hack. Hides scrollbar as soon as menu animation is done
    $('header nav a').attr('tabindex', ''); // links inside navigation should be TAB selectable
  }


  // hides the navigation’s drawer
  function hideNav() {
    $('body, html').removeClass('content--toSide');
    window.setTimeout(function(){$('body').removeClass('page--noScroll');}, 10); // allow animations to start before removing class (Firefox)
    $('header').removeClass('nav--showMenu');
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
  $('.answer--pick > input').on('change', function() {
    var max = $('.poll__answers').data('maxPick');
    if ( $(':checked').length == max ) {
        $('.answer--pick > input').prop('disabled', 'disabled');
        $(':checked').removeAttr('disabled');
    } else {
         $('.answer--pick > input').removeAttr('disabled');
    }

    $('.answer--pick > input').each(function() {
      var ischecked = $(this).is(':checked'),
          isdisabled = $(this).prop('disabled');

      if (ischecked) {
        if (!$(this).parent().hasClass('no-card')) { // check if should add card
          $(this).parent().addClass('layout--card-3 picked');
        } else {
          $(this).parent().addClass('picked');
        }
      } else {
        if (!$(this).parent().hasClass('no-card')) { // check if should add card
          $(this).parent().removeClass('layout--card-3 picked');
        } else {
          $(this).parent().removeClass('picked');
        }
      }

      if (isdisabled) {
        $(this).parent().addClass('disabled');
      } else {
        $(this).parent().removeClass('disabled');
      }
    });

  }).change();

  // A special case when there is an input inside a checkbox
  $('.answer--pick').on('mouseup', function() {
    var ischecked = $(this).find('[type=checkbox]').is(':checked');

    if (ischecked) {
      $(this).find('.input > input').off('focus'); // presume user unchecks
    } else {
      $(this).find('.input > input').focus(); // presume user checks, set focus in input
    }
  });


  // Gdy klikam w pole tekstowe to niech Checkbox się zaznacza
  $('.answer--input input[type=text]').on('focus change', function() {
    $(this).siblings('input[type=checkbox]').prop('checked', true);
  });



  //// The number input
  $('.input--number').each(function() {
    var plus = $(this).find('.number__more'),
    minus = $(this).find('.number__less'),
    numberInput = $(this).find('input[type=number], input[type=tel]'),
    n = Number(numberInput.val()),
    min = numberInput.attr('min'),
    max = numberInput.attr('max'),
    step = (numberInput.attr('step')) ? Number(numberInput.attr('step')) : 1,
    suffix = $(this).find('.number__suffix'),
    suffixData = suffix.data(),
    burst,
    burstDelay;

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
      // $(this).addClass('layout--card-3 picked');
    },
    stop: function( event, ui ) {
      // $(this).removeClass('layout--card-3 picked');
    }
  });

  //// Koszyki
  // On sort
  $('.sort-bucket--source').sortable({
    placeholder: 'answer--sort__placeholder',

    activate: function( event, ui ) {
      $(ui.item).addClass('layout--card-4 picked');

      $('.sort-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
        } else {
          $(this).removeClass('has-content');
        }
      });
    },
    deactivate: function( event, ui ) {
      $(ui.item).removeClass('layout--card-4 picked');

      // content check
      $('.sort-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
        } else {
          $(this).removeClass('has-content');
        }
      });
    }
  });

  // On drag
  $('.drag-bucket--target, .drag-bucket--source').droppable({
    addClasses: false,
    hoverClass: 'get-ready',
    drop: function( event, ui ) {
      $(ui.draggable).removeAttr('style').appendTo( this );
    },
    activate: function( event, ui ) {
      $(ui.draggable).addClass('layout--card-4 picked');

      $('.drag-bucket--target, .drag-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
        } else {
          $(this).removeClass('has-content');
        }
      });
    },
    deactivate: function( event, ui ) {
      $(ui.draggable).removeClass('layout--card-4 picked');

      // content check
      $('.drag-bucket--target, .drag-bucket--source').each(function() {
        if ( $(this).children().length > 1 ) {
          $(this).addClass('has-content');
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
