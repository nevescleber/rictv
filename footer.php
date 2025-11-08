
<div class="rodape-flutuante" data-rodape-flutuante>
    <div class="rodape-flutuante__inner">
        <?php
        $cta_text = get_field('opcao_anuncie_com_a_gente_texto', 'option');
        $cta_url = get_field('opcao_anuncie_com_a_gente_url', 'option');
        $cta_link_text = get_field('opcao_anuncie_com_a_gente_link_texto', 'option');

        $cta_text = $cta_text ? esc_html($cta_text) : 'Quer comunicar sua marca para o Paraná?';
        $cta_url = $cta_url ? esc_url($cta_url) : esc_url(home_url('/contato'));
        $cta_link_text = $cta_link_text ? esc_html($cta_link_text) : 'Anuncie com a gente';
        ?>
        <p class="rodape-flutuante__title"><?php echo $cta_text; ?></p>
        <a class="btn-gradient rodape-flutuante__cta" href="<?php echo $cta_url; ?>">
            <?php echo $cta_link_text; ?>
        </a>
        <button class="rodape-flutuante__close" type="button" data-rodape-flutuante-close aria-label="Fechar barra promocional">
            &times;
        </button>
    </div>
</div>

<footer class="footer py-5">
    <div class="container container--big">
        <div class="row">
            <!-- Coluna 1 - Logo e Redes Sociais -->
            <div class="col-lg-2 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Grupo RIC" class="img-fluid mb-4">
                <?php
                $social_facebook = get_field('opcao_facebook', 'option');
                $social_instagram = get_field('opcao_instagram', 'option');
                $social_linkedin = get_field('opcao_linkedin', 'option');

                $social_facebook = $social_facebook ? esc_url($social_facebook) : '';
                $social_instagram = $social_instagram ? esc_url($social_instagram) : '';
                $social_linkedin = $social_linkedin ? esc_url($social_linkedin) : '';

                if ($social_facebook || $social_instagram || $social_linkedin) :
                ?>
                    <div class="social-icons">
                        <?php if ($social_facebook) : ?>
                            <a href="<?php echo $social_facebook; ?>" target="_blank" class="me-3" rel="noopener">
                                <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z'></path></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_instagram) : ?>
                            <a href="<?php echo $social_instagram; ?>" target="_blank" class="me-3" rel="noopener">
                                <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z'></path></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_linkedin) : ?>
                            <a href="<?php echo $social_linkedin; ?>" target="_blank" rel="noopener">
                                <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z'></path></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Coluna 2 - Sobre Nós -->
            <div class="col-lg-2 col-6 mb-4">
                <h5 class="text-medium text-white mb-3">Sobre Nós</h5>
                <ul class="list-unstyled">
                    <?php
                    $footer_menu_slug = 'footer-menu-sobre-nos';
                    $footer_menu_items = [];
                    $footer_menu_locations = get_nav_menu_locations();

                    if (isset($footer_menu_locations[$footer_menu_slug])) {
                        $footer_menu = wp_get_nav_menu_object($footer_menu_locations[$footer_menu_slug]);
                        if ($footer_menu) {
                            $footer_menu_items = wp_get_nav_menu_items($footer_menu->term_id);
                        }
                    }

                    if (empty($footer_menu_items)) {
                        $footer_menu = wp_get_nav_menu_object($footer_menu_slug);
                        if ($footer_menu) {
                            $footer_menu_items = wp_get_nav_menu_items($footer_menu->term_id);
                        }
                    }

                    if (!empty($footer_menu_items)) :
                        foreach ($footer_menu_items as $menu_item) :
                            if ((int) $menu_item->menu_item_parent !== 0) {
                                continue;
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($menu_item->url); ?>" class="text-white text-decoration-none mb-2 d-block hover-underline">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Coluna 3 - Contato -->
            <div class="col-lg-2 col-6 mb-4">
                <h5 class="text-medium text-white mb-3">Pessoas</h5>
                <ul class="list-unstyled">
                    <?php
                    $footer_people_menu_slug = 'footer-menu-pessoas';
                    $footer_people_menu_items = [];
                    $footer_people_menu_locations = get_nav_menu_locations();

                    if (isset($footer_people_menu_locations[$footer_people_menu_slug])) {
                        $footer_people_menu = wp_get_nav_menu_object($footer_people_menu_locations[$footer_people_menu_slug]);
                        if ($footer_people_menu) {
                            $footer_people_menu_items = wp_get_nav_menu_items($footer_people_menu->term_id);
                        }
                    }

                    if (empty($footer_people_menu_items)) {
                        $footer_people_menu = wp_get_nav_menu_object($footer_people_menu_slug);
                        if ($footer_people_menu) {
                            $footer_people_menu_items = wp_get_nav_menu_items($footer_people_menu->term_id);
                        }
                    }

                    if (!empty($footer_people_menu_items)) :
                        foreach ($footer_people_menu_items as $menu_item) :
                            if ((int) $menu_item->menu_item_parent !== 0) {
                                continue;
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($menu_item->url); ?>" class="text-white text-decoration-none mb-2 d-block hover-underline">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Coluna 4 - Explore -->
            <div class="col-lg-2 col-6 mb-4">
                <h5 class="text-medium text-white mb-3">Negócios</h5>
                <ul class="list-unstyled">
                    <?php
                    $footer_business_menu_slug = 'footer-menu-negocios';
                    $footer_business_menu_items = [];
                    $footer_business_menu_locations = get_nav_menu_locations();

                    if (isset($footer_business_menu_locations[$footer_business_menu_slug])) {
                        $footer_business_menu = wp_get_nav_menu_object($footer_business_menu_locations[$footer_business_menu_slug]);
                        if ($footer_business_menu) {
                            $footer_business_menu_items = wp_get_nav_menu_items($footer_business_menu->term_id);
                        }
                    }

                    if (empty($footer_business_menu_items)) {
                        $footer_business_menu = wp_get_nav_menu_object($footer_business_menu_slug);
                        if ($footer_business_menu) {
                            $footer_business_menu_items = wp_get_nav_menu_items($footer_business_menu->term_id);
                        }
                    }

                    if (!empty($footer_business_menu_items)) :
                        foreach ($footer_business_menu_items as $menu_item) :
                            if ((int) $menu_item->menu_item_parent !== 0) {
                                continue;
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($menu_item->url); ?>" class="text-white text-decoration-none mb-2 d-block hover-underline">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Coluna 5 - Valor Social -->
            <div class="col-lg-2 col-6 mb-4">
                <h5 class="text-medium text-white mb-3">Social</h5>
                <ul class="list-unstyled">
                    <?php
                    $footer_social_menu_slug = 'footer-menu-social';
                    $footer_social_menu_items = [];
                    $footer_social_menu_locations = get_nav_menu_locations();

                    if (isset($footer_social_menu_locations[$footer_social_menu_slug])) {
                        $footer_social_menu = wp_get_nav_menu_object($footer_social_menu_locations[$footer_social_menu_slug]);
                        if ($footer_social_menu) {
                            $footer_social_menu_items = wp_get_nav_menu_items($footer_social_menu->term_id);
                        }
                    }

                    if (empty($footer_social_menu_items)) {
                        $footer_social_menu = wp_get_nav_menu_object($footer_social_menu_slug);
                        if ($footer_social_menu) {
                            $footer_social_menu_items = wp_get_nav_menu_items($footer_social_menu->term_id);
                        }
                    }

                    if (!empty($footer_social_menu_items)) :
                        foreach ($footer_social_menu_items as $menu_item) :
                            if ((int) $menu_item->menu_item_parent !== 0) {
                                continue;
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($menu_item->url); ?>" class="text-white text-decoration-none mb-2 d-block hover-underline">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Coluna 6 - Políticas -->
            <div class="col-lg-2 col-6 mb-4">
                <h5 class="text-medium text-white mb-3">Políticas</h5>
                <ul class="list-unstyled">
                    <?php
                    $footer_policies_menu_slug = 'footer-menu-politicas';
                    $footer_policies_menu_items = [];
                    $footer_policies_menu_locations = get_nav_menu_locations();

                    if (isset($footer_policies_menu_locations[$footer_policies_menu_slug])) {
                        $footer_policies_menu = wp_get_nav_menu_object($footer_policies_menu_locations[$footer_policies_menu_slug]);
                        if ($footer_policies_menu) {
                            $footer_policies_menu_items = wp_get_nav_menu_items($footer_policies_menu->term_id);
                        }
                    }

                    if (empty($footer_policies_menu_items)) {
                        $footer_policies_menu = wp_get_nav_menu_object($footer_policies_menu_slug);
                        if ($footer_policies_menu) {
                            $footer_policies_menu_items = wp_get_nav_menu_items($footer_policies_menu->term_id);
                        }
                    }

                    if (!empty($footer_policies_menu_items)) :
                        foreach ($footer_policies_menu_items as $menu_item) :
                            if ((int) $menu_item->menu_item_parent !== 0) {
                                continue;
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url($menu_item->url); ?>" class="text-white text-decoration-none mb-2 d-block hover-underline">
                                    <?php echo esc_html($menu_item->title); ?>
                                </a>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container--big mt-4 copyright">
        <div class="row">
            <div class="col-12">
                <p class="text-white text-center mb-0">Grupo RIC - Todos Os Direitos Reservados © 2025.</p>
            </div>
        </div>
    </div>
</footer>

</main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    
    <?php include_once get_template_directory() . '/components/popup_tabelas.php'; ?>

    <!-- Custom JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const banner = document.querySelector('[data-rodape-flutuante]');
            const closeButton = banner?.querySelector('[data-rodape-flutuante-close]');

            if (!banner || !closeButton) {
                return;
            }

            const showBanner = () => {
                banner.classList.add('is-visible');
                banner.classList.remove('is-hidden');
            };

            const hideBanner = () => {
                banner.classList.add('is-hidden');
                banner.classList.remove('is-visible');
            };

            closeButton.addEventListener('click', hideBanner);
            document.addEventListener('keyup', function (event) {
                if (event.key === 'Escape') {
                    hideBanner();
                }
            });

            requestAnimationFrame(showBanner);
        });
    </script>

<?php
    $opcoes_pixels_rodape = get_field('opcoes_pixels_rodape', 'option');
    if (!empty($opcoes_pixels_rodape)) {
        echo $opcoes_pixels_rodape;
    }
    ?>

    <?php wp_footer(); ?>
</body>
</html>