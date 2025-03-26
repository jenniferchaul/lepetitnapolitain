<?php

define('THEME_VERSION', '1.0.0');

add_action('after_setup_theme', 'lepetitnapolitain_initializeTheme');

function lepetitnapolitain_initializeTheme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('page-attributes');
}

add_action('wp_enqueue_scripts', function () {
    // Styles principaux
    wp_enqueue_style(
        'lepetitnapolitain-styles',
        get_theme_file_uri('assets/css/style.css'),
        [],
        THEME_VERSION
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Allura&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        [],
        '5.15.4'
    );

    // Charger jQuery si nécessaire
    wp_enqueue_script('jquery');

    // Owl Carousel (CSS + JS)
    wp_enqueue_style(
        'owl-carousel',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
        [],
        '2.3.4'
    );

    wp_enqueue_style(
        'owl-carousel-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css',
        [],
        '2.3.4'
    );

    wp_enqueue_script(
        'owl-carousel-js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        ['jquery'],
        '2.3.4',
        true
    );


    // Script principal
    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/js/main.js'),
        ['jquery', 'owl-carousel-js'], // Ajout d'Owl Carousel en dépendance
        '1.0.0',
        true
    );
});

// Enregistrer le CPT pour les actualités
function lepetitnapolitain_register_news_cpt() {
    $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'Actualité',
        'menu_name'          => 'Actualités',
        'name_admin_bar'     => 'Actualité',
        'add_new'            => 'Ajouter une actualité',
        'add_new_item'       => 'Ajouter une nouvelle actualité',
        'edit_item'          => 'Modifier l’actualité',
        'new_item'           => 'Nouvelle actualité',
        'view_item'          => 'Voir l’actualité',
        'search_items'       => 'Rechercher des actualités',
        'not_found'          => 'Aucune actualité trouvée',
        'not_found_in_trash' => 'Aucune actualité trouvée dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-megaphone',
        'show_in_rest'       => true,
        'taxonomies'         => array('type_actualite'),
    );

    register_post_type('actualite', $args);
}
add_action('init', 'lepetitnapolitain_register_news_cpt');

// Enregistrer une taxonomie pour les types d’actualités
function lepetitnapolitain_register_types_taxonomy() {
    $labels = array(
        'name'              => 'Types Actualités',
        'singular_name'     => 'Type Actualité',
        'search_items'      => 'Rechercher des Types Actualités',
        'all_items'         => 'Tous les Types Actualités',
        'edit_item'         => 'Modifier le Type d’Actualité',
        'update_item'       => 'Mettre à jour le Type d’Actualité',
        'add_new_item'      => 'Ajouter un nouveau Type d’Actualité',
        'new_item_name'     => 'Nom du nouveau Type d’Actualité',
        'menu_name'         => 'Types Actualités',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'type-actualite'),
        'show_in_rest'      => true,
    );

    register_taxonomy('type_actualite', 'actualite', $args);
}
add_action('init', 'lepetitnapolitain_register_types_taxonomy');

// Enregistrer un Custom Post Type pour les pizzas
function pizzeria_register_pizza_cpt()
{
    $labels = array(
        'name'               => 'Pizzas',
        'singular_name'      => 'Pizza',
        'menu_name'          => 'Pizzas',
        'name_admin_bar'     => 'Pizza',
        'add_new'            => 'Ajouter une pizza',
        'add_new_item'       => 'Ajouter une nouvelle pizza',
        'edit_item'          => 'Modifier la pizza',
        'new_item'           => 'Nouvelle pizza',
        'view_item'          => 'Voir la pizza',
        'search_items'       => 'Rechercher des pizzas',
        'not_found'          => 'Aucune pizza trouvée',
        'not_found_in_trash' => 'Aucune pizza trouvée dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,  
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_position'      => 5,
        'show_in_rest'       => true,
    );

    register_post_type('pizza', $args);
}
add_action('init', 'pizzeria_register_pizza_cpt');

// Enregistrer une taxonomie pour les bases de pizzas
function pizzeria_register_base_pizza_taxonomy()
{
    $labels = array(
        'name'              => 'Base de Pizza',
        'singular_name'     => 'Base de Pizza',
        'search_items'      => 'Rechercher des Bases',
        'all_items'         => 'Toutes les Bases',
        'edit_item'         => 'Modifier la Base',
        'update_item'       => 'Mettre à jour la Base',
        'add_new_item'      => 'Ajouter une nouvelle Base',
        'new_item_name'     => 'Nom de la nouvelle Base',
        'menu_name'         => 'Base de Pizza',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'base-pizza'),
        'show_in_rest'      => true,
    );

    register_taxonomy('base_pizza', 'pizza', $args);
}
add_action('init', 'pizzeria_register_base_pizza_taxonomy');

