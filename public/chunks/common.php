<?php
function picture($url = '', $class = '', $alt = '') {
	$pathname = substr( $url, 0, strlen($url) - 3 );
	$extension = substr( $url, -3 );
	?>
	<picture>
		<?php	if ( $extension != 'svg' ) { ?>
			<?php	if ( !is_webp() ) { ?>
				<source <?= strpos($class, 'lazy') !== false ? 'data-srcset' : 'srcset' ?>="<?= $url ?>" type="image/<?= $extension == 'jpg' ? 'jpeg' : 'png' ?>" class="<?= $class ?>"></source>
			<?php	} else { ?>
				<source <?= strpos($class, 'lazy') !== false ? 'data-srcset' : 'srcset' ?>="<?= $pathname ?>webp" type="image/webp" class="<?= $class ?>"></source>
			<?php	} ?>
		<?php	} ?>
		<img <?= strpos($class, 'slick') !== false ? 'data-lazy' : (strpos($class, 'lazy') !== false ? 'data-src' : 'src') ?>="<?= is_webp() && $extension != 'svg' ? $pathname.'webp' : $url ?>" alt="<?= $alt ?>" class="<?= $class ?>">
	</picture>
	<?php
}


function img($srcset = '', $class = '', $alt = '') {
	?>
	<img data-srcset="<?= $srcset ?>" class="lazy <?= $class ?>" alt="<?= $alt ?>">
	<?php
}


function is_mobile() {
	$useragent = http_user_agent();
	return preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4));
}


function is_webp() {
	$useragent = http_user_agent();
	$accept = http_accept();
	/* Разрешаем webp, если это не локальный dev (localhost:8910) под Windows и webp поддерживается браузером */
	// return ( !is_local_dev() && (strpos( $accept, 'image/webp' ) !== false || strpos( $useragent, ' Chrome/' ) !== false || strpos( $useragent, ' Firefox/') ) !== false );
	return false;
}


function is_local_dev() {
	return ( strpos( $_SERVER['HTTP_HOST'], '127.0.0.1' ) !== false );
}


function is_syndev() {
	return ( strpos( $_SERVER['HTTP_HOST'], 'syndev' ) !== false );
}


function http_user_agent() {
	return isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
}


function http_accept() {
	return isset($_SERVER['HTTP_ACCEPT']) ? strtolower($_SERVER['HTTP_ACCEPT']) : '';
}


/* Возвращает склоненное по числу слово. Принимает число и массив ['день','дня','дней'] */
function get_declination($number, $text) {
	$cases = [2, 0, 1, 1, 1, 2];
	return $text[ ($number%100>4 && $number%100<20)? 2 : $cases[($number%10<5)?$number%10:5] ];
}


function date_ru($time, $format = '%e %bg') {
	if ( !is_numeric($time) ) $time = strtotime($time);

	$months = explode('|', '|января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');
	$format = preg_replace("~\%bg~", $months[date('n', $time)], $format);

	return strftime($format, $time);
}


function get_phone_link($phone, $text = '', $class = '', $protocol = '')
{
	if (!$phone) return;

	if (strpos($protocol, 'whatsapp') !== false) {
		$protocol = 'whatsapp://send?phone=';
		$phone = str_replace('+', '', $phone);
	}

	return '<a href="' . ($protocol ? $protocol : 'tel:') . preg_replace('/[^\\d\\+]/m', '', $phone) . '" target="_blank"' . ($class ? ' class="' . $class . '"' : '') . '>' . ($text ? $text : $phone) . '</a>';
}


function get_email_link($email, $text = '', $class = '')
{
	if (!$email) return;

	return '<a href="mailto:' . strip_tags($email) . '" target="_blank"' . ($class ? ' class="' . $class . '"' : '') . '>' . ($text ? $text : $email) . '</a>';
}


function get_gtm() {
	$gtm = null;

	switch ($_SERVER['HTTP_HOST']) {
		case 'synergyevent.ru': $gtm = 'GTM-PNVL8P7'; break;
		case 'synergy.ru': $gtm = 'GTM-P4H3L8'; break;
		case 'sbs.edu.ru': $gtm = 'GTM-K77TBB'; break;
		case 'synergyglobal.ru': $gtm = 'GTM-M7T7GF'; break;
		case 'synergy.online': $gtm = 'GTM-TTN54WK'; break;
	}

	return $gtm;
}
