{% from './data.php' import data %}

<section class="events lazy" id="events">
	<div class="container">

		<h3 class="events__title">{{ data.title | safe }}</h3>

		<div class="events__cards">
			{% for item in data.cards %}
			<div class="events__card events__card_{{ loop.index }}">
				{{ item | safe }}
			</div><!-- events__card -->
			{% endfor %}
		</div><!-- events__cards -->

	</div><!-- container -->
</section><!-- events -->
