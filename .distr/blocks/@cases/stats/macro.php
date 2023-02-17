{% macro block( data, id='stats' ) %}
<section class="stats lazy" id="{{ id }}">
	<div class="container">

		<h2 class="stats__title">{{ data.title | safe }}</h2>
		<div class="stats__subtitle">{{ data.subtitle | safe }}</div>

		{% set items_count = data.items | length %}

		<div class="stats__items" data-count="{{ items_count }}">
			{% for item in data.items %}
			<div class="stats__item stats__item_{{ loop.index }} stats__item_{{ 'even' if loop.index % 2 == 0 else 'odd' }} {{ 'stats__item_small' if items_count % 2 != 0 }}">
				<div class="stats__item-inner">
					<div class="stats__item-num">
						{% if item[0].length > 6 %}
						<div class="stats__item-num-smaller">{{ item[0] | safe }}</div>
						{% else %}
						{{ item[0] | safe }}
						{% endif %}
					</div>
					<div class="stats__item-text">{{ item[1] | safe }}</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			{% endfor %}
		</div><!-- stats_items -->

	</div><!-- container -->
</section><!-- stats -->
{% endmacro %}
