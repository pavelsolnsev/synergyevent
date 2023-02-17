{% from './data.php' import data %}

<section class="cases" id="cases">
	<div class="container">

		<h2 class="cases__title">{{ data.title | safe }}</h2>

		<div class="cases__cards slick" data-more-options='{ "target": ".cases__card", "init": 3, "desktop": 3, "mobile": 3 }' data-slick='{ "slidesToShow": 3, "slidesToScroll": 3, "responsive": [{"breakpoint": 992, "settings": "unslick"} ] }'>
			{% for item in data.cards %}
			<a {% if item.id %}href="cases/{{ item.id }}/"{% endif %} class="cases__card cases__card_{{ loop.index }}" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/{{ item.id }}.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">{{ item.title | safe }}</div>
				{% if item._id %}<div class="cases__card-button"><i class="icon-arrow-right"></i></div>{% endif %}
			</a><!-- cases__card -->
			{% endfor %}
		</div><!-- cases__cards -->

		<div class="cases__button-more button button_more" data-more-button><i class="icon-plus"></i></div>

	</div><!-- container -->
</section><!-- cases -->
