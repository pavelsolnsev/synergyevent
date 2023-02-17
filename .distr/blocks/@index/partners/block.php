{% from './data.php' import data %}

<section class="partners" id="partners">
	<div class="container">

		<h2 class="partners__title">{{ data.title | safe }}</h2>

		<div class="partners__cards slick" data-more-options='{ "target": ".partners__card", "init": 6, "desktop": 6, "mobile": 6 }' data-slick='{ "rows": 2, "slidesPerRow": 6, "responsive": [{"breakpoint": 992, "settings": "unslick"} ] }'>
			{% for item in data.cards %}
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/{{ item }} 2x') ?>
			</div><!-- partners__card -->
			{% endfor %}
		</div><!-- partners__cards -->

		<div class="partners__button-more button button_more" data-more-button><i class="icon-plus"></i></div>

	</div><!-- container -->
</section><!-- partners -->
