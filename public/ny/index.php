<!DOCTYPE html>

<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$query_string = http_build_query($_GET);
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '') . ($query_string ? '?' . $query_string : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
include_once $ROOT . 'chunks/common.php';

if ( is_local_dev() ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>




<?php
include_once $ROOT . 'version.php';
?>




<html lang="<?= $lang ?>" class="<?= is_webp() ? '' : 'no-webp' ?>">
<head>

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script><!-- End Google Tag Manager -->
	<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<base href="<?= $BASE_HREF ?>">

	<title><?= $title ?></title>
	<meta property="og:title" content="<?= strip_tags($title) ?>">
	<meta property="og:description" content="<?= strip_tags($description) ?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	<link rel="stylesheet" href="css/libs/bootstrap.min.css">

	
<link rel="stylesheet" href="css/ny.style.css">
<link rel="stylesheet" href="css/ny.responsive.css" media="(min-width: 576px)">


	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>

<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'page-not-default' : 'page-default' ?> <?= $gtm ? '' : 'no-gtm' ?> page-ny">

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">


	

	
	<div class="wrapper">
		





<section class="header" id="header">
	<div class="container header__container">

		<a  href="<?= $BASE_HREF ?>"  class="header__logo">
			<img src="img/header/logo.svg" alt="">
		</a><!-- header__logo -->

		<div class="header__menu" data-toggle-class='{"body":"page-menu-opened"}'>
			<a href="#about" class="header__menu-item" >О&nbsp;нас</a>
			<a href="#cases" class="header__menu-item" >Кейсы</a>
			<a href="#contacts" class="header__menu-item" >Контакты</a>
		</div><!-- header__menu -->

		<div class="header__phone"><?= get_phone_link($phone, '', 'icon-phone' ) ?></div>
		<div class="header__button-menu button d-lg-none" data-toggle-class='{"body":"page-menu-opened"}'><i class="icon-menu"></i><i class="icon-close"></i></div>

		<div data-src="#popup-registration" class="header__button-popup button button_red" data-fancybox data-popup='{"form": ""}'>Заказать праздник</div>

	</div><!-- container -->
</section><!-- header -->






<section class="main " id="main" data-bg-desktop="img/@ny/main/bg_d.jpg" data-bg-tablet="img/@ny/main/bg_t.jpg" data-bg-mobile="img/@ny/main/bg.jpg">

	
	<div class="container">

		

		
		<h1 class="main__title">Организация новогодних праздников</h1>
		

		

	</div><!-- container -->
	

	

</section><!-- main -->




<section class="events lazy" id="events">
	<div class="container">

		<h3 class="events__title">Мы&nbsp;делаем незабываемые <br>новогодние мероприятия</h3>

		<div class="events__cards">
			
			<div class="events__card events__card_1">
				В&nbsp;офлайн и&nbsp;онлайн
			</div><!-- events__card -->
			
			<div class="events__card events__card_2">
				От&nbsp;идеи до&nbsp;реализации
			</div><!-- events__card -->
			
			<div class="events__card events__card_3">
				Под ваши задачи и&nbsp;бюджет
			</div><!-- events__card -->
			
		</div><!-- events__cards -->

	</div><!-- container -->
</section><!-- events -->



<section class="about lazy" id="about">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-7 about__col-1">

				<div class="about__title">Мы&nbsp;собрали несколько идей, которые будут особенно актуальны в&nbsp;2021-2022 году</div>
				<div class="about__text">Выбирайте подходящую или свяжитесь с&nbsp;нами и&nbsp;мы&nbsp;разработаем предложение специально для Вас</div>

			</div><!-- col -->
			<div class="col-lg-5 about__col-2">

				<a href="#" target="_blank" class="about__link">
					<div class="about__button button"><i class="icon-book"></i></div>
					Скачать <br>презентацию
				</a><!-- about__link -->

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- about -->



<section class="bottom" id="bottom">
	<div class="container">

		<div class="bottom__form">
			<h2 class="bottom__title">Один клик до&nbsp;события вашей мечты</h2>

			
<form class="form " action="<?= $action ?>&amp;form=bottom">

	

	

	
<div class="form__items">

	
	
<div class="form__item form__item_text  " data-name="comments[Компания]">
	

	
		<input name="comments[Компания]" type="text" placeholder="Компания" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  " data-name="name">
	

	
		<input name="name" type="text" placeholder="Имя" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="Телефон" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_email  " data-name="email">
	

	
		<input name="email" type="email" placeholder="Почта" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  form__item_wide" data-name="comments[Ссылка на документ]">
	

	
		<input name="comments[Ссылка на документ]" type="text" placeholder="Вставить ссылку на документ" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	
<div class="form__item form__item_textarea  form__item_wide" data-name="comments[Комментарий]">
	

	<textarea name="comments[Комментарий]" placeholder="Комментарий" class="form__input form__input_textarea"  ></textarea>

	
</div><!-- form__item -->

	

	

	<div class="form__footer">
		<label>
			<div class="form__footer-checkbox">
				<input type="checkbox" name="personalDataAgree" checked>
				<div class="form__footer-checkbox-icon"></div>
			</div><!-- form__footer-checkbox -->
			<div class="form__footer-text">Нажимая на&nbsp;кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь с&nbsp;<a href="#privacy" class="fancybox privacy"><b>Политикой конфиденциальности</b></a>.</div>
		</label>
	</div><!-- form__footer -->

	<div class="form__item form__item_button">
		<button class="form__button button button_brief icon-brief" type="submit"></button>
	</div><!-- form__item -->

</div><!-- form__items -->


	

	<input name="form" type="hidden" value="bottom">

</form><!-- form -->

		</div><!-- bottom__form -->

		<div class="bottom__contacts" id="contacts">
			<div class="bottom__contacts-phone"><?= $phone_link ?></div>
			<div class="bottom__contacts-email"><?= $email_link ?></div>
			<div class="bottom__contacts-address"><a href="<?= $address_link ?>" target="_blank"><?= $address ?></a></div>
		</div><!-- bottom__form -->

	</div><!-- container -->
</section><!-- bottom -->

<section class="footer" id="footer">
	<div class="container">

		<div class="row">
			<div class="col col-lg-auto footer__logo-col">

				<div class="footer__logo"><img src="img/header/logo.svg" alt=""></div>

			</div><!-- col -->
			<div class="col-auto footer__links-col">

				<div class="footer__links">
					<?php if ( $fb_link ) { ?>
						<a href="<?= $fb_link ?>" target="_blank"><i class="icon-fb"></i></a>
					<?php } ?>
					<?php if ( $ig_link ) { ?>
						<a href="<?= $ig_link ?>" target="_blank"><i class="icon-ig"></i></a>
					<?php } ?>
				</div>

			</div><!-- col -->
			<div class="col-lg footer__meta-col">

				<div class="footer__meta">
					<div class="footer__meta-item">©&nbsp;<?= date('Y') ?>, SYNERGY EVENT MANAGEMENT</div>
					<div class="footer__meta-item"><a href="#privacy" target="_blank" class="footer__meta-link">Политика конфиденциальности</a></div>
					<div class="footer__meta-item">Разработка и&nbsp;продвижение: <a href="http://sydi.ru" target="_blank" rel="_nofollow">Synergy Digital</a></div>
				</div>

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- footer -->


	</div><!-- wrapper -->

	<div class="d-none">
		
		<section class="popup-registration popup" id="popup-registration">

	<div class="popup__logo header__logo">
		<?= img('img/header/logo.svg') ?>
	</div><!-- popup__header -->

	
<form class="form " action="<?= $action ?>&amp;form=popup-registration">

	
	<div class="form__title ">Отправить <br>бриф</div>
	

	

	
<div class="form__items">

	
	
<div class="form__item form__item_text  " data-name="comments[Компания]">
	

	
		<input name="comments[Компания]" type="text" placeholder="Компания" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  " data-name="name">
	

	
		<input name="name" type="text" placeholder="Имя" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="Телефон" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_email  " data-name="email">
	

	
		<input name="email" type="email" placeholder="Почта" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	

	
	
<div class="form__item form__item_text  form__item_wide" data-name="comments[Ссылка на документ]">
	

	
		<input name="comments[Ссылка на документ]" type="text" placeholder="Вставить ссылку на документ" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

	
<div class="form__item form__item_textarea  form__item_wide" data-name="comments[Комментарий]">
	

	<textarea name="comments[Комментарий]" placeholder="Комментарий" class="form__input form__input_textarea"  ></textarea>

	
</div><!-- form__item -->

	

	

	<div class="form__footer">
		<label>
			<div class="form__footer-checkbox">
				<input type="checkbox" name="personalDataAgree" checked>
				<div class="form__footer-checkbox-icon"></div>
			</div><!-- form__footer-checkbox -->
			<div class="form__footer-text">Нажимая на&nbsp;кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь с&nbsp;<a href="#privacy" class="fancybox privacy"><b>Политикой конфиденциальности</b></a>.</div>
		</label>
	</div><!-- form__footer -->

	<div class="form__item form__item_button">
		<button class="form__button button button_brief icon-brief" type="submit"></button>
	</div><!-- form__item -->

</div><!-- form__items -->


	

	<input name="form" type="hidden" value="popup-registration">

</form><!-- form -->


</section><!-- popup-consultation -->


		

		<a href="http://sydi.ru" target="_blank" rel="_nofollow"></a>
		<form></form>
	</div><!-- d-none -->
	

	
	<script src="js/libs/jquery.min.js"></script>

	
	<script src="js/libs/jquery.marquee.min.js" defer="defer"></script>
	<script src="js/libs/slick.min.js" defer="defer"></script>
	<script src="js/libs/jquery.fancybox.min.js" defer="defer"></script>
	<script src="js/libs/vanilla-tilt.min.js" defer="defer"></script>
	

	
	<script src="js/script.js" defer="defer"></script>
	

	
	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			loadCSS('css/libs/slick.min.css');
			loadCSS('css/libs/jquery.fancybox.min.css');
		})();
	</script>
	

	
	<script src="https://syn.su/js/lander.js" async="async"></script>
	

</body>
</html>