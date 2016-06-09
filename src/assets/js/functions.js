
/**
* functions.js
*/

// Broken images
function imgBroken(image) {
  // image.onerror = "";
  $(image).parent().removeClass('cover__container').attr('data-error', 'Image was broken. I deleted it...');
  image.remove();
  return true;
}

// Update kids
function updKids() {
  var $kNum = document.getElementById('kidsNumber');
  var kids = $kNum.value;
  var nowKids = $("#kidsInputs .grid__container").length;
  var r = -1*(nowKids-kids);
  var n = 0;

  if(kids === 0) {
    $("#kidsInputs .grid__container").remove();
  } else {
    if(kids > nowKids) {
      for(i = 0; i < (kids-nowKids); i++) {
        n = 1 + nowKids + i;
        $('#kidsInputs').append('<div class="grid__container grid--gutter" data-row="'+ n +'">' +
        '  <div class="grid__item grid__item--1of2">' +
        '    <div class="input input--date input--show-label">' +
        '      <input tabindex' +
        '      name="user-baby' + n + '-bday" id="user-baby' + n + '-bday" type="date"' +
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
      $("#kidsInputs .grid__container").slice(r).remove();
    }
  }
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
        var imgRatio = height / width;
        var parRatio = $parent.height() / $parent.width();
        var compareRatios = imgRatio*parRatio;
        var ratioDifference = imgRatio-parRatio;

        if ( imgRatio >= parRatio ) {
          if ( compareRatios < imgRatio && compareRatios < parRatio && ratioDifference > 0 && ratioDifference < 0.164 ){
            if ( !$el.hasClass('cover-height') ) $el.removeClass('cover--width').addClass('cover--height');
          } else {
            if ( !$el.hasClass('cover-width') ) $el.removeClass('cover--height').addClass('cover--width');
          }
        } else {
          if ( !$el.hasClass('cover-height') ) $el.removeClass('cover--width').addClass('cover--height');
        }
        // console.log($(this).parent().attr('data-index') + ': ' + parRatio + ' / ' + imgRatio + '\n   (diff:' + ratioDifference + ') (comp:' + compareRatios + ')');
      });
    }

  });
})( jQuery );
