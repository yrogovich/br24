<nav class="navbar">
    <div class="navbar-top">
        <div class="container">
        <?php 
        wp_nav_menu( [
            'menu'            => 'menu_top', 
            'menu_class'      => 'menu', 
            'menu_id'         => 'menu_top',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ] ); 
        ?>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar-top -->
    <div class="navbar-middle">
        <div class="container">
            <a class="logo" href="<?php echo get_home_url() ?>" rel="home" titile="Бизнесрост">
                <img class="logo-img" 
                    src="<?php bloginfo('template_url') ?>/src/img/biznesrost_logo.svg"
                    alt="Бизнесрост логотип"
                    titile="Бизнесрост"
                    onerror="this.onerror=null; this.src='<?php bloginfo('template_url') ?>/src/img/biznesrost_logo.png'">
                <span class="logo-text">Агенство эффективного интернет-маркетинга</span>
            </a>
            <?php if(is_home() || is_front_page()) : ?>
            <ul id="menu_middle" class="menu">
                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11 current active"><a href="#stock">Акции</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#services">Услуги</a></li>
                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#cases">Портфолио</a></li>
                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#reviews">Отзывы</a></li>
            </ul>
            <?php else: ?>
            <ul id="menu_middle" class="menu">
                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11 current active"><a href="<?php echo get_home_url( ) ?>/#stock">Акции</a></li>
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="<?php echo get_home_url() ?>/#services">Услуги</a></li>
                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="<?php echo get_home_url() ?>/#cases">Портфолио</a></li>
                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="<?php echo get_home_url() ?>/#reviews">Отзывы</a></li>
            </ul>
            <?php endif; ?>
            
            <a href="#popup1" rel="modal:open" class="btn btn-inverse">Заказать звонок</a>
            <div class="pair show-socials">
                <a href="tel:<?=PHONE_HREF?>" class="phone-link"><?=PHONE?></a>
                <div class="social-toggle">
                    <i class="fas fa-angle-down"></i>
                    <div class="social-menu">
                        <div class="body">
                            <div class="social-links">
                                <a href="<?=VIBER_LINK?>" class="btn btn-viber viber-desktop">Viber</a>
                                <a href="<?=VIBER_MOBILE_LINK?>" class="btn btn-viber viber-mobile">Viber</a>
                                <a href="<?=WHATSAPP_LINK?>" target="_blank" class="btn btn-whatsapp">WhatsApp</a>
                                <a href="<?=TELEGRAM_LINK?>" target="_blank" class="btn btn-telegram">Telegram</a>
                            </div>	
                        </div>
                        <!-- /.body -->
                        <div class="foot">
                            <div class="gray-text">Время работы:</div>
                            <div class="work-time">
                                <span>Понед.-Пятница</span>
                                <span>с 9<sup>00</sup> до 18<sup>00</sup></span>
                            </div>
                        </div>
                        <!-- /.foot -->
                    </div>
                    <!-- /.social-menu -->
                </div>
            </div>

            <svg class="mobile-menu-toggle ham ham6" viewBox="10 10 80 80" width="50" onclick="this.classList.toggle('active')">
                <path
                    class="line top"
                    d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                <path
                    class="line middle"
                    d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                <path
                    class="line bottom"
                    d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
            </svg>
        </div>
        <div class="langs">
            <a href="<?php echo get_home_url() ?>" class="lang ru active">RU</a>
            <a href="#" class="lang en">EN</a>
        </div>
    </div>
    <!-- /.navbar-middle -->
</nav>
<!-- /.navbar -->