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
