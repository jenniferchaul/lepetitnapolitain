<section id="news" class="wrap-actu-accueil">
  <div class="container">
    <div class="row">
      <h2>Les actualités
        <img src="<?= get_theme_file_uri('assets/images/drapeau_italien.png') ?>" alt="Drapeau italien" class="italian-flag">
      </h2>
    </div>
    <div class="underline"></div>

    <div id="carousel-actus" class="owl-carousel">
      <?php
      $args = array(
        'post_type' => 'actualite',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          // Récupération des étiquettes (taxonomies)
          $terms = get_the_terms(get_the_ID(), 'type_actualite');
          $badge = !empty($terms) ? esc_html($terms[0]->name) : 'Actualité';

          // Récupération de la date
          $date = get_the_date('d M Y');
      ?>

          <div class="item">
            <div class="content-actu-accueil">
              <div class="media-actu-accueil">
                <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?= esc_attr(get_the_title()); ?>">

                <?php if (!empty($badge)) : ?>
                  <span class="badge"><?= $badge; ?></span>
                <?php endif; ?>
              </div>
              <div class="text-actu-accueil">
                <h3><?= esc_html(get_the_title()); ?></h3>
                <p><?= wpautop(get_the_content()); ?></p>
              </div>
              <div class="news-date"><?= esc_html($date); ?></div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <p>Aucune actualité disponible.</p>
      <?php endif; ?>
    </div>
  </div>
</section>