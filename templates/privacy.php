<?php
/*
*   Template name: Политика приватности
*/
get_header();
?>

<div class="section article">
    <div class="container">
        <?php
        if (have_posts()):
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        endif;
        ?>
    </div>
</div>


<?php get_footer(); ?>