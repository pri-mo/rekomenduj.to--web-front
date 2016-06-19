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
