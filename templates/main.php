<?php
/*
*   Template name: Главная страница
*/
get_header();
?>

<div class="section" id="stock">
    <div class="container">
        <div class="h2">Акция</div>
        <div class="banner-container">           
            <p class="warning-text">Это нельзя пропустить!</p>
            <div class="banner">
                <img class="bage" src="<?php bloginfo("template_url") ?>/src/img/main-page/flag.webp" alt="flag">
                <div class="col-left">
                    <picture>
						<source type="image/webp" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/banner.webp">
						<source type="image/png" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/banner.png">
						<img style="margin-bottom: -4px;" src="<?php bloginfo('template_url') ?>/src/img/main-page/banner.webp" >
					</picture>
                </div>
                <div class="col-right">
                    <p class="banner-header">
                    1 месяц SEO продвижения в подарок
                    </p>
                    <p class="banner-text">Оставьте заявку, что бы мы забронировали за вами бонус. Акция действует до 31 <?php echo MONTH[date('n')-1]; ?> 2019г.</p>
                    <a href="#" class="btn btn-primary i-gift">Забронировать бонус</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#stock.section -->
<div class="section" id="services">
    <div class="container">
        <div class="h2">Услуги</div>
        <div class="h2-primary">Мы умеем лучше всего:</div>
    </div>
</div>
<!-- /#services.section -->


<?php get_footer(); ?>