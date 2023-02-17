$(() => {

	$(document).on('click', '[data-popup]', function () {
		var
		$button = $(this),
		href = $button.attr('data-src') || $button.attr('href'),
		$popup = $(href),
		options = $button.data('popup') || {},
		title = $button.text() || '',
		form = options.form || ''
		;

		if (title) $('.form__title', $popup).html( title );
		if (form) $('[name="form"]', $popup).val( form );

	});

});