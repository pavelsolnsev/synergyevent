{% macro block( data, PAGE_DIR ) %}
<section class="gallery" id="gallery">
	<div class="container gallery__container">

		<div class="gallery__slider slick" data-slick='{ "arrows": false, "touch": false, "mobileFirst": true, "slidesToShow": 1, "slidesToScroll": 1, "responsive": [{"breakpoint": 991, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }] }'>
			{% set groupby = 2 %}
			{% set count = 0 %}
			<div class="gallery__card" data-groupby="{{ groupby }}">
				{% for item in data %}
				{% if count == groupby %}
				{% set count = 0 %}
				{% set groupby = 4 if groupby == 2 else 2 %}
			</div><!-- gallery__card -->
			<div class="gallery__card" data-groupby="{{ groupby }}">
				{% endif %}
				{% set count = count + 1 %}
				<a href="img/@cases/@{{ PAGE_DIR }}/gallery/{{ item }}" target="_blank" data-fancybox="gallery__card" data-options='{"toolbar": false, "smallBtn": true, "arrows": false, "buttons": ["close"]}' class="gallery__card-img"><?= img('img/@cases/@{{ PAGE_DIR }}/gallery/{{ item }}') ?></a>
				{% endfor %}
			</div><!-- gallery__card -->
		</div><!-- gallery__slider -->

	</div><!-- container -->
</section><!-- gallery -->
{% endmacro %}
