<?php
/*
*   Template name: Клиенты
*/
get_header();
?>
<div class="clients-page">
<div class="section lazy" id="reviews" data-src="<?php bloginfo('template_url') ?>/src/img/main-page/mountains-bg.jpg">
    <div class="container">
        <div class="h2-primary">Наши клиенты</div>
        <?php get_template_part('templates/parts/brands-grid') ?>
    </div>
</div>
<!-- /#reviews.section -->

<?php get_template_part('templates/parts/big-form') ?>

<?php get_template_part('templates/parts/get-portfolio') ?>

</div>
<?php get_footer(); ?>