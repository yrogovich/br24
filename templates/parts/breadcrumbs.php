<div class="breadcrumbs-section">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?php echo get_home_url() ?>">Главная</a>      

            <!-- If has parent - display parent link -->
            <?php if($post->post_parent) :
                $parent_title = get_the_title($post->post_parent); ?>
                <a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a>
            <?php endif; ?>
            
            <span><?php the_title() ?></span>
        </div>
    </div>
</div>