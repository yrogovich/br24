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
                <img class="bage" src="<?php bloginfo("template_url") ?>/src/img/main-page/flag.webp" alt="Акция месяца">
                <div class="col-left">
                    <picture>
						<source type="image/webp" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/banner.webp">
						<source type="image/png" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/banner.png">
						<img class="lazy" style="margin-bottom: -4px;" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/banner.webp" alt="1 месяц SEO продвижения">
					</picture>
                </div>
                <div class="col-right">
                    <p class="banner-header">
                    1 месяц SEO продвижения в подарок
                    </p>
                    <p class="banner-text">Оставьте заявку, что бы мы забронировали за вами бонус. Акция действует до 31 <?php echo MONTH[date('n')-1]; ?> 2019г.</p>
                    <a href="#" class="btn btn-primary btn-lg i-gift">Забронировать бонус</a>
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
        <!-- <div class="img-wrapper">
            <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/banner.png" alt="spinner">
        </div> -->
        <div class="service-container">
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-site-creating.jpg" alt="Создание сайтов">
                    </div>
                    <div class="col-right">
                        <div class="head-text">Создание сайтов</div>

                        <ul class="links">
                            <li><a href="#">Лендинг</a></li>
                            <li><a href="#">Корпаративный сайт</a></li>
                            <li><a href="#">Интернет магазин / каталог</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-seo.jpg" alt="SEO продвижение">
                    </div>
                    <div class="col-right">
                        <div class="head-text">SEO продвижение</div>

                        <ul class="links">
                            <li><a href="#">SEO пакеты</a></li>
                            <li><a href="#">Техническая оптимизация</a></li>
                            <li><a href="#">Продвижение в YouTube</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-context-ads.jpg" alt="Контекстная реклама">
                    </div>
                    <div class="col-right">
                        <div class="head-text">Контекстная реклама</div>

                        <ul class="links">
                            <li><a href="#">Яндекс Директ</a></li>
                            <li><a href="#">Google AdWords</a></li>
                            <li><a href="#">Социальные сети</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-design.jpg" alt="Дизайн">
                    </div>
                    <div class="col-right">
                        <div class="head-text">Дизайн</div>

                        <ul class="links">
                            <li><a href="#">Дизайн сайтов</a></li>
                            <li><a href="#">Маркейтинг кит</a></li>
                            <li><a href="#">Наружная реклама</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-video-editing.jpg" alt="Видеореклама">
                    </div>
                    <div class="col-right">
                        <div class="head-text">Видеореклама</div>

                        <ul class="links">
                            <li><a href="#">Видео для You Tube</a></li>
                            <li><a href="#">2D / 3D ролики</a></li>
                            <li><a href="#">Монтаж / озвучка</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
            <div class="service-card">
                <div class="row">
                    <div class="col-left">
                        <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/services/biznesrost-maintenance-cost.jpg" alt="Тех. обслуживание сайтов">
                    </div>
                    <div class="col-right">
                        <div class="head-text">Тех. обслуживание сайтов</div>

                        <ul class="links">
                            <li><a href="#">Наполнение интернет магазина</a></li>
                            <li><a href="#">Внесение изменений на сайт</a></li>
                            <li><a href="#">Копирайт</a></li>
                        </ul>

                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- /.service-card -->
        </div>
        <!-- /.service-container -->
        
    </div>
</div>
<!-- /#services.section -->


<?php get_footer(); ?>