<?php
/*
Template Name: Contact
*/

get_header();
?>

<section class="contact-page">

    <div class="contact-container">

        <div class="contact-subtitle">
            <h1><span class="green">L</span>e petit <span class="red">N</span>apolitain</h1>
            <h2>Contact<img src="<?= get_theme_file_uri('assets/images/drapeau_italien.png') ?>" alt="Drapeau italien" class="italian-flag"></h2>
            <div class="underline"></div>
        </div>

        <div class="main-form">

            <div class="form-grid">

                <div class="contact-details">

                <p> Pour toute question, demande de renseignements ou commande, nous sommes là pour vous aider. N'hésitez pas à nous contacter via le formulaire ci-dessous, par téléphone, ou en vous rendant directement à notre pizzeria.</p>
                    <h3>Nos coordonnées</h3>
                    <p><strong>Adresse :</strong> 452 Grande Rue, 01290 Grièges</p>
                    <p><strong>Téléphone :</strong> 03 85 51 73 68</p>

                    <h3>Nos horaires</h3>
                    <ul>
                        <li><strong>Lundi</strong> Fermé</li>
                        <li><strong>Mardi</strong> Fermé</li>
                        <li><strong>Mercredi</strong> 18:30-21:30</li>
                        <li><strong>Jeudi</strong> 12:00-13:30 & 18:30-21:30</li>
                        <li><strong>Vendredi</strong> 12:00-13:30 & 18:30-22:00</li>
                        <li><strong>Samedi</strong> 12:00-13:30 & 18:30-22:00</li>
                        <li><strong>Dimanche</strong> 12:00-13:30 & 18:30-21:30</li>
                    </ul>
                </div>

                <div class="contact-form">
                    <h3>Formulaire de contact</h3>
                    <p>Vous pouvez remplir le formulaire ci-dessous pour poser vos questions, passer une commande, ou faire une demande particulière. Nous nous efforçons de répondre à toutes vos demandes dans les plus brefs délais.</p>
                    <?php echo do_shortcode('[contact-form-7 id="eccba69" title="Formulaire de contact"]'); ?>
                </div>

            </div>
        </div>
        <div class="map-container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.7813235978706!2d4.8485560767569815!3d46.25457488035743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f3650b386431f3%3A0x6f45ea538f30b2ab!2sLe%20Petit%20Napolitain!5e0!3m2!1sfr!2sfr!4v1740585510557!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php
get_footer();
?>