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

	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(min-width: 576px)">
	

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>

<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'page-not-default' : 'page-default' ?> <?= $gtm ? '' : 'no-gtm' ?> page-main">

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">


	

	
	<div class="wrapper">
		





<section class="header" id="header">
	<div class="container header__container">

		<a  class="header__logo">
			<img src="img/header/logo.svg" alt="">
		</a><!-- header__logo -->

		<div class="header__menu" data-toggle-class='{"body":"page-menu-opened"}'>
			<a href="#about" class="header__menu-item" data-scroll>О&nbsp;нас</a>
			<a href="#cases" class="header__menu-item" data-scroll>Кейсы</a>
			<a href="#contacts" class="header__menu-item" data-scroll>Контакты</a>
		</div><!-- header__menu -->

		<div class="header__phone"><?= get_phone_link($phone, '', 'icon-phone' ) ?></div>
		<div class="header__button-menu button d-lg-none" data-toggle-class='{"body":"page-menu-opened"}'><i class="icon-menu"></i><i class="icon-close"></i></div>

		<div data-src="#popup-registration" class="header__button-popup button button_red" data-fancybox data-popup='{"form": ""}'>Отправить бриф</div>

	</div><!-- container -->
</section><!-- header -->






<section class="main " id="main" >

	
	<div class="container">

		
		<div class="main__images">
			
			<div class="main__images-item main__images-item_1">
				<div class="main__images-image" data-tilt data-tilt-full-page-listening data-tilt-max="25" data-tilt-reverse="true" data-tilt-reset="false" data-tilt-gyroscope="false"><img src="img/@index/main/s.png" alt=""></div>
			</div><!-- main__images-item -->
			
			<div class="main__images-item main__images-item_2">
				<div class="main__images-image" data-tilt data-tilt-full-page-listening data-tilt-max="25" data-tilt-reverse="true" data-tilt-reset="false" data-tilt-gyroscope="false"><img src="img/@index/main/e.png" alt=""></div>
			</div><!-- main__images-item -->
			
			<div class="main__images-item main__images-item_3">
				<div class="main__images-image" data-tilt data-tilt-full-page-listening data-tilt-max="25" data-tilt-reverse="true" data-tilt-reset="false" data-tilt-gyroscope="false"><img src="img/@index/main/m.png" alt=""></div>
			</div><!-- main__images-item -->
			
		</div><!-- main__image -->
		

		
		<h1 class="main__title">Synergy Event Management</h1>
		

		

	</div><!-- container -->
	

	
	<div class="main__marquee">
		<div class="main__marquee-items">

			
			<div class="main__marquee-item"><i class="icon-plus"></i>От&nbsp;идеи до&nbsp;реализации</div>
			
			<div class="main__marquee-item"><i class="icon-plus"></i>В&nbsp;онлайн и&nbsp;оффлайн</div>
			
			<div class="main__marquee-item"><i class="icon-plus"></i>В&nbsp;России и&nbsp;за&nbsp;её&nbsp;пределами</div>
			
			
			<div class="main__marquee-item"><i class="icon-plus"></i>От&nbsp;идеи до&nbsp;реализации</div>
			
			<div class="main__marquee-item"><i class="icon-plus"></i>В&nbsp;онлайн и&nbsp;оффлайн</div>
			
			<div class="main__marquee-item"><i class="icon-plus"></i>В&nbsp;России и&nbsp;за&nbsp;её&nbsp;пределами</div>
			

		</div><!-- main__marquee-items -->
	</div><!-- main__marquee -->
	

</section><!-- main -->




<section class="about lazy" id="about">
	<div class="container">

		<div class="row no-gutters">
			<div class="col-lg-7 order-lg-2">

				<div class="about__text">С&nbsp;2015 года делаем знаковые события, которые решают задачи вашего бизнеса и&nbsp;попадают в&nbsp;книгу рекордов Гиннеса</div>

			</div><!-- col -->
			<div class="col-lg-5">

				<a href="https://www.youtube.com/watch?v=MsUobddxivQ" target="_blank" data-fancybox class="about__video">
					<div class="about__img"><?= img('img/@index/about/01.jpg') ?></div>
					<div class="about__link">
						<div class="about__button button"><i class="icon-play"></i></div>
						Посмотреть <br>видео
					</div><!-- about__link -->
				</a><!-- about__video -->

			</div><!-- col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- about -->



