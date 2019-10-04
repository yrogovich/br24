(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){
        SmoothScroll({ 
            animationTime: 800,
            stepSize: 85 
        });
        
        // Lazyloading
        $('.lazy').Lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            effectTime: 500,
            //threshold: 0,
            visibleOnly: true,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });

        // Tabs script
        if($(location).attr('hash')) {
            var activeTab = $(location).attr('hash');
        }
        else {
            var activeTab = $('#tabs .tabs-nav li:first-child a').attr("href");
        }
        
        activateTab();
        
        $("#tabs .tabs-nav a").click(function(e) {
            deactivateTabs();
            activeTab = $(this).attr("href");
            activateTab();
            return false;
        });
        
        function activateTab() {
            $(activeTab).addClass('active');
            $('#tabs .tabs-nav li a[href="'+activeTab+'"]').addClass('active');
        }
        function deactivateTabs() {
            $(activeTab).removeClass('active');
            $('#tabs .tabs-nav li a[href="'+activeTab+'"]').removeClass('active');
        }

        $('.show-all').nextAll('.seo-case').fadeOut();

        $('.show-all').click(function(){
            $(this).slideToggle();
            toggleCases(this);
            
            return false;
        });
        
        function toggleCases(object) {
            $(object).nextAll('.seo-case').fadeToggle("slow")
        }

        // Mobile menu handler
        $(".mobile-menu-toggle").click(function() {
            $(".mobile-navbar").toggleClass("active");
            $('body').toggleClass("overflow");     
        });

        // Modal script
        $('a[rel="modal:open"]').click(function() {
            var modalName = $(this).attr('href');
            $(modalName).addClass("active");
            return false;
        });
        $('a[rel="modal:close"]').click(function(){
            $('.overlay').removeClass('active');
            return false;
        });
        $(document).on('keydown', function(event) {
            if (event.key == "Escape") {
                $('.overlay').removeClass('active');
            }
        });

        // function counter() {
            $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');    

                $({ countNum: $this.text()}).animate({
                  countNum: countTo
                }, {              
                  duration: 3000,
                  easing:'swing',
                  step: function() {
                    $this.text(Math.floor(this.countNum));
                  },
                  complete: function() {
                    $this.text(this.countNum);
                  }             
                });                                      
              });
        // }
        // setTimeout(counter, 1000);

        $('#menu_middle li:first-child').addClass('current active');
        
        $('#menu_middle li')
            .on('mouseover', function() {
                var li$ = $(this);
                li$.parent('ul').find('li').removeClass('active');
                li$.addClass('active');
            })
            .on('mouseout', function() {
                var li$ = $(this);
                li$.removeClass('active');
                li$.parent('ul').find('li.current').addClass('active');
            });
        
        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 0.2, {
                x: -((mouse.clientX - window.innerWidth / 2) / resistance),
                y: -((mouse.clientY - window.innerHeight / 2) / resistance)
            });
        };
            
        $(document).mousemove(function(e) {
            $(".circle-1").parallax(50, e);
            $(".circle-2").parallax(20, e);
            $(".circle-3").parallax(-25, e);
            $(".circle-4").parallax(40, e);
            $(".circle-5").parallax(80, e);
        });  
    });

})(jQuery); // <----- jQuery no conflict wrapper

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #efefef}";
    document.body.appendChild(css);
};

// Youtube
(function() {
	var youtube = document.querySelectorAll( ".youtube" );	
	for (var i = 0; i < youtube.length; i++) {		
		var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";		
		var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
            youtube[ i ].appendChild( image );
        }( i ) );		
        youtube[i].addEventListener( "click", function() {
            var iframe = document.createElement( "iframe" );
                    iframe.setAttribute( "frameborder", "0" );
                    iframe.setAttribute( "allowfullscreen", "" );
                    iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
                    this.innerHTML = "";
                    this.appendChild( iframe );
        } );	
	};	
})();
