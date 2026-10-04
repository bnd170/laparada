/* Administrador de imágenes de La Parada: huecos sueltos y listas ordenables. */
(function ($) {
  'use strict';

  var t = window.lpAdmin || {};

  function thumbOf(att) {
    var s = att.sizes || {};
    return (s.medium || s.thumbnail || s.full || att).url;
  }

  function frame(multiple) {
    return wp.media({
      title: multiple ? t.addTitle : t.choose,
      button: { text: t.use },
      library: { type: 'image' },
      multiple: multiple ? 'add' : false
    });
  }

  // Hueco suelto
  $('.lp-slot').each(function () {
    var $slot = $(this);
    var $input = $slot.find('input[type=hidden]');
    var $img = $slot.find('.lp-thumb img');
    var $state = $slot.find('.lp-state');
    var $clear = $slot.find('.lp-clear');
    var picker;

    $slot.find('.lp-pick').on('click', function () {
      picker = picker || frame(false).on('select', function () {
        var att = picker.state().get('selection').first().toJSON();
        $input.val(att.id);
        $img.attr('src', thumbOf(att));
        $state.text('');
        $clear.prop('hidden', false);
      });
      picker.open();
    });

    $clear.on('click', function () {
      $input.val('');
      $img.attr('src', $slot.data('default'));
      $state.text(t.original);
      $clear.prop('hidden', true);
    });
  });

  // Listas (galería, guantes)
  $('.lp-list').each(function () {
    var $list = $(this);
    var name = $list.data('name');
    var $ul = $list.find('.lp-items');
    var picker;

    $ul.sortable({ tolerance: 'pointer', cursor: 'grabbing' });

    $ul.on('click', '.lp-remove', function () {
      $(this).closest('li').remove();
    });

    $list.find('.lp-add').on('click', function () {
      picker = picker || frame(true).on('select', function () {
        picker.state().get('selection').each(function (model) {
          var att = model.toJSON();
          if ($ul.find('li[data-id="' + att.id + '"]').length) { return; }
          var $li = $('<li>').attr('data-id', att.id);
          $('<img>').attr({ src: thumbOf(att), alt: '' }).appendTo($li);
          $('<input>').attr({ type: 'hidden', name: name, value: att.id }).appendTo($li);
          $('<button>').attr({ type: 'button', 'aria-label': t.removeAlt }).addClass('lp-remove').html('&times;').appendTo($li);
          $ul.append($li);
        });
      });
      picker.open();
    });
  });
})(jQuery);
