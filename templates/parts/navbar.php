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
            <?php 
            wp_nav_menu( [
                'menu'            => 'menu_middle', 
                'menu_class'      => 'menu', 
                'menu_id'         => 'menu_middle',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ] ); 
            ?>
            <a href="#popup1" rel="modal:open" class="btn btn-inverse">Заказать звонок</a>

            <div class="pair">
                <a href="tel:<?=PHONE_HREF?>" class="phone-link"><?=PHONE?></a>
                <div class="social-toggle">
                    <i class="fas fa-angle-down"></i>
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