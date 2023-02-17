{% macro block( data, PAGE_DIR ) %}
{# Выводим блок, только если в data указан href - ссылка на видео, иначе смысла нет #}
{% if data.href %}
<section class="video" id="video" style="background-image: url('img/@cases/@{{ PAGE_DIR }}/video/bg_d.jpg')">

	<a href="{{ data.href }}" target="_blank" data-fancybox class="video__link">
		<div class="video__button button"><i class="icon-play"></i></div>
		<div>{{ data.text | safe }}</div>
	</a><!-- video__link -->

</section><!-- video -->
{% endif %}
{% endmacro %}
