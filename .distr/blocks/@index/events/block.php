{% from './data.php' import data %}

<section class="events" id="events">
	<div class="container">

		<div class="events__cards">
			{% for item in data.cards %}
			<div class="events__card events__card_{{ loop.index }}">
				<div class="events__card-header">
					<div class="events__card-title">{{ item.title | safe }}</div>
					<div class="events__card-img"><?= img('img/@index/events/{{ item.img }}') ?></div>
				</div><!-- events__card-header -->
				<div class="events__card-text">{{ item.text | safe }}</div>
			</div><!-- events__card -->
			{% endfor %}
		</div><!-- events__cards -->

	</div><!-- container -->
</section><!-- events -->
