<div class="case-card">
    <a href="<?php the_permalink() ?>" class="image-wrapper">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
    </a>
    <div class="text-wrapper">
        <div class="title"><?php the_title() ?></div>
        <div class="hr"></div>
        <div class="pair">
            <div class="col">
                <span class="gray-text">Сайт каталог</span>
                <a href="//<?php the_field('site') ?>" target="_blank" class="link"><?php the_field('site') ?></a>
            </div>
            <div class="col">
                <a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Подробнее</a>
            </div>
        </div>
    </div>               
</div>
<!-- /.case-card -->