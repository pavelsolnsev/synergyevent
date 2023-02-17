{% from '@index/cases/data.php' import data %}

{% macro block( PAGE_DIR ) %}
<section class="cases" id="cases">
	<div class="container">

		<div class="cases__cards">
			{% set index_prev = '' %} {# Предыдущий кейс #}
			{% set index_next = '' %} {# Следующий кейс #}
			{% set count_cards = data.cards.length %} {# Количество кейсов #}

			{# Пробегаемся по массиву #}
			{% for item in data.cards %}
			{% if PAGE_DIR in item.id %} {# Находим элемент текущего кейса #}

			{% if loop.index0 == 0 %} {# Если текущий кейс первый, то предыдущим считаем последний из массива #}
			{% set index_prev = count_cards - 1 %}
			{% else %} {# Иначе предыдущий тот, что непосредственно перед текущим #}
			{% set index_prev = loop.index0 - 1 %}
			{% endif %}

			{% if loop.index == count_cards %} {# Если текущий элемент последний, то следующим считаем первый из массива #}
			{% set index_next = 0 %}
			{% else %} {# Иначе следующий тот, что непосредственно после текущего #}
			{% set index_next = loop.index0 + 1 %}
			{% endif %}

			{% endif %}
			{% endfor %}

			{{ cases_item( data.cards[index_next], 'next' ) }} {# Выводим следующий кейс #}
			{{ cases_item( data.cards[index_prev], 'prev' ) }} {# Выводим предыдущий кейс #}
		</div><!-- cases__cards -->

	</div><!-- container -->
</section><!-- cases -->
{% endmacro %}


{% macro cases_item( item, flag ) %}
<a {% if item.id %}href="/cases/{{ item.id }}/"{% endif %} class="cases__card cases__card_{{ flag }}">
	<div>
		<div class="cases__card-note">{{ 'Следующий' if flag == 'next' else 'Предыдущий' }} <br>кейс</div>
		<div class="cases__card-title">{{ item.title | safe }}</div>
	</div>
	<div class="cases__card-header">
		<div class="cases__card-img"><?= img('img/@index/cases/{{ item.id }}.jpg') ?></div>
	</div><!-- cases__card-header -->
	{% if item.id %}<div class="cases__card-button"><i class="icon-arrow-right"></i></div>{% endif %}
</a><!-- cases__card -->
{% endmacro %}
