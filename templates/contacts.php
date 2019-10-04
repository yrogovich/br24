<?php
/*
*   Template name: Контакты
*/
get_header();
?>
<div class="contacts-page">
    <div class="section lazy" id="reviews" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/mountains-bg.jpg">
        <div class="container">
            <div class="h2-primary">Контакты</div>
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
                    <div id="map">
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac7d87e8430b4178367d02f242d76645b79b73607df715017ad24b72553e52d29&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#reviews.section -->

</div>
<?php get_footer(); ?>