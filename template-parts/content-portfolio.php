<?php 
?>
<div class="single-page">
    <div class="head">
        <?php get_template_part('templates/parts/breadcrumbs') ?>

        <div class="container">
            <div class="h2-primary pseudo-none">
                <?php 
                    $terms = get_the_terms( $post->ID, 'site_type' ); 
                    if( $terms ){
                        $term = array_shift( $terms );
                        echo $term->name.' ';
                    } 
                    $title = get_the_title();
                    echo '"'.$title.'"';
                ?></div>

            <div class="big-image">
                <?php 
                    $image = get_field('big_mockup');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)

                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- /.head -->
    <div class="body">
        <div class="container">
            <div class="features">
                <div class="feature">
                    <img src="<?php bloginfo('template_url') ?>/src/img/single/icons/design.png" alt="Создаем сайты для бизнеса">
                    <div class="text">Индивидуальный дизайн</div>
                </div>
                <!-- /.feature -->

                <div class="feature">
                    <img src="<?php bloginfo('template_url') ?>/src/img/single/icons/adaptive.png" alt="Адаптивная верстка">
                    <div class="text">Адаптивная верстка</div>
                </div>
                <!-- /.feature -->

                <div class="feature">
                    <img src="<?php bloginfo('template_url') ?>/src/img/single/icons/seo.png" alt="SEO оптимизация">
                    <div class="text">SEO оптимизация</div>
                </div>
                <!-- /.feature -->

                <?php if(get_field('cms')) : ?>
                <div class="feature">
                    <img src="<?php bloginfo('template_url') ?>/src/img/single/icons/cms.png" alt="CMS">
                    <div class="text">CMS <?php the_field('cms') ?></div>
                </div>
                <!-- /.feature -->
                <?php endif; ?>
            </div>
            <!-- /.features -->

            <hr>
            
            <div class="row">
                <?php if(get_field('site')) : ?>
                <div class="additional-info">
                    <span>Адрес сайта: </span>
                    <a href="//<?php the_field('site') ?>" target="_blank" class="link"><?php the_field('site') ?></a>
                </div>
                <!-- /.additional-info -->
                <?php endif; ?>

                <div class="content">
                    <?php the_content(); ?>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.row -->

            <div class="site-screenshot">
                <?php 
                    $image = get_field('site_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)

                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
            </div>
            <!-- /.site-screenshot -->
            <div class="foot">
                <div class="order-site">
                    <span>Понравился сайт?</span>
                    <a href="#popup-request-single" rel="modal:open" class="link">Заказать разработку аналогичного!</a>
                </div>
                <!-- /.order-site -->
                <div class="btns">
                    <?php
                        $next_post = get_next_post();
                        if(!empty($next_post)): ?>
                            <a href="<?php echo get_permalink( $next_post ); ?>" class="btn btn-primary-left">Предыдущий проект</a>
                    <?php endif; ?>

                    <a href="<?php echo get_home_url( null, 'portfolio/') ?>" class="btn btn-with-case">Вернуться в портфолио</a>

                    <?php
                        $previous_post = get_previous_post();
                        if(!empty($previous_post)): ?>
                            <a href="<?php echo get_permalink( $previous_post ); ?>" class="btn btn-primary">Следующий проект</a>
                    <?php endif; ?>
                </div>
                <!-- /.btns -->
            </div>
            <!-- /.foot -->
        </div>
    </div>
    <!-- /.body -->

   
</div>
<!-- /.single-page -->

<!-- PopUp -->
<div id="popup-request-single" class="overlay">
	<div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
		
		<div class="content">
			<div class="title">
				<div class="h">Оставить заявку</div>
				<div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
			</div>
			<form action="javascript:" onsubmit="callHandler('#request-form')" id="request-form">
				<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
				<input type="hidden" name="form" value="Заказать разработку аналогичного сайта">
				<div class="input-wrapper icon i-user">
					<input type="text" placeholder="Введите ваше имя" name="user_name" required>
				</div>
				<div class="input-wrapper icon i-phone">
					<input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
				</div>
				<div class="input-wrapper icon i-mail">
					<input type="mail" placeholder="Введите ваш e-mail">
				</div>
				<button class="btn btn-form btn-shadow">Заказать разработку</button>
			</form>
		</div>
	</div>
</div>
<!-- /PopUp -->

