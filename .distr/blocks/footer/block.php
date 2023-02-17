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
