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
          $(this).parent().addClass('layout--card-3 paint--accent picked');
        } else {
          $(this).parent().addClass('picked');
        }
      } else {
        if (!$(this).parent().hasClass('no-card')) { // check if should add card
          $(this).parent().removeClass('layout--card-3 paint--accent picked');
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
