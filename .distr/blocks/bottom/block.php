{% from './data.php' import data %}

<section class="bottom" id="bottom">
	<div class="container">

		<div class="bottom__form">
			<h2 class="bottom__title">{{ data.title | safe }}</h2>

			{{ form.form( 'bottom', button='', button_class='button_brief icon-brief' ) }}
		</div><!-- bottom__form -->

		<div class="bottom__contacts" id="contacts">
			<div class="bottom__contacts-phone"><?= $phone_link ?></div>
			<div class="bottom__contacts-email"><?= $email_link ?></div>
			<div class="bottom__contacts-address"><a href="<?= $address_link ?>" target="_blank"><?= $address ?></a></div>
		</div><!-- bottom__form -->

	</div><!-- container -->
</section><!-- bottom -->
