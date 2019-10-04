<?php
/*
*   Template name: Youtube
*/
get_header();
?>
<div class="youtube-page">
    <header>
        <div class="container">
            <div class="hero">
                <div class="hero-left">
                    <h1 class="h1">
                        <span class="primary d-block">Создание и оформление</span> видеороликов для YouTube
                    </h1>

                    <ol class="style-1">
                        <li>
                            <div class="block">
                                <span class="title">Видео о компании</span>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <span class="title">Видео отзывы</span>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <span class="title">Видео о продукте</span>
                            </div>
                        </li>
                    </ol>

                    <a href="#popup-request" rel="modal:open" class="btn btn-primary btn-lg btn-shadow">Узнать стоимость</a>
                </div>
                <div class="hero-right">
                    <img src="<?php bloginfo('template_url') ?>/src/img/youtube.png" alt="Создаем сайты для бизнеса">
                </div>
            </div>
        </div>
    </header>

    <div class="section" id="seo-cases">
        <div class="container">
            <div class="h2">Кейсы</div>
            <div class="h2-primary">Наши работы</div>
            
            <div class="videos">
                <div class="video-card">
                    <div class="youtube" data-embed="l2AbMpRMvkI">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Лорд</div>
                    </div>
                </div>
                <!-- /.video-card -->
                
                <div class="video-card">
                    <div class="youtube" data-embed="47v0zwtFXVo">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Пример видео инструкции по работе с AMO CRM</div>
                    </div>
                </div>
                <!-- /.video-card -->

                <div class="video-card">
                    <div class="youtube" data-embed="dllOBgLyoPw">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Агроновия. Гидропонные комплексы</div>
                    </div>
                </div>
                <!-- /.video-card -->
                
                <div class="video-card">
                    <div class="youtube" data-embed="RTV2zbZ0338">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Мануальный терапевт</div>
                    </div>
                </div>
                <!-- /.video-card -->
                <div class="video-card">
                    <div class="youtube" data-embed="nXFgOvYDNqA">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Климолог</div>
                    </div>
                </div>
                <!-- /.video-card -->
                <div class="video-card">
                    <div class="youtube" data-embed="zF9ZXj6pP8M">
                        <div class="play-button"></div>
                    </div>
                    <div class="text">
                        <div class="title">Узнайте за 7 минут как просто и быстро продвигать лендинги в SEO</div>
                    </div>
                </div>
                <!-- /.video-card -->
            </div>
            
        </div>
    </div>
    <!-- /#services.section -->

    <div class="section" id="services">
    <div class="container">
        <div class="h2">Разделы</div>
        <div class="h2-primary">Уверены, вам это тоже будет интересно</div>
        <div class="service-container">
            <?php get_template_part('templates/service-cards/site-creating') ?>
            <?php get_template_part('templates/service-cards/context-ad') ?>
            <?php get_template_part('templates/service-cards/tech-maintence') ?>
            <?php get_template_part('templates/service-cards/design') ?>
        </div>
        <!-- /.service-container -->       
    </div>
</div>
<!-- /#services.section -->

</div>
<?php get_footer(); ?>