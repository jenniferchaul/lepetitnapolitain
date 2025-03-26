<?php
/*
Template Name: Menu
*/

get_header();
?>

<?php get_template_part('partials/menu/hero.tpl'); ?>

<section class="menu-page" id="menu-page">
    <div class="menu-page_title">
    <h2>
        La carte
        <img src="<?= get_theme_file_uri('assets/images/drapeau_italien.png') ?>" alt="Drapeau italien" class="italian-flag">
    </h2>
    </div>

    <div class="menu-tabs">
        <button class="menu-subtitle active" data-category="base-tomate" data-type="pizza">Base Tomate</button>
        <button class="menu-subtitle" data-category="base-creme" data-type="pizza">Base Crème</button>
        <button class="menu-subtitle" data-category="desserts" data-type="dessert">Desserts</button>
    </div>

    <div class="menu-content">
        <!-- Contenu dynamique des menus sera chargé ici -->
    </div>
</section>

<script>
    const ajaxUrl = '<?= admin_url('admin-ajax.php'); ?>';
</script>

<?php
get_footer();
?>
