<!DOCTYPE html>
<html lang="<?= get_bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FL6SC958FT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FL6SC958FT');
    </script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="top-bar">
        <div class="top-bar__container">
            <!-- Réseaux sociaux -->
            <div class="top-bar__socials">
                <div class="display-tel"><i class="fas fa-phone-alt"></i>03.85.51.73.68</div>
                <a href="tel:+33385517368">
                    <i class="fas fa-phone-alt"></i>
                </a>
                <a href="mailto:petit.napolitain@gmail.com">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100092517763461&locale=fr_FR" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/lepetitnapolitain01/" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <header>
        <div class="container-menu">
            <div class="logo-menu"><a href="<?= home_url('/') ?>">
                    <img class="img-logo" src="<?= get_theme_file_uri('assets/images/logo.webp') ?>" alt="logo lae Petit Napolitain">
                </a>
            </div>

            <div class="toggle-menu" id="menuToggle">
                <div class="icon-span"></div>
                <svg x="0" y="0" width="54px" height="54px" viewBox="0 0 54 54">
                    <circle cx="27" cy="27" r="26"></circle>
                </svg>
            </div>

            <nav class="menu">
                <ul class="main-menu">
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/') ?>">Accueil</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/menu') ?>">Carte</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/#news') ?>">Actualités</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-link" href="<?= home_url('/contact') ?>">Contact</a>
                    </li>
                    <li class="menu-item uber">
                        <a class="item-link" href="https://www.ubereats.com/fr/store/le-petit-napolitain/TjsYsTxuW6qppqHh37XuRg?ps=1" target="_blank" rel="noopener noreferrer"><img class="logo-uber" style="width: 6rem;" src="<?= get_theme_file_uri('assets/images/uber.svg') ?>" alt="uber eats"></a>
                    </li>
                </ul>
            </nav>
    </header>