<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package br24-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php include "constants.php" // Часто изменяемые значения ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<nav class="navbar">
			<div class="navbar-top">
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
				<!-- /.container -->
			</div>
			<!-- /.navbar-top -->
			<div class="navbar-middle">
				<div class="container">
					<a class="logo" href="<?php echo get_home_url() ?>" rel="home" titile="Бизнесрост">
						<img class="logo-img" 
							src="<?php bloginfo('template_url') ?>/src/img/biznesrost_logo.svg"
							alt="Бизнесрост логотип"
							titile="Бизнесрост"
							onerror="this.onerror=null; this.src='<?php bloginfo('template_url') ?>/src/img/biznesrost_logo.png'">
						<span class="logo-text">Агенство эффективного интернет-маркетинга</span>
					</a>
					<?php 
					wp_nav_menu( [
						'menu'            => 'menu_middle', 
						'menu_class'      => 'menu', 
						'menu_id'         => 'menu_middle',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] ); 
					?>
					<a href="#" class="btn btn-inverse">Заказать звонок</a>

					<div class="pair">
						<a href="tel:<?=PHONE_HREF?>" class="phone-link"><?=PHONE?></a>
						<div class="social-toggle">
							<i class="fas fa-angle-down"></i>
						</div>
					</div>

					<svg class="mobile-menu-toggle ham ham6" viewBox="10 10 80 80" width="50" onclick="this.classList.toggle('active')">
						<path
							class="line top"
							d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
						<path
							class="line middle"
							d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
						<path
							class="line bottom"
							d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
					</svg>
				</div>
				<div class="langs">
					<a href="<?php echo get_home_url() ?>" class="lang ru active">RU</a>
					<a href="#" class="lang en">EN</a>
				</div>
			</div>
			<!-- /.navbar-middle -->
		</nav>
		<!-- /.navbar -->

		<div class="container">
			<div class="hero">
				<div class="hero-left">
					<h1 class="h1">
						<span href="" class="typewrite primary" data-period="2500" data-type='[ "cоздаем", "продвигаем", "обслуживаем" ]'>
							<span class="wrap"></span>
						</span>
						сайты 
						<span class="d-md-block">для бизнеса</span>
					</h1>

					<a href="#" class="btn btn-primary btn-lg btn-shadow">Оставить заявку сейчас</a>

					<div class="main-features">
						<div class="main-feature">
							<div class="digit"><span class="count" data-count="8">0</span>+</div>
							<span class="text">Более 8 лет опыт работы</span>
						</div>
						<!-- /.main-feature -->
						<div class="main-feature">
							<div class="digit"><span class="count" data-count="300">0</span>+</div>
							<span class="text">Более 300 проектов реализовано</span>
						</div>
						<!-- /.main-feature -->
						<div class="main-feature">
							<div class="digit"><span class="count" data-count="10">0</span></div>
							<span class="text">10 профессионалов в команде</span>
						</div>
						<!-- /.main-feature -->
					</div>
					<!-- /.main-features -->
				</div>
				<div class="hero-right">
					<div class="circles">
						<div class="circle-1"></div>
						<div class="circle-2"></div>
						<div class="circle-3"></div>
						<div class="circle-4"></div>
						<div class="circle-5"></div>
					</div>
					<picture>
						<source type="image/webp" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/agronovia.webp">
						<source type="image/png" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/agronovia.png">
						<img src="<?php bloginfo('template_url') ?>/src/img/main-page/agronovia.webp" alt="Создаем сайты для бизнеса">
					</picture>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
