<?php
/* Defaults */
$title = 'Synergy Event Management' . (isset($subtitle) ? ' | ' . $subtitle : '');
$description = isset($description) ? $description : '';
$share_image = 'img/common/share.jpg';
$gtm = get_gtm() ?? '';

$phone = '8 (495) 744 - 55 - 98';
$email = 'info@synergyevent.ru';
$address = 'Москва, Ленинградский проспект, дом&nbsp;80, корпус&nbsp;Г.';
$address_link = 'https://yandex.ru/maps/-/CCUuYKWokD';
$fb_link = '';
$ig_link = '';

$unit = 'synergy';
$type = 'synservice';
$land = 'synergyevent-ru';
$link = '';
$grcampaign = '';
$graccount = '';
$grtag = '';
$quote_id = '';

$body_class = '';


/* Versions */
switch ($version) {
} // $version


/* Partners */
switch ($partner) {
} // $partner


/* Postprocess */
$phone_link = get_phone_link($phone);
$email_link = get_email_link($email);

$action = implode(array(
	'https://syn.su/lander.php?r=land/index',
	'&unit=', $unit,
	'&type=', $type,
	'&land=', $land,
	'&lang=', $lang,
	'&version=', $version,
	'&partner=', $partner,
	'&graccount=', $graccount,
	'&grcampaign=', $grcampaign,
	'&grtag=', $grtag,
	'&quote_id=', $quote_id,
	'&link=', urlencode($link),
	'&ignore-thanksall=1'
));
