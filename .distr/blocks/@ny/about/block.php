{% from './data.php' import data %}

<section class="about lazy" id="about">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-7 about__col-1">

				<div class="about__title">{{ data.title | safe }}</div>
				<div class="about__text">{{ data.text | safe }}</div>

			</div><!-- col -->
			<div class="col-lg-5 about__col-2">

				<a href="{{ data.href }}" target="_blank" class="about__link">
					<div class="about__button button"><i class="icon-book"></i></div>
					Скачать <br>презентацию
				</a><!-- about__link -->

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- about -->
