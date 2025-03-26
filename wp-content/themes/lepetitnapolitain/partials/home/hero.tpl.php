<?php
$home_id = get_option('page_on_front');
$hero_title = get_field('hero_title', $home_id);
$hero_content = get_field('hero_content', $home_id);

$hero_title = preg_replace('/<\/?h1>/', '', $hero_title);
$hero_content = preg_replace('/<p([^>]*)>/', '<p class="content"$1>', $hero_content);
?>

<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title"><strong><?= $hero_title ? $hero_title : 'Titre par défaut'; ?></strong></h1>

            <?= $hero_content ? $hero_content : 'Titre par défaut';  ?>

            <div class="cta">
                <a href="<?= home_url('/menu') ?>" class="button">Voir notre carte</a>
            </div>  
        </div>

        <div class="hero-img">
            <img src="<?= get_theme_file_uri('assets/images/pizza-hero.webp') ?>" alt="image pizza napolitaine">
        </div>
    </div>
</section>