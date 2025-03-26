<footer class="footer">
    <div class="footer__container">
        <!-- Logo -->
        <div class="footer__logo"><a href="<?= home_url('/') ?>">
                <img src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="Logo du traiteur">
            </a>
        </div>

        <div class="footer__main-info">
            <!-- Informations -->
            <div class="footer__info">
                <div class="footer__info-item">
                    <i class="fas fa-phone-alt footer__icon"></i>
                    <p><a href="tel:+33629841579">03 85 51 73 68</a></p>
                </div>
                <div class="footer__info-item">
                    <i class="fas fa-map-marker-alt footer__icon"></i>
                    <p>452, Grande Rue</p>

                </div>
<div>
<p class="footer__info-item">01290 Grièges</p>
</div>

            </div>

            <!-- Réseaux sociaux -->
            <div class="footer__socials">
                <a href="https://www.facebook.com/profile.php?id=100092517763461&locale=fr_FR" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/lepetitnapolitain01/" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>


            <!-- Liens d'accès rapides -->
            <nav class="footer__links">
                <a href="<?= home_url('/menu') ?>">Carte</a>
                <a href="<?= home_url('/#news') ?>">Actualités</a>
                <a href="<?= home_url('/contact') ?>">Contact</a>
            </nav>

        </div>

        <!-- Mentions légales et copyright -->
        <div class="footer__legal">
            <p>© Copyright 2025 Le Petit Napolitain. Tous droits réservés.</p>
            <nav>
                <a href="<?php echo home_url('/mentions-legales'); ?>">Mentions légales</a>
                -
                <a href="<?php echo home_url('/politique-de-confidentialite'); ?>">Politique de confidentialité</a>
            </nav>

            <div class="part-dev">

                <a href=<?php echo esc_url('https://www.jcdevandcode.fr'); ?> target="_blank" rel="noopener noreferrer">Site web crée par <span>jc dev&code</span>

                    <div><img class="logo-dev" src="<?= get_theme_file_uri('assets/images/jc.webp') ?>" alt="Logo du développeur"></div>
                </a>

            </div>
        </div>

    </div>
</footer>

<div id="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>

<?php wp_footer(); ?>
</body>

</html>