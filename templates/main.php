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
                    <a href="#popup-request" class="btn btn-primary btn-lg i-gift">Забронировать бонус</a>
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
<div class="section gray" id="cases">
    <div class="container">
        <div class="h2">Кейсы</div>
        <div class="h2-primary">Наши проекты</div>
       
        <div class="cases-container">
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
            <div class="case-card">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/cases/biznesrost-case-1.jpg" alt="Маркизы и перголы в Москве">
                </div>
                <div class="text-wrapper">
                    <div class="title">Маркизы и перголы в Москве</div>
                    <div class="hr"></div>
                    <div class="pair">
                        <div class="col">
                            <span class="gray-text">Сайт каталог</span>
                            <a href="http://pergoly-markizy.ru/" target="_blank" class="link">pergoly-markizy.ru</a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- /.case-card -->
        </div>
        <!-- /.cases-container -->
        <div class="text-center">
            <a href="#" class="btn btn-with-case">Перейти в портфолио</a>
        </div>
    </div>
</div>
<!-- /#cases.section -->
<div class="section lazy" id="reviews" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/mountains-bg.jpg">
    <div class="container">
        <div class="h2">Отзывы</div>
        <div class="h2-primary">Что о нас говорят?</div>

        <div class="rewiews">
            <div class="rewiew">
                <div class="pair">
                    <div>
                        <div class="title">ООО «Глонасс Северо-Запад»</div>
                        <a href="http://glonassnw.ru/" class="link" target="_blank">glonassnw.ru</a>
                    </div>
                    <div class="navigation">
                        <div class="arrow-left"></div>
                        <div class="pair-2">
                            <div class="digits">
                                <div class="digit">1</div>
                                 /8
                                
                            </div>
                            <div class="text">
                                отзыв
                                </div>
                        </div>
                        <div class="arrow-right"></div>
                    </div>
                </div>
                <div class="paragraph">
                    <img src="<?php bloginfo('template_url') ?>/src/img/icons/quote.svg" alt="quote" class="quote">
                    <p>ООО «Глонасс Северо-Запад» выражает искреннюю признательность компании Бизнес Рост за оперативное создание посадочной страницы (Landing Page) для нашей организации. Хотели бы поблагодарить за высокий профессионализм, творческий подход. Все наши пожелания были учтены и реализованы, несмотря на то, что наша компания предоставляет довольно специфические услуги, где непросто разобраться. Был очень грамотно проведен маркетинговый аудит, вследствие чего, нам практически не пришлось вносить корректировки. Работа была выполнена оперативно и качественно.</p>
                </div>
            </div>
            <div id="slider">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/reviews/biznesrost-sertificate-1.jpg" alt="biznesrost-sertificate-1" class="lazy">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/reviews/biznesrost-sertificate-2.jpg" alt="biznesrost-sertificate-2" class="lazy">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/reviews/biznesrost-sertificate-3.jpg" alt="biznesrost-sertificate-3" class="lazy">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/reviews/biznesrost-sertificate-4.jpg" alt="biznesrost-sertificate-4" class="lazy">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/reviews/biznesrost-sertificate-5.jpg" alt="biznesrost-sertificate-5" class="lazy">
            </div>
        </div>

        <div class="videos">
            <div class="video-card">
                <div class="youtube" data-embed="AqcjdkPMPJA">
                    <div class="play-button"></div>
                </div>
                <div class="text">
                    <div class="title">Иванов Павел</div>
                    <div class="pair">
                        <p class="gray-text">Руководитель группы компаний «Гефест Капитал»</p>
                        <a href="https://www.gefestcapital.ru/" class="link" target="_blank">gefestcapital.ru</a>
                    </div>
                </div>
            </div>
            <div class="video-card">
                <div class="youtube" data-embed="AqcjdkPMPJA">
                    <div class="play-button"></div>
                </div>
                <div class="text">
                    <div class="title">Иванов Павел</div>
                    <div class="pair">
                        <p class="gray-text">Руководитель группы компаний «Гефест Капитал»</p>
                        <a href="https://www.gefestcapital.ru/" class="link" target="_blank">gefestcapital.ru</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="h3 h3-style-2">Нам доверяют</div>
        <div class="brands-grid">
            <div class="brand brand-1">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/bosh.png" alt="bosh" class="lazy">
            </div>
            <div class="brand brand-2">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/citroen.png" alt="citroen" class="lazy">
            </div>
            <div class="brand brand-3">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/tricolor.png" alt="tricolor" class="lazy">
            </div>
            <div class="brand brand-4">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/gefest.png" alt="gefest" class="lazy">
            </div>
            <div class="brand brand-5">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/nettlebox.png" alt="nettlebox" class="lazy">
            </div>
            <div class="brand brand-6">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/radamir.png" alt="radamir" class="lazy">
            </div>
            <div class="brand brand-7">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/rivera.png" alt="rivera" class="lazy">
            </div>
            <div class="brand brand-8">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/avon.png" alt="avon" class="lazy">
            </div>
            <div class="brand brand-9">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/palas_copy.png" alt="palas_copy" class="lazy">
            </div>
            <div class="brand brand-10">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/belinka.png" alt="belinka" class="lazy">
            </div>
            <div class="brand brand-11">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/hdlt.png" alt="hdlt" class="lazy">
            </div>
            <div class="brand brand-12">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/avtospas.png" alt="avtospas" class="lazy">
            </div>
            <div class="brand brand-13">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/glonas.png" alt="glonas" class="lazy">
            </div>
            <div class="brand brand-14">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/rancio.png" alt="rancio" class="lazy">
            </div>
            <div class="brand brand-15">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/cp.png" alt="cp" class="lazy">
            </div>
            <div class="brand brand-16">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/aurora.png" alt="aurora" class="lazy">
            </div>
            <div class="brand brand-17">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/limadas.png" alt="limadas" class="lazy">
            </div>
            <div class="brand brand-18">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/arkizu.png" alt="arkizu" class="lazy">
            </div>
            <div class="brand brand-19">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/neva.png" alt="neva" class="lazy">
            </div>
            <div class="brand brand-20">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/alfa.png" alt="alfa" class="lazy">
            </div>
            <div class="brand brand-21">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/germes.png" alt="germes" class="lazy">
            </div>
            <div class="brand brand-22">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/lord.png" alt="lord" class="lazy">
            </div>
            <div class="brand brand-23">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/divi.png" alt="divi" class="lazy">
            </div>
            <div class="brand brand-24">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/gidvokruf.png" alt="gidvokruf" class="lazy">
            </div>
            <div class="brand brand-25">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/odv.png" alt="odv" class="lazy">
            </div>
            <div class="brand brand-26">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/agronovia.png" alt="agronovia" class="lazy">
            </div>
            <div class="brand brand-27">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/rosstrans.png" alt="rosstrans" class="lazy">
            </div>
            <div class="brand brand-28">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/art.png" alt="art" class="lazy">
            </div>
            <div class="brand brand-29">
                <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/aresa-logo.png" alt="aresa-logo" class="lazy">
            </div>
        </div>
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
            <div class="big-text"><span class="primary">Создаем</span> сайты для бизнеса</div>
            <a href="#popup-request" class="btn btn-primary btn-lg btn-shadow">Оставить заявку сейчас</a>
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
                <a href="#" class="btn btn-primary btn-lg btn-shadow i-msg">Бесплатная консультация</a>

                <div class="social-links">
                    <a href="#" class="btn btn-viber">Viber</a>
                    <a href="#" class="btn btn-whatsapp">WhatsApp</a>
                    <a href="#" class="btn btn-telegram">Telegram</a>
                </div>
            </div>
            <div class="col-right">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<!-- /#contacts.section -->


<?php get_footer(); ?>