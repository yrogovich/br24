<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package br24-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-row">
				<div class="col">
					<a class="logo" href="<?php echo get_home_url() ?>" rel="home" titile="Бизнесрост">
						<img class="logo-img lazy" 
							data-src="<?php bloginfo('template_url') ?>/src/img/biznesrost_logo_inverse.svg"
							alt="Бизнесрост логотип"
							titile="Бизнесрост"
							onerror="this.onerror=null; this.src='<?php bloginfo('template_url') ?>/src/img/biznesrost_logo.png'">
						<span class="logo-text">Агенство эффективного интернет-маркетинга</span>
					</a>
					<a href="#popup1" rel="modal:open" class="btn btn-inverse-2">Бесплатная консультация</a>
					<a href="#" class="link">Наши реквизиты</a>
				</div>
				<div class="col-divider"></div>
				<div class="col">
					<div class="title">Услуги</div>
					<?php 
					wp_nav_menu( [
						'menu'            => 'menu_top', 
						'menu_class'      => 'footer-menu', 
						'menu_id'         => 'footer-menu_top',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] ); 
					?>
				</div>
				<div class="col-divider"></div>
				<!-- <div class="col">
					<div class="title">Услуги</div>
					<?php 
					wp_nav_menu( [
						'menu'            => 'menu_top', 
						'menu_class'      => 'footer-menu', 
						'menu_id'         => 'footer-menu_top',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] ); 
					?>
				</div> 
				 <div class="col-divider"></div> -->
				<div class="col">
					<div class="title">Обратная связь</div>
					<a class="contact icon-phone" href="tel:<?=PHONE_HREF?>"><?=PHONE?></a>
					<a class="contact icon-mail" href="mailto:<?=EMAIL?>"><?=EMAIL?></a>
					<span class="contact icon-map"><?=ADRESS?></span>
				</div>
				<div class="col-social">
					<a class="btn-container vk" href="#">
						<i class="fab fa-vk"></i>
					</a>
					<a class="btn-container facebook" href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="btn-container instagram" href="#">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="btn-container youb" href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="copyrights">
			<div class="container">
				<span class="copyright">Copyright © 2010 — <?php echo date('Y'); ?>  Компания «БИЗНЕС РОСТ» | Агенство эффективного интернет-маркетинга</span>
				<a href="#" class="privacy-politics">Политика конфедециальности</a>
			</div>
		</div>
		<!-- /.copyrights -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- Mobile navbar-->
<div class="mobile-navbar">
	<div class="container">
		<?php 
		wp_nav_menu( [
			'menu'            => 'menu_top', 
			'menu_class'      => 'menu', 
			'menu_id'         => 'menu_top',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		] ); 
		?>
	</div>
	<div class="mobile-contacts">
		<div class="container">
			<a href="tel:<?=PHONE_HREF?>" class="phone-link"><?=PHONE?></a>

			<div class="social-links">
				<a href="#" class="btn btn-viber">Viber</a>
				<a href="#" class="btn btn-whatsapp">WhatsApp</a>
				<a href="#" class="btn btn-telegram">Telegram</a>
			</div>			
		</div>
	</div>
</div>
<!-- /.mobile-navbar -->

<?php get_template_part('templates/parts/modals') ?>

<script>
	function callHandler(form) {
		console.log('form func is running');
		var  msg = jQuery(form).serialize();
		jQuery.ajax({
			type: 'POST',
			url: '<?php bloginfo("template_url"); ?>/src/send.php',
			data: msg,
			success: function(data) {
				console.log('form ok');
				window.location.hash = "#popup-thx";
				return false;
			},
			error: function () {
				console.log('form error');
				window.location.hash = "#";
			}
		});
	}
</script>

<?php wp_footer(); ?>

</body>
</html>
