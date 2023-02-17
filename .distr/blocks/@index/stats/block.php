{% from './data.php' import data %}

<section class="stats lazy" id="stats">
	<div class="container">

		<h2 class="stats__title">{{ data.title | safe }}</h2>

		<div class="stats__items">
			{% for item in data.items %}
			<div class="stats__item stats__item_{{ loop.index }}">
				<div class="stats__item-inner">
					<div class="stats__item-num">{{ item[0] | safe }}</div>
					<div class="stats__item-text">{{ item[1] | safe }}</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			{% endfor %}
		</div><!-- stats_items -->

	</div><!-- container -->
</section><!-- stats -->
