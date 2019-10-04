<?php
$url = $_SERVER['REQUEST_URI'];
$url_parts = explode("/", $url);
$taxonomy_name = $url_parts[1];
$taxonomy_term = $url_parts[2];

get_header();
?>
<div class="portfolio-page">

<div id="portfolio-section">
    <?php get_template_part('templates/parts/breadcrumbs') ?>

    <div class="container">
        <div class="h2-primary pseudo-none">Наши Работы</div>

        <ul class="tabs-nav">
            <li><a href="<?php echo get_home_url(null, 'portfolio/') ?>">Все</a></li>
            <li><a href="<?php echo get_home_url(null, 'site_type/landingpage') ?>">Landing Page</a></li>
            <li><a href="<?php echo get_home_url(null, 'site_type/internet-magaziny') ?>">Интернет магазины</a></li>
            <li><a href="<?php echo get_home_url(null, 'site_type/korporativnye-sajty') ?>">Корпоративные сайты</a></li>
        </ul>

        <div class="cases-container">
            <?php 
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'portfolio',
                    'tax_query' => array(
                        array (
                            'taxonomy' => $taxonomy_name,
                            'field' => 'slug',
                            'terms' => $taxonomy_term,
                        )
                    ),
                );

                $query = new WP_Query( $args );


                // Цикл
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        get_template_part('templates/parts/case-card');
                    }
                    if (  $wp_query->max_num_pages > 1 ) : ?>
                        <script id="true_loadmore">
                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        </script>
                    <?php endif; 
                } else {
                echo '<div class="h3 m-auto">Портфолио не добавлено</div>';
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
            ?>
        </div>
        <!-- /.cases-container -->
    </div>
    <!-- /.container -->
</div>
<!-- /#portfolio-section -->

</div>
<script>
(function($){    
    /**
     * When DOM is ready
     */
    $(document).ready(function(){

        var url =  window.location.href;
        var urlArray = url.split('/');
        var taxonomyName = urlArray[4];

        $('.tabs-nav a').each(function( index ) {
            $( this ).prop('href') 
            if($(this).prop('href') .includes(taxonomyName)) {
                $(this).addClass('active');
            }
        });
    });

})(jQuery); // <----- jQuery no conflict wrapper
</script>

<?php get_footer(); ?>