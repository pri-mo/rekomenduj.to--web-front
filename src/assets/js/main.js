
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

$('.input').change(function () {
  var $in = $(this);
  var inputName = this.name;
  var val = this.value;
  localStorage.setItem('savedData', 'true');
  // localStorage.setItem(inputName, val);
  console.log(inputName);
  console.log($in);
  console.log(val);
  // console.log(localStorage);
});

});
