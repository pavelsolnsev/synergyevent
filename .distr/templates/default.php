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

{# Блок для переопределения get-переменных на отдельных страницах в pages #}
{% block preversion %}{% endblock %}

<?php
include_once $ROOT . 'version.php';
?>

{# Блок для переопределения php-переменных версий на отдельных страницах в pages #}
{% block version %}{% endblock %}

<html lang="<?= $lang ?>" class="<?= is_webp() ? '' : 'no-webp' ?>">
<head>

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script><!-- End Google Tag Manager -->
	<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	{% block viewport %}
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	{% endblock %}
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<base href="<?= $BASE_HREF ?>">

	<title><?= $title ?></title>
	<meta property="og:title" content="<?= strip_tags($title) ?>">
	<meta property="og:description" content="<?= strip_tags($description) ?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	<link rel="stylesheet" href="css/libs/bootstrap.min.css">

	{% block styles %}
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(min-width: 576px)">
	{% endblock %}

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>

<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'page-not-default' : 'page-default' ?> <?= $gtm ? '' : 'no-gtm' ?> {{ PAGE_CLASS }}">

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php } ?>

	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">


	{% import 'form/macro.php' as form %}

	{% block blocks %}
	<div class="wrapper">
		{% block blocks_inner %}
		{% endblock %}
	</div><!-- wrapper -->

	<div class="d-none">
		{% block blocks_popups %}
		{% include 'popups/block.php' %}
		{% endblock %}

		<a href="http://sydi.ru" target="_blank" rel="_nofollow"></a>
		<form></form>
	</div><!-- d-none -->
	{% endblock %}

	{% block js %}
	<script src="js/libs/jquery.min.js"></script>

	{#<script src="js/libs/lazysizes.min.js" async=""></script>#}
	<script src="js/libs/jquery.marquee.min.js" defer="defer"></script>
	<script src="js/libs/slick.min.js" defer="defer"></script>
	<script src="js/libs/jquery.fancybox.min.js" defer="defer"></script>
	<script src="js/libs/vanilla-tilt.min.js" defer="defer"></script>
	{% endblock %}

	{% block script %}
	<script src="js/script.js" defer="defer"></script>
	{% endblock %}

	{% block css %}
	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			loadCSS('css/libs/slick.min.css');
			loadCSS('css/libs/jquery.fancybox.min.css');
		})();
	</script>
	{% endblock %}

	{% block lander %}
	<script src="https://syn.su/js/lander.js" async="async"></script>
	{% endblock %}

</body>
</html>