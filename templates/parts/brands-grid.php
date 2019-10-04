<div class="brands-grid">
    <?php $brandName = [
        "nissan",
        "agronovia",
        "rosstrans",
        "gefest",
        "bosh",
        "avon",
        "tricolor",
        "belinka",
        "glonas",
        "rancio",
        "citroen",
        "aurora",
        "limadas",
        "markizy",
        "neva",
        "alfa",
        "germes",
        "lord",
        "divi",
        "gid",
        "odv",
        "cp",
        "palas",
        "art",
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
    for($i = 0; $i <= 36; $i++) : ?>
    <div class="brand brand-<?=$i+1?>">
        <img data-src="<?php bloginfo('template_url') ?>/src/img/brands/<?=$brandName[$i]?>.png" alt="<?=$brandName[$i]?>" class="lazy">
    </div>
    <?php endfor; ?>
</div>