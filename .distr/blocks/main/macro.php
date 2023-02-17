{% macro block( data, PAGE_DIR = '' ) %}
<section class="main {{ data.id }}" id="{{ 'main' if not data.id }}" {% if data.bg_path %}data-bg-desktop="img/{{ data.bg_path }}{{ PAGE_DIR }}/main/bg_d.jpg" data-bg-tablet="img/{{ data.bg_path }}{{ PAGE_DIR }}/main/bg_t.jpg" data-bg-mobile="img/{{ data.bg_path }}{{ PAGE_DIR }}/main/bg.jpg"{% endif %}>

	{% if data.images or data.title or data.subtitle %}
	<div class="container">

		{% if data.images %}
		<div class="main__images">
			{% for item in data.images %}
			<div class="main__images-item main__images-item_{{ loop.index }}">
				<div class="main__images-image" data-tilt data-tilt-full-page-listening data-tilt-max="25" data-tilt-reverse="true" data-tilt-reset="false" data-tilt-gyroscope="false"><img src="{{ item | safe }}" alt=""></div>
			</div><!-- main__images-item -->
			{% endfor %}
		</div><!-- main__image -->
		{% endif %}

		{% if data.title %}
		<h1 class="main__title">{{ data.title | safe }}</h1>
		{% endif %}

		{% if data.subtitle %}
		<div class="main__subtitle">{{ data.subtitle | safe }}</div>
		{% endif %}

	</div><!-- container -->
	{% endif %}

	{% if data.marquee %}
	<div class="main__marquee">
		<div class="main__marquee-items">

			{% for item in data.marquee %}
			<div class="main__marquee-item"><i class="icon-plus"></i>{{ item | safe }}</div>
			{% endfor %}
			{% for item in data.marquee %}
			<div class="main__marquee-item"><i class="icon-plus"></i>{{ item | safe }}</div>
			{% endfor %}

		</div><!-- main__marquee-items -->
	</div><!-- main__marquee -->
	{% endif %}

</section><!-- main -->
{% endmacro %}
