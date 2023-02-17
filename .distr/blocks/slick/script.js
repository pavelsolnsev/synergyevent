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