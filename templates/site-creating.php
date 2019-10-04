<?php
/*
*   Template name: Создание сайтов
*/
get_header();
?>
<div class="site-creating-page">
    <header>
        <div class="container">
            <div class="hero">
                <div class="hero-left">
                    <h1 class="h1">
                        <span class="primary d-block">Создание и обслуживание</span> всех типов сайтов
                    </h1>

                    <ol class="style-1">
                        <li>
                            <div class="block">
                                <span class="title">Быстрая мобильная версия</span>
                                Показатели скорости 80+/80+ (десктоп, мобайл) по требованиям
                                <a href="https://developers.google.com/speed/pagespeed/insights" target="_blank" class="link d-block break-all">https://developers.google.com/speed/pagespeed/insights</a>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <span class="title">Работаем с любыми CMS</span>
                                Интернет-магазины, агрегаторы, корпоративные саййты, лендинги
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <span class="title">СЕО подготовка для всех новых сайтов</span>
                                Отсутствие ошибок, высокая скорость, дружелюбность к поисковым
                                системам с рождения. Отдельно услуга стоит 10т.р.
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <span class="title">Хостинг в подарок всем клиентам</span>
                                Профессиональных хостинг на 4 месяца
                            </div>
                        </li>
                    </ol>

                    <a href="#popup-request" rel="modal:open" class="btn btn-primary btn-lg btn-shadow">Узнать стоимость</a>
                </div>
                <div class="hero-right">
                    <img src="<?php bloginfo('template_url') ?>/src/img/creating/main-image.png" alt="Создаем сайты для бизнеса">
                </div>
            </div>
        </div>
    </header>

    <?php get_template_part('templates/parts/cases') ?>

    <div class="section" id="prices">
        <div class="container">
            <div class="h2">стоимость</div>
            <div class="h2-primary">Наши цены</div>
            
            <div class="packages">
                <div class="package">
                    <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/landing-icon.svg" alt="Продающий лендинг">
                        </div>
                        <div class="title">Продающий лендинг</div>
                        <div class="sub-title">Идеальное решение
                            <span class="d-block">для старта монопродукта</span>
                        </div>
                    </div>
                    <!-- /.head -->
                    <div class="body">
                        <ul class="primary">
                            <li>Маркетинговый аудит продукта</li>
                            <li>Детальный продающий прототип</li>
                            <li>Уникальный дизайн сайта</li>
                            <li>Мобильная версия сайта</li>
                            <li>Страница "Спасибо"</li>
                            <li>Сроки создания - 10-15 дней</li>
                            <li>Бесплатное обслуживание - 15 дней</li>
                        </ul>
                    </div>
                    <!-- /.body -->
                    <div class="foot">
                        <div class="price">от 20 т.р.</div>
                        <a href="#popup-buy-landing" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                    </div>
                    <!-- /.foot -->
                </div>
                <!-- /.package -->

                <div class="package">
                    <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/web-site-icon.svg" alt="Корпоративный сайт">
                        </div>
                        <div class="title">Корпоративный сайт</div>
                        <div class="sub-title">Многостраничный сайт для компании с несколькими продуктами</div>
                    </div>
                    <!-- /.head -->
                    <div class="body">
                        <ul class="primary">
                            <li>Маркетинговый аудит продукта</li>
                            <li>Детальный продающий прототип</li>
                            <li>Уникальный дизайн сайта</li>
                            <li>Мобильная версия сайта</li>
                            <li>Страница "Спасибо"</li>
                            <li>SEO оптимизация</li>
                            <li>Настройка Яндекс Метрики + цели</li>
                            <li>Сроки создания - 15-20 дней</li>
                            <li>Бесплатное обслуживание - 30 дней</li>
                        </ul>
                    </div>
                    <!-- /.body -->
                    <div class="foot">
                        <div class="price">от 30 т.р.</div>
                        <a href="#popup-buy-corp-site" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                    </div>
                    <!-- /.foot -->
                </div>
                <!-- /.package -->

                <div class="package">
                    <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/online-shop-icon.svg" alt="Интернет-магазин">
                        </div>
                        <div class="title">Интернет-магазин</div>
                        <div class="sub-title">Классическое решение для онлайн продаж</div>
                    </div>
                    <!-- /.head -->
                    <div class="body">
                        <ul class="primary">
                            <li>Маркетинговый аудит продукта</li>
                            <li>Детальный продающий прототип</li>
                            <li>Уникальный дизайн сайта</li>
                            <li>Мобильная версия сайта</li>
                            <li>Страница "Спасибо"</li>
                            <li>SEO оптимизация</li>
                            <li>Настройка Яндекс Метрики + цели</li>
                            <li>Установка чат-бота на сайт</li>
                            <li>Наполнение 10 товарами для тестирования</li>
                            <li>Сроки создания - 20-25 дней</li>
                            <li>Бесплатное обслуживание - 30 дней</li>
                        </ul>
                    </div>
                    <!-- /.body -->
                    <div class="foot">
                        <div class="price">от 40 т.р.</div>
                        <a href="#popup-buy-online-shop" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                    </div>
                    <!-- /.foot -->
                </div>
                <!-- /.package -->
            </div>
            <!-- /.packages -->

            <div class="h3">Стоимость технического обслуживания сайтов</div>
           <div class="tech-packages">
               <div class="tech-package">
                   <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/time-20.svg" alt="time-20">
                        </div>
                        <div class="title">Первые 20 часов работ</div>
                   </div>
                   <!-- /.head -->
                   <div class="foot">
                        <div class="price">1000 р./ч.</div>
                        <a href="#popup-tech-time-20" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                   </div>
                   <!-- /.body -->
               </div>
               <!-- /.tech-package -->
               <div class="tech-package">
                   <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/time-50.svg" alt="time-20">
                        </div>
                        <div class="title">20-50 часов</div>
                   </div>
                   <!-- /.head -->
                   <div class="foot">
                        <div class="price">900 р./ч.</div>
                        <a href="#popup-tech-time-50" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                   </div>
                   <!-- /.body -->
               </div>
               <!-- /.tech-package -->
               <div class="tech-package">
                   <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/time-70.svg" alt="time-70">
                        </div>
                        <div class="title">50-100 часов</div>
                   </div>
                   <!-- /.head -->
                   <div class="foot">
                        <div class="price">800 р./ч.</div>
                        <a href="#popup-tech-time-100" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                   </div>
                   <!-- /.body -->
               </div>
               <!-- /.tech-package -->
               <div class="tech-package">
                   <div class="head">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url') ?>/src/img/creating/time-100.svg" alt="time-100">
                        </div>
                        <div class="title">Более 100 часов</div>
                   </div>
                   <!-- /.head -->
                   <div class="foot">
                        <div class="price">700 р./ч.</div>
                        <a href="#popup-tech-time-over100" rel="modal:open" class="btn btn-primary btn-opacity">Заказать</a>
                   </div>
                   <!-- /.body -->
               </div>
               <!-- /.tech-package -->
           </div>
           <!-- /.tech-packages -->
            
        </div>
    </div>
    <!-- /#prices.section -->

    <div class="section" id="services">
        <div class="container">
            <div class="h2">Разделы</div>
            <div class="h2-primary">Уверены, вам тоже будет интересно</div>
            <div class="service-container">
                <?php get_template_part('templates/service-cards/seo') ?>
                <?php get_template_part('templates/service-cards/context-ad') ?>
                <?php get_template_part('templates/service-cards/tech-maintence') ?>
                <?php get_template_part('templates/service-cards/design') ?>
            </div>
            <!-- /.service-container -->       
        </div>
    </div>
    <!-- /#services.section -->

