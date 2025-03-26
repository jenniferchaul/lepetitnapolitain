document.addEventListener('DOMContentLoaded', function() {
    const toggleMenuButton = document.querySelector('.toggle-menu');
    const menu = document.querySelector('.menu');

    if (toggleMenuButton && menu) {
        toggleMenuButton.addEventListener('click', function() {
            menu.classList.toggle('active');
            toggleMenuButton.classList.toggle('is-opened');
        });
    }

    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const menuCategories = document.querySelectorAll('.menu-subtitle');
    const menuContent = document.querySelector('.menu-content');

    if (!menuCategories.length || !menuContent) {
        return;
    }

    function fetchMenuItems(category, type) {
        fetch(`${ajaxUrl}?action=get_menu_items&category=${category}&type=${type}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    menuContent.innerHTML = data.data.html;
                } else {
                    menuContent.innerHTML = `<p>Erreur : ${data.data.message || 'Aucun article trouvé.'}</p>`;
                }
            })
            .catch(() => {
                menuContent.innerHTML = '<p>Erreur lors du chargement des articles.</p>';
            });
    }

    menuCategories.forEach(button => {
        button.addEventListener('click', function() {
            menuCategories.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const category = this.dataset.category;
            const type = this.dataset.type;
            fetchMenuItems(category, type);
        });
    });

    fetchMenuItems('base-tomate', 'pizza');
});

jQuery(document).ready(function () {
    const $carousel = jQuery("#carousel-actus");

    if ($carousel.length) {
        if ($carousel.hasClass("owl-loaded")) {
            $carousel.trigger("destroy.owl.carousel");
            $carousel.removeClass("owl-loaded");
        }

        let itemsCount = $carousel.find(".item").length;
        let itemsDesktop = 3; 
        let itemsTablet = 2;
        let itemsMobile = 1;

        let shouldLoop = itemsCount >= itemsDesktop; 
        let shouldCenter = itemsCount < itemsDesktop; 

        $carousel.owlCarousel({
            loop: shouldLoop,
            margin: 100,
            nav: false,
            dots: true,
            autoplay: shouldLoop, 
            autoplayTimeout: 5000,
            center: shouldCenter, 
            responsive: {
                0: { items: itemsMobile },
                768: { items: itemsTablet },
                1024: { 
                    items: shouldLoop ? itemsDesktop : itemsCount, 
                    center: shouldCenter 
                }
            },
            onInitialized: function () {
                setTimeout(() => {
                    jQuery(".owl-dot").each(function(index) {
                        jQuery(this).attr("aria-label", "Aller à la diapositive " + (index + 1));
                    });
                }, 500);
            }
        });

        if (!shouldLoop) {
            $carousel.addClass("center-items");
        } else {
            $carousel.removeClass("center-items");
        }
    }
});