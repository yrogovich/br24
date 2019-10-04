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
<script>
(function($){    
    $(document).ready(function(){
        try {
            var carousel = $("#slider").waterwheelCarousel({
                separation: 85,
                keyboardNav: true
            });
            $(".arrow-left").click(function(){
                carousel.next()
            });
            $(".arrow-right").click(function(){
                carousel.prev()
            });
        } catch (e) {
            console.log(e);
        }
    });

})(jQuery); // <----- jQuery no conflict wrapper
</script>