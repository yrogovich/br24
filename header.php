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
					<a href="tel:<?=PHONE_HREF?>" class="phone-link"><?=PHONE?></a>

					<div class="social-toggle">
						<i class="fas fa-angle-down"></i>
					</div>
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
						<span class="d-block">для бизнеса</span>
					</h1>

					<a href="#" class="btn btn-primary btn-shadow">Оставить заявку сейчас</a>
				</div>
				<div class="hero-right">

				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