// Enregistrer une taxonomie pour les types de pizzas (végétarienne, classique...)
function pizzeria_register_pizza_type_taxonomy()
{
    $labels = array(
        'name'              => 'Type de Pizza',
        'singular_name'     => 'Type de Pizza',
        'search_items'      => 'Rechercher des Types',
        'all_items'         => 'Tous les Types',
        'edit_item'         => 'Modifier le Type',
        'update_item'       => 'Mettre à jour le Type',
        'add_new_item'      => 'Ajouter un nouveau Type',
        'new_item_name'     => 'Nom du nouveau Type',
        'menu_name'         => 'Type de Pizza',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'type-pizza'),
        'show_in_rest'      => true,
    );

    register_taxonomy('pizza_type', 'pizza', $args);
}
add_action('init', 'pizzeria_register_pizza_type_taxonomy');

// Enregistrer un Custom Post Type pour les desserts
function pizzeria_register_dessert_cpt()
{
    $labels = array(
        'name'               => 'Desserts',
        'singular_name'      => 'Dessert',
        'menu_name'          => 'Desserts',
        'name_admin_bar'     => 'Dessert',
        'add_new'            => 'Ajouter un dessert',
        'add_new_item'       => 'Ajouter un nouveau dessert',
        'edit_item'          => 'Modifier le dessert',
        'new_item'           => 'Nouveau dessert',
        'view_item'          => 'Voir le dessert',
        'search_items'       => 'Rechercher des desserts',
        'not_found'          => 'Aucun dessert trouvé',
        'not_found_in_trash' => 'Aucun dessert trouvé dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-carrot',
        'show_in_rest'       => true,
    );

    register_post_type('dessert', $args);
}
add_action('init', 'pizzeria_register_dessert_cpt');




// Fonction pour récupérer les pizzas et desserts via AJAX
function get_menu_items_ajax()
{
    if (!isset($_GET['category']) || !isset($_GET['type'])) {
        wp_send_json_error(['message' => 'Catégorie ou type non spécifié.']);
    }

    $category = sanitize_text_field($_GET['category']);
    $type = sanitize_text_field($_GET['type']);

    $terms_map = [
        'base-tomate' => 'base_tomate',
        'base-creme'  => 'base_creme',
    ];

    $args = [
        'post_type' => $type,
        'orderby'   => 'date',
        'order'     => 'ASC',
    ];

    if ($type === 'pizza' && isset($terms_map[$category])) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'base_pizza',
                'field'    => 'slug',
                'terms'    => $terms_map[$category],
            ],
        ];
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: get_theme_file_uri('assets/images/default-pizza.jpg'); // Image par défaut si pas de photo

            // Vérifier si la pizza est végétarienne
            $is_vegetarian = has_term('vegetarienne', 'pizza_type', get_the_ID());

            ?>
            <div class="menu-item">
                <div class="menu-text">
                    <h4 class="menu-title">
                        <?= esc_html(get_the_title()); ?>
                        <?php if ($is_vegetarian): ?>
                            <i class="fas fa-seedling basil-icon"></i>

                        <?php endif; ?>
                    </h4>
                    <p class="menu-description"><?= esc_html(get_the_excerpt()); ?></p>
                    <p class="menu-price"><?= get_post_meta(get_the_ID(), 'prix', true); ?> €</p>
                </div>
                <div class="menu-image">
    <a href="<?= esc_url($image_url); ?>" data-lightbox="menu" data-title="<?= esc_attr(get_the_title()); ?>">
        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr(get_the_title()); ?>">
    </a>
</div>

            </div>
    <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucun élément disponible pour cette catégorie.</p>';
    endif;

    $html = ob_get_clean();

    wp_send_json_success(['html' => $html]);
}
add_action('wp_ajax_get_menu_items', 'get_menu_items_ajax');
add_action('wp_ajax_nopriv_get_menu_items', 'get_menu_items_ajax');


function enqueue_fontawesome_admin() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', [], '6.0.0');
}
add_action('admin_enqueue_scripts', 'enqueue_fontawesome_admin');


function custom_menu_icon_for_pizza() {
    echo '<style>
        #adminmenu .menu-icon-pizza div.wp-menu-image:before {
            font-family: "Font Awesome 6 Free" !important;
            content: "\\f818"; /* Unicode de l\'icône pizza */
            font-weight: 900;
            font-size: 18px;
        }
    </style>';
}
add_action('admin_head', 'custom_menu_icon_for_pizza');

remove_filter('acf_the_content', 'wpautop');
add_filter('acf_the_content', 'wpautop');

