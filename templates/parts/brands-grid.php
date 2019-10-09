<div class="brands-grid">
    <?php $brandName = [
        "nissan",
        "agronovia",
        "rosstrans",
        "gefest",
        "sber",
        "ford",
        "tricolor",
         "bosh",
        "glonas",
        "rancio",
        "citroen",
         "avon",
        "limadas",
        "markizy",
        "alfa",
        "germes",
        "lord",
        "aurora",
        "gid",
        "odv",
        "cp",
        "palas",
        "belinka",
        "aresa-logo",
        "klimolog",
        "hdlt",
        "balash",
        "luck-repair",
        "alive-stone",
        "radamir",
        "rivera",
        "gardian",
        "autnova",
        "nettlebox",
        "avtospas",
        "clickmebel"
    ]; 
    for($i = 0; $i <= 35; $i++) : ?>
    <div class="brand brand-<?=$i+1?>">
        <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/<?=$brandName[$i]?>.png" alt="<?=$brandName[$i]?>" class="lazy">
    </div>
    <?php endfor; ?>
</div>