<div class="section" id="cases">
    <div class="container">
        <div class="h2">Кейсы</div>
        <div class="h2-primary">Наши проекты</div>
       
        <div class="cases-container">
        <?php 
                // задаем нужные нам критерии выборки данных из БД
                // $args = array(
                //     'posts_per_page' => 6,
                //     'post_type' => 'portfolio',
                // );
                $args = [
                    'posts_per_page' => 6,
                    'post_type' => 'portfolio',
                    'post__in' => [
                        155,141,121,117,108,95
                    ]
                ];

                
                $query = new WP_Query( $args );

                // Цикл
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        get_template_part('templates/parts/case-card');
                    }
                } else {
                echo '<div class="h3 m-auto">Портфолио не добавлено</div>';
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
            ?>
        </div>
        <!-- /.cases-container -->
        <div class="text-center">
            <a href="<?php echo get_home_url(null, 'portfolio/') ?>" class="btn btn-with-case">Перейти в портфолио</a>
        </div>
    </div>
</div>
<!-- /#cases.section -->