<?php
$home_id = get_option('page_on_front');
$intro_content = get_field('intro_content', $home_id);

$intro_content = preg_replace('/<p([^>]*)>/', '<p class="content"$1>', $intro_content);
?>

<section id="intro" class="presentation">
    <div class="container">
        <div class="presentation-title">
            <h2>
            La pizzeria napolitaine
                <img src="<?= get_theme_file_uri('assets/images/drapeau_italien.png') ?>" alt="Drapeau italien" class="italian-flag">
            </h2>
        </div>
        <div class="underline"></div>
        
        <?= $intro_content ? $intro_content : 'Titre par défaut';  ?>

        <div class="presentation-icons">
            <div class="icon">
                <img src="<?= get_theme_file_uri('assets/images/mozza.png') ?>" alt="pictogramme mozzarella produits frais">
                <p class="title-icon">Produits frais</p>
                <div class="underline-italy">
                <img src="<?= get_theme_file_uri('assets/images/italie.png') ?>" alt="image ligne couleur italie">
                </div>
                <p class="content">Sélectionnés avec soin.</p>
            </div>
            <div class="icon">
                <img src="<?= get_theme_file_uri('assets/images/fraiche.png') ?>" alt="pictogramme pizza pâte fraiche ">
                <p class="title-icon">Pâte maison</p>
                <div class="underline-italy">
                <img src="<?= get_theme_file_uri('assets/images/italie.png') ?>" alt="image ligne couleur italie">
                </div>
                <p class="content">Notre pâte à pizza 100 % maison, élaborée minutieusement, pour une texture légère et croustillante.</p>
            </div>
            <div class="icon">
                <img src="<?= get_theme_file_uri('assets/images/cuisson.png') ?>" alt="pictogramme cuisson parfaite pizza">
                <p class="title-icon">Cuisson parfaite</p>
                <div class="underline-italy">
                <img src="<?= get_theme_file_uri('assets/images/italie.png') ?>" alt="image ligne couleur italie">
                </div>
                <p class="content">Nos pizzas bénéficient d’une cuisson maîtrisée, pour une pâte dorée et une texture parfaite.</p>
            </div>
        </div>
    </div>
</section>