$(() => {
	/* Inits */
	initBodyScroll();
	initMore();
	initScroll();
	initToggleClass();


	/* Functions */
	/* Функция скролла к элементу через параметры data-scroll='{href: ""}' или href */
	function initScroll() {
		$(document).on('click init-scroll', '[data-scroll]', function (event) {
			event.preventDefault();
			$.fancybox.close();

			var
			params = $(this).data('scroll') || '',
			href = params.href || $(this).attr('href') || '',
			header_height = $('.header').css('position') == 'fixed' ? $('.header').height() : 0,
			posTop = 0
			;

			if ( !$(href).length ) return;

			posTop = $(href).offset().top - header_height + 0.5

			$('html, body').animate({ scrollTop: posTop }, 1000).removeClass('page-menu-opened');
		});

		/*if ( location.hash ) {
			var $temp = $('<div class="d-none" data-scroll=\'{"href":"' + location.hash + '"}\'/>');
			$('body').append($temp);
			setTimeout(function(){ $temp.trigger('init-scroll'); }, 500);
		}*/
	}


	function initBodyScroll() {
		$(document)
		.on('scroll init-scroll', function () {
			var
			scroll_top = $(this).scrollTop(),
			window_height = $(window).height(),
			header_height = $('#header').height(),
			main_height = $('#main').height(),
			$forms = $('form')
			;

			$('body')
			.toggleClass('page-scrolled', scroll_top > header_height)
			.toggleClass('page-scrolled-main', scroll_top > main_height)
			;

			$forms.each(function(index, el) {
				let form_top = $(el).offset().top;

				if ( form_top < 1 ) return;

				let form_height = $(el).height();

				$('body.page-scrolled')
				.toggleClass(
					'page-scrolled-on-form-' + (index + 1),
					scroll_top > form_top - window_height &&
					scroll_top < form_top + form_height
					)
				;
			});

		})
		.trigger('init-scroll');
	}


	function initToggleClass() {
		$('[data-toggle-class]').on('click', function() {

			var
			params = $(this).data('toggle-class') || '',
			params_arr = []
			;

			if ( params.length ) {
				params_arr = params; /* Если передан массив параметров data-toggle-class='[{"selector":"class"},{"selector":"class"}]' */
			}
			else {
				params_arr.push(params); /* Если передан одиночный параметр data-toggle-class='{"selector":"class"}' */
			}

			for (var item in params_arr ) {
				for (var key in params_arr[item] ) {
					var
					obj_href = key,
					obj_class = params_arr[item][key],
					$obj
					;

					if ( obj_href.indexOf('$') != -1	 ) {
						$obj = eval(obj_href); /* Если передан jQuery-объект */
					}
					else {
						$obj = $(obj_href); /* Если передан jQuery-селектор */
					}

					$obj.toggleClass(obj_class);

					/* Scroll trigger for lazy */
					$('html, body')
					.animate({scrollTop: '+=1'}, 0)
					.animate({scrollTop: '-=1'}, 0)
					;

				}
			}

		});
	}


	function initMore() {
		$('[data-more-button]')
		.on('init-more click', function(event) {
			var
			$button = $(this),
			$container = $('[data-more-options]', $button.parent()),
			options,
			visible = 0,
			window_width = $(window).width(),
			$items
			;

			options = $container.data('more-options') || {};

			if ( event.type == 'init-more' ) {
				visible = options.init;
			}
			else {
				visible = window_width > 991 ? options.desktop : options.mobile;
			}

			$items = $(options.target + '[data-more-hidden]', $container);
			$items.slice(0, visible).removeAttr('data-more-hidden');

			/* Scroll trigger for lazy */
			$('html, body')
			.animate({scrollTop: '+=1'}, 0)
			.animate({scrollTop: '-=1'}, 0)
			;

			if ( $items.length - visible <= 0 ) {
				$button.addClass('d-none');
			}

		})
		.trigger('init-more')
		;
	}


});