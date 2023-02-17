{% macro block( data ) %}
<section class="about" id="about">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-7 about__col-1">

				<div class="about__title">{{ data.title | safe }}</div>
				<div class="about__text">{{ data.text | safe }}</div>

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- about -->
{% endmacro %}