<section class="events" id="events">
	<div class="container">

		<div class="events__cards">
			
			<div class="events__card events__card_1">
				<div class="events__card-header">
					<div class="events__card-title">Форумы</div>
					<div class="events__card-img"><?= img('img/@index/events/f.png') ?></div>
				</div><!-- events__card-header -->
				<div class="events__card-text">Создатели и&nbsp;организаторы легендарного Synergy Global Forum и&nbsp;еще сотни крупнейших деловых событий.</div>
			</div><!-- events__card -->
			
			<div class="events__card events__card_2">
				<div class="events__card-header">
					<div class="events__card-title">B2B</div>
					<div class="events__card-img"><?= img('img/@index/events/b.png') ?></div>
				</div><!-- events__card-header -->
				<div class="events__card-text">Организуем события любого масштаба и&nbsp;формата для решения бизнес-задач вашей компании.</div>
			</div><!-- events__card -->
			
			<div class="events__card events__card_3">
				<div class="events__card-header">
					<div class="events__card-title">B2G</div>
					<div class="events__card-img"><?= img('img/@index/events/g.png') ?></div>
				</div><!-- events__card-header -->
				<div class="events__card-text">Проводим знаковые мероприятия с&nbsp;участием первых лиц для государственных структур и&nbsp;корпораций.</div>
			</div><!-- events__card -->
			
		</div><!-- events__cards -->

	</div><!-- container -->
</section><!-- events -->



<section class="cases" id="cases">
	<div class="container">

		<h2 class="cases__title">Кейсы</h2>

		<div class="cases__cards slick" data-more-options='{ "target": ".cases__card", "init": 3, "desktop": 3, "mobile": 3 }' data-slick='{ "slidesToShow": 3, "slidesToScroll": 3, "responsive": [{"breakpoint": 992, "settings": "unslick"} ] }'>
			
			<a href="cases/sgf/" class="cases__card cases__card_1" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/sgf.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">Synergy <br>Global <br>Forum</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/arf2022/" class="cases__card cases__card_2" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/arf2022.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">ArtRussia Fair <br>2022</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/mu/" class="cases__card cases__card_3" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/mu.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">МОЛОДЕЖНЫЙ <br>ФЕСТИВАЛЬ <br>MUUS USTAR</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/berlin/" class="cases__card cases__card_4" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/berlin.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">ВОЕННО-ИСТОРИЧЕСКАЯ РЕКОНСТРУКЦИЯ &laquo;ШТУРМ <br>БЕРЛИНА&raquo;</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/mb/" class="cases__card cases__card_5" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/mb.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">ФОРУМ <br>&laquo;МОЙ БИЗНЕС&raquo;</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/swf2021/" class="cases__card cases__card_6" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/swf2021.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">SYNERGY WOMAN FORUM 2021</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/smc2018/" class="cases__card cases__card_7" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/smc2018.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">SYNERGY MANAGEMENT CAMP 2018</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/smc2019/" class="cases__card cases__card_8" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/smc2019.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">SYNERGY MANAGEMENT CAMP 2019</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/kamaz/" class="cases__card cases__card_9" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/kamaz.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">ГАЛА-УЖИН ПАО КАМАЗ</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/safmar/" class="cases__card cases__card_10" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/safmar.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">САФМАР на&nbsp;одной волне!</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/sfi/" class="cases__card cases__card_11" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/sfi.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">SFI</div>
				
			</a><!-- cases__card -->
			
			<a href="cases/mvideo-eldorado/" class="cases__card cases__card_12" data-more-hidden>
				<div class="cases__card-header">
					<div class="cases__card-img"><?= img('img/@index/cases/mvideo-eldorado.jpg') ?></div>
				</div><!-- cases__card-header -->
				<div class="cases__card-title">М.&nbsp;Видео-Эльдорадо NY&nbsp;Retail 2022</div>
				
			</a><!-- cases__card -->
			
		</div><!-- cases__cards -->

		<div class="cases__button-more button button_more" data-more-button><i class="icon-plus"></i></div>

	</div><!-- container -->
</section><!-- cases -->



