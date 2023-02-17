{% macro block( data ) %}
{% set header_menu_item_attr = 'data-scroll' if 'page-main' in data.page_class %}

<section class="header" id="header">
	<div class="container header__container">

		<a {% if 'page-main' not in data.page_class %} href="<?= $BASE_HREF ?>" {% endif %} class="header__logo">
			<img src="img/header/logo.svg" alt="">
		</a><!-- header__logo -->

		<div class="header__menu" data-toggle-class='{"body":"page-menu-opened"}'>
			<a href="#about" class="header__menu-item" {{ header_menu_item_attr }}>О&nbsp;нас</a>
			<a href="#cases" class="header__menu-item" {{ header_menu_item_attr }}>Кейсы</a>
			<a href="#contacts" class="header__menu-item" {{ header_menu_item_attr }}>Контакты</a>
		</div><!-- header__menu -->

		<div class="header__phone"><?= get_phone_link($phone, '', 'icon-phone' ) ?></div>
		<div class="header__button-menu button d-lg-none" data-toggle-class='{"body":"page-menu-opened"}'><i class="icon-menu"></i><i class="icon-close"></i></div>

		<div data-src="#popup-registration" class="header__button-popup button button_red" data-fancybox data-popup='{"form": "{{ data.form }}"}'>{{ data.button if data.button else 'Отправить бриф' }}</div>

	</div><!-- container -->
</section><!-- header -->
{% endmacro %}
