(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
        //  Add handler for showing world section
        var handlerWorld = function () {
            var windowTop = $(this).scrollTop();
            if (windowTop > 10) {
                $('#world-clients').removeClass("animationFadeIn");
                $('header .container').removeClass("translateYCenter");
                $(window).unbind( "scroll", handlerWorld );
            }
        };
        handlerWorld();
        $(window).bind( "scroll", handlerWorld );  

        //  Show ymaps on scroll
        var point = $('#services');
        var pointTop = point.offset().top;
        var handler = function () {
            var windowTop = $(this).scrollTop();
            if (windowTop > pointTop) {
                $('#map').html('<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac7d87e8430b4178367d02f242d76645b79b73607df715017ad24b72553e52d29&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>');
                $(window).unbind( "scroll", handler );
            }
        };
        $(window).bind( "scroll", handler );       
    });

})(jQuery); // <----- jQuery no conflict wrapper