<section class="stats lazy" id="stats">
	<div class="container">

		<h2 class="stats__title">Synergy Event Management&nbsp;&mdash; это:</h2>

		<div class="stats__items">
			
			<div class="stats__item stats__item_1">
				<div class="stats__item-inner">
					<div class="stats__item-num">&#8470;&nbsp;1</div>
					<div class="stats__item-text">в&nbsp;России <br>спикерское <br>бюро</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_2">
				<div class="stats__item-inner">
					<div class="stats__item-num">60+</div>
					<div class="stats__item-text">ведущих <br> профессионалов <br>в&nbsp;штате</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_3">
				<div class="stats__item-inner">
					<div class="stats__item-num">200+</div>
					<div class="stats__item-text">проектов <br>в&nbsp;год</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_4">
				<div class="stats__item-inner">
					<div class="stats__item-num">87%</div>
					<div class="stats__item-text">клиентов <br>приходят к&nbsp;нам <br>снова</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_5">
				<div class="stats__item-inner">
					<div class="stats__item-num">2+&nbsp;млн.</div>
					<div class="stats__item-text">зрителей <br>на&nbsp;событиях</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_6">
				<div class="stats__item-inner">
					<div class="stats__item-num">Synergy.<br>Online</div>
					<div class="stats__item-text">собственная <br>платформа</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
			<div class="stats__item stats__item_7">
				<div class="stats__item-inner">
					<div class="stats__item-num">в&nbsp;10+</div>
					<div class="stats__item-text">странах мира <br>провели <br>события</div>
				</div><!-- stats__item-inner -->
			</div><!-- stats__item -->
			
		</div><!-- stats_items -->

	</div><!-- container -->
</section><!-- stats -->



<section class="partners" id="partners">
	<div class="container">

		<h2 class="partners__title">Нам доверяют</h2>

		<div class="partners__cards slick" data-more-options='{ "target": ".partners__card", "init": 6, "desktop": 6, "mobile": 6 }' data-slick='{ "rows": 2, "slidesPerRow": 6, "responsive": [{"breakpoint": 992, "settings": "unslick"} ] }'>
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/01.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/02.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/03.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/04.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/05.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/06.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/07.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/08.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/09.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/10.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/11.jpg 2x') ?>
			</div><!-- partners__card -->
			
			<div class="partners__card" data-more-hidden>
				<?= img('img/@index/partners/12.jpg 2x') ?>
			</div><!-- partners__card -->
			
		</div><!-- partners__cards -->

		<div class="partners__button-more button button_more" data-more-button><i class="icon-plus"></i></div>

	</div><!-- container -->
</section><!-- partners -->



<section class="awards lazy" id="awards">
	<div class="container">

		<h2 class="awards__title">Наши награды</h2>

		<div class="awards__cards">
			
			<div class="awards__card awards__card_1">
				<div class="awards__card-img">
					<?= img('img/@index/awards/01.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/01.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">&laquo;Самое крупное бизнес-событие России&raquo; по&nbsp;версии книги рекордов Гиннеса в&nbsp;2016 году</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_2">
				<div class="awards__card-img">
					<?= img('img/@index/awards/02.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/02.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">&laquo;Деловое событие года&raquo; по&nbsp;версии Global Event Forum в&nbsp;2016 и&nbsp;2017 годах</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_3">
				<div class="awards__card-img">
					<?= img('img/@index/awards/03.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/03.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">Премию за&nbsp;SGF на&nbsp;Moscow ticketing forum получили в&nbsp;номинации &laquo;Лучшая билетная кампания делового события&raquo;</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_4">
				<div class="awards__card-img">
					<?= img('img/@index/awards/04.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/04.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">9th Global Eventex Awards&nbsp;&mdash; 3е&nbsp;место в&nbsp;номинации Conference по&nbsp;мероприятию Synergy Global Forum 2017</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_5">
				<div class="awards__card-img">
					<?= img('img/@index/awards/05.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/05.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">Национальная премия событийной индустрии &laquo;Событие года&raquo;. 1-е место в&nbsp;номинации &laquo;Киберспортивное мероприятие 2021&nbsp;года&raquo;&nbsp;&mdash; проект &laquo;Битва за&nbsp;науку&raquo;</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_6">
				<div class="awards__card-img">
					<?= img('img/@index/awards/05.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/05.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">Национальная премия событийной индустрии &laquo;Событие года&raquo;. 2-е место в&nbsp;номинации &laquo;Фестиваль 2021&nbsp;года&raquo;&nbsp;&mdash; молодёжный фестиваль Muus uSTAR</div>
			</div><!-- awards__card -->
			
			<div class="awards__card awards__card_7">
				<div class="awards__card-img">
					<?= img('img/@index/awards/06.png 3x', 'awards__card-img-mobile') ?>
					<?= img('img/@index/awards/06.png 2x', 'awards__card-img-desktop') ?>
				</div>
				<div class="awards__card-text">Премия индустрии событийного маркетинга и&nbsp;интегрированных коммуникаций BEMA. 3-е место в&nbsp;номинации &laquo;Лучший фестиваль 2021&nbsp;года&raquo;&nbsp;&mdash; молодёжный фестиваль Muus uSTAR</div>
			</div><!-- awards__card -->
			
		</div><!-- awards_cards -->

	</div><!-- container -->
</section><!-- awards -->



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