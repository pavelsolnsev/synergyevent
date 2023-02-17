{% from './data.php' import data %}

<section class="awards lazy" id="awards">
	<div class="container">

		<h2 class="awards__title">{{ data.title | safe }}</h2>

		<div class="awards__cards">
			{% for item in data.cards %}
			<div class="awards__card awards__card_{{ loop.index }}">
				<div class="awards__card-img">
					<?= img('img/@index/awards/{{ item.img }} 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/{{ item.img }} 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">{{ item.text | safe }}</div>
			</div><!-- awards__card -->
			{% endfor %}
		</div><!-- awards_cards -->

	</div><!-- container -->
</section><!-- awards -->
