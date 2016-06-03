
/**
* functions.js
*/

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

// Update input labels
jQuery.fn.extend({
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
  }
});
