$(() => {

	let
	// lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
	// lazyArr = [].slice.call(querySelectorAllLive(document, '.lazy')),
	active = false,
	threshold = 200
	;

	const lazyLoad = function(e) {
		if (active === false) {
			active = true;
			let lazyArr = [].slice.call(document.querySelectorAll('.lazy'));

			setTimeout(function() {
				lazyArr.forEach(function(lazyObj) {
					if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

						if ( lazyObj.dataset.src ) {
							let
							img = new Image(),
							src = lazyObj.dataset.src
							;
							img.src = src;
							img.onload = function() {
								if (!! lazyObj.parent) {
									lazyObj.parent.replaceChild(img, lazyObj);
								} else {
									lazyObj.src = src;
								}
							}
							lazyObj.removeAttribute('data-src');
						}

						if ( lazyObj.dataset.srcset ) {
							lazyObj.srcset = lazyObj.dataset.srcset;
							lazyObj.removeAttribute('data-srcset');
						}

						lazyObj.classList.remove('lazy');
						lazyObj.classList.add('lazy-loaded');

						lazyArr = lazyArr.filter(function(obj) {
							return obj !== lazyObj;
						});

						if (lazyArr.length === 0) {
							document.removeEventListener('scroll', lazyLoad);
							window.removeEventListener('resize', lazyLoad);
							window.removeEventListener('orientationchange', lazyLoad);
						}
					}
				});

				active = false;
			}, 1);
		}
	};

	function querySelectorAllLive(element, selector) {
		var result = Array.prototype.slice.call(element.querySelectorAll(selector));

		var observer = new MutationObserver(function(mutations) {
			mutations.forEach(function(mutation) {
				[].forEach.call(mutation.addedNodes, function(node) {
					if (node.nodeType === Node.ELEMENT_NODE && node.matches(selector)) {
						result.push(node);
					}
				});
			});
		});

		observer.observe(element, { childList: true, subtree: true });

		return result;
	}

	lazyLoad();

	document.addEventListener('scroll', lazyLoad);
	window.addEventListener('resize', lazyLoad);
	window.addEventListener('orientationchange', lazyLoad);

});

$(() => {

	/*
	Ко всем блокам с классом slick инициализируется карусель.
	Параметры, которые должны перепределить дефолтные, указываются в атрибуте data-slick блока.
	Например, data-slick='{"responsive": [{"breakpoint": 768, "settings": {"slidesToShow": 4, "slidesToScroll": 4}},{"breakpoint": 992, "settings": {"slidesToShow": 5, "slidesToScroll": 5}}]}'
	*/

	$('.slick')
	.on('init-carousel', (event) => {

		let $el = $(event.target);

		if ( $el.hasClass('slick-initialized') ) { return; }

		$el.slick({
			infinite: true,
			arrows: true,
			dots: false,
			rows: 0,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			nextArrow: '<div class="slick-arrow slick-next"><i class="icon-next"></i></div>',
			prevArrow: '<div class="slick-arrow slick-prev"><i class="icon-next"></i></div>'
		});

	})
	.trigger('init-carousel')
	;

});
$(() => {

	$('[data-fancybox]').fancybox({
		touch: false,
		autoFocus: false,
		lang: 'ru',
		i18n: {
			ru: {
				CLOSE: 'Закрыть'
			}
		}
	});

});

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
$(function () {

	/* Функция замены фоновой картинки в зависимости от разрешения */

	if (typeof matchMedia !== 'function') return;

	const mqls = [
	window.matchMedia('(max-width: 991px)'),
	window.matchMedia('(min-width: 992px)'),
	window.matchMedia('(min-width: 1920px)')
	];

	for (let i=0; i<mqls.length; i++){
		mqls[i].addListener(WidthChange);
		WidthChange(mqls[i]);
	}


	function WidthChange(mq) {
		const el = document.getElementById('main');
		// const base_href = document.getElementsByTagName('base')[0].href;
		let bg = '';

		if (!el.getAttribute('data-bg-desktop')) { return; }

		if ( mqls[0].matches ){
			bg = el.getAttribute('data-bg-mobile');
		}

		if ( mqls[1].matches ){
			bg = el.getAttribute('data-bg-tablet');
		}

		if ( mqls[2].matches ){
			bg = el.getAttribute('data-bg-desktop');
		}

		if ( !imageExists(bg) ) {
			bg = el.getAttribute('data-bg-desktop');
		}

		if (bg && imageExists(bg) ) {
			el.style.backgroundImage = 'url("' + bg + '")';
		}
	}


	function imageExists(url){
		let http = new XMLHttpRequest();

		try {
			http.open('HEAD', url, false);
			http.send();

			return http.status != 404;
		} catch (e) {
		}

	}


});

$(() => {

	$('.main__marquee').marquee({
		duration: 20000,
		duplicated: true,
		gap: 0,
		startVisible: true
	});

});
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
