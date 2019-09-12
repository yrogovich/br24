<?php
/*
*   Template name: Политика приватности
*/
get_header();
?>

<header>
    <?php get_template_part('templates/parts/navbar') ?>

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


<?php get_footer(); ?>