<?php
/*
*   Template name: Отзывы
*/
get_header();
?>
<div class="reviews-page">
    <div class="section lazy bg-contain" id="reviews" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/mountains-bg.jpg">
        <div class="container">
            <div class="h2-primary">Отзывы</div>
            
            <?php get_template_part('templates/parts/reviews') ?>

            <?php get_template_part('templates/parts/videos') ?>
        </div>
    </div>
    <!-- /#reviews.section -->

    <?php get_template_part('templates/parts/big-form') ?>

    <?php get_template_part('templates/parts/get-portfolio') ?>

</div>
<?php get_footer(); ?>