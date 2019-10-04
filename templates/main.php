<?php
/*
*   Template name: Главная страница
*/
get_header();
?>

<div class="main-page">

<header>
    <div class="container translateYCenter">
        <div class="hero">
            <div class="hero-left">
                <h1 class="h1">
                    <span href="" class="typewrite primary" data-period="2500" data-type='[ "cоздаем", "продвигаем", "обслуживаем" ]'>
                        <span class="wrap"></span>
                    </span>
                    сайты 
                    <span class="d-md-block">для бизнеса</span>
                </h1>

                <a href="#popup-request"  rel="modal:open" class="btn btn-primary btn-lg btn-shadow">Оставить заявку сейчас</a>

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
                    <source type="image/webp" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/autonova.webp">
                    <source type="image/png" srcset="<?php bloginfo('template_url') ?>/src/img/main-page/autonova.png">
                    <img src="<?php bloginfo('template_url') ?>/src/img/main-page/autonova.png" alt="Создаем сайты для бизнеса">
                </picture>
            </div>
        </div>
    </div>
</header>

<!-- <div class="section sticky-section" id="stock">
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
                    <p class="banner-text">Оставьте заявку, что бы мы забронировали за вами бонус. Акция действует до 1 <?php echo MONTH[date('n')]; ?> 2019г.</p>
                    <a href="#popup-request" rel="modal:open" class="btn btn-primary btn-lg i-gift">Забронировать бонус</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- /#stock.section -->

<div class="container">
    <div class="sticky-section animationFadeIn" id="world-clients">
        <div class="wrapper">
            <div class="text">
                <h2>Более 150 клиентов <span class="d-block">из 5 стран мира</span></h2>
                <p>Успешный опыт работы с клиентами из:</p>
                <ul class="flags">
                    <li class="by">Беларусь</li>
                    <li class="en">Англия</li>
                    <li class="ru">Россия</li>
                    <li class="cz">Чехия</li>
                    <li class="kz">Казахстан</li>
                </ul>

                <a href="#popup-request" rel="modal:open" class="btn btn-primary btn-opacity">Стать нашим клиентом</a>
            </div>
            <!-- /.text -->
            <div id="world">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie_light.min.js"></script>
                <script>
                    var worldAnimation = bodymovin.loadAnimation({
                        container: document.getElementById("world"),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '<?php bloginfo('template_url'); ?>/src/json/data.json'
                    });
                </script>
            </div>
            <!-- /.world -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#world-clients -->
</div>
<!-- /.container -->

<div class="section" id="services">
    <div class="container">
        <div class="h2">Услуги</div>
        <div class="h2-primary">Мы умеем лучше всего:</div>
        <div class="service-container big-margin">
            <?php get_template_part('templates/service-cards/site-creating') ?>
            <?php get_template_part('templates/service-cards/seo') ?>
            <?php get_template_part('templates/service-cards/context-ad') ?>
            <?php get_template_part('templates/service-cards/design') ?>
            <?php get_template_part('templates/service-cards/video-creating') ?>
            <?php get_template_part('templates/service-cards/tech-maintence') ?>
        </div>
        <!-- /.service-container -->

        <div class="technologys-container">
            <div class="h3 h3-style-2">Технологии с которыми мы работаем</div>
            <img data-src="<?php bloginfo('template_url') ?>/src/img/main-page/technology/technology-all.png" alt="technology-all" class="lazy technologys">
        </div>
        <!-- /.technologys-container -->   
    </div>
</div>
<!-- /#services.section -->

<?php get_template_part('templates/parts/cases') ?>

<div class="section lazy" id="reviews" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/mountains-bg.jpg">
    <div class="container">
        <div class="h2">Отзывы</div>
        <div class="h2-primary">Что о нас говорят?</div>

        <?php get_template_part('templates/parts/reviews') ?>

        <?php get_template_part('templates/parts/videos') ?>

        <div class="h3 h3-style-2">Нам доверяют</div>
        <?php get_template_part('templates/parts/brands-grid') ?>
    </div>
</div>
<!-- /#reviews.section -->

<div class="section lazy" id="about-company" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/br-background.jpg">
    <div class="container">
        <div class="h3">Коротко о нашей компании</div>
        <div class="primary-text">Компания «БИЗНЕС РОСТ» профессионально занимается продвижением и рекламой с 2008 года.</div>
        <p>Мы готовы предложить максимально эффективные решения в области интернет продаж каждому клиенту, сохраняя при этом выгодную для клиентов стоимость услуг. Мы работаем профессионально, четко и очень быстро.  Мы ценим наших клиентов и готовы сотрудничать с представителями крупного и малого бизнеса. <strong>У нас можно заказать лендинг.</strong> Свяжитесь с нами прямо сейчас, доверьте рост ваших продаж профессионалам!</p>

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

        <div class="pair">
            <div class="big-text">
                <span href="" class="typewrite primary" data-period="2500" data-type='[ "cоздаем", "продвигаем", "обслуживаем" ]'>
                    <span class="wrap"></span>
                </span>
                сайты для бизнеса
            </div>
            <a href="#popup-request" rel="modal:open" class="btn btn-primary btn-lg btn-shadow">Оставить заявку сейчас</a>
        </div>
    </div>
</div>
<!-- /#about-company.section -->
<div class="section" id="contacts">
    <div class="container">
        <div class="h2">Контакты</div>

        <div class="contacts-card">
            <div class="col-left">  
                <div class="title">Компания «Бизнес Рост»</div>
                <p class="subtitile">Агенство эффективного интернет-маркетинга. Работаем в России и Беларуси уже более 8 лет.</p>
                <div class="hr"></div>
                <div class="title icon-map">Адрес</div>
                <p class="margin">Беларусь, г. Гомель, ул. Советская, 61. Офис 206</p>
                <div class="title icon-phone">Телефон</div>
                <a class="margin phone-link" href="tel:<?=PHONE_HREF?>"><?=PHONE?></a>
                <div class="hr"></div>

                <p class="bold">Остались вопросы?</p>
                <p class="gray-text">Задайте их нашему специалисту</p>
                <a href="#popup1" rel="modal:open" class="btn btn-primary btn-lg btn-shadow i-msg">Бесплатная консультация</a>

                <div class="social-links">
                    <a href="<?=VIBER_LINK?>" class="btn btn-viber viber-desktop">Viber</a>
                    <a href="<?=VIBER_MOBILE_LINK?>" class="btn btn-viber viber-mobile">Viber</a>
                    <a href="<?=WHATSAPP_LINK?>" target="_blank" class="btn btn-whatsapp">WhatsApp</a>
                    <a href="<?=TELEGRAM_LINK?>" target="_blank" class="btn btn-telegram">Telegram</a>
                </div>	
            </div>
            <div class="col-right">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<!-- /#contacts.section -->

</div>

<?php get_footer(); ?>