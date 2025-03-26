<?php
get_header();
?>

<div class="page-404" style="text-align: center; ">
    <h1 style="font-size: 3rem; margin-bottom: 20px;">Oups ! Page introuvable</h1>
    <p style="font-size: 1.2rem; margin-bottom: 30px;">
        Il semble que la page que vous recherchez n'existe pas ou a été déplacée.<br>
        Pas de panique, on vous guide vers nos spécialités !
    </p>
    <a href="<?php echo home_url(); ?>" style="text-decoration: none; font-size: 1.2rem; color: white; background-color: #8B0000; padding: 10px 20px; border-radius: 5px;">
        Retour à l'accueil
    </a>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG-20241114-WA0061.webp" alt="Image 404" style="margin-top: 2rem; max-width: 35%; height: auto;">
    </div>
</div>

<?php get_footer(); ?>