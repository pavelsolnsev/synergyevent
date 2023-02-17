{% from './data.php' import data %}

<section class="about lazy" id="about">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-7 order-lg-2">

				<div class="about__text">{{ data.text | safe }}</div>

			</div><!-- col -->
			<div class="col-lg-5">

				<a href="{{ data.href }}" target="_blank" data-fancybox class="about__video">
					<div class="about__img"><?= img('{{ data.img }}') ?></div>
					<div class="about__link">
						<div class="about__button button"><i class="icon-play"></i></div>
						Посмотреть <br>видео
					</div><!-- about__link -->
				</a><!-- about__video -->

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- about -->