</div>

<!-- PopUp -->
<div id="popup-buy-landing" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">Продающий лендинг</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#buy-landing-form')" id="buy-landing-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Продающий лендинг">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-buy-corp-site" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">Корпоративный сайт</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#buy-corp-site-form')" id="buy-corp-site-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Корпоративный сайт">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-buy-online-shop" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">Интернет-магазин</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#buy-online-shop-form')" id="buy-online-shop-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Интернет-магазин">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-tech-time-20" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">Первые 20 часов работ</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#tech-time-20-form')" id="tech-time-20-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Первые 20 часов работ">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-tech-time-50" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">20-50 часов обслуживания</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#tech-time-50-form')" id="tech-time-50-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="20-50 часов обслуживания">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-tech-time-100" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">50-100 часов обслуживания</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#tech-time-100-form')" id="tech-time-100-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="50-100 часов обслуживания">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-tech-time-over100" class="overlay">
    <div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
        
        <div class="content">
            <div class="title">
                <div class="h">Более 100 часов обслуживания</div>
                <div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
            </div>
            <form action="javascript:" onsubmit="callHandler('#tech-time-over100-form')" id="tech-time-over100-form">
                <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                <input type="hidden" name="form" value="Более 100 часов обслуживания">
                <div class="input-wrapper icon i-user">
                    <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                </div>
                <div class="input-wrapper icon i-phone">
                    <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                </div>
                <div class="input-wrapper icon i-mail">
                    <input type="mail" placeholder="Введите ваш e-mail">
                </div>
                <button class="btn btn-form btn-shadow">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>
<!-- /PopUp -->
<?php get_footer(); ?>