<header class="main-header">
    <div class="container container--big">
        <div class="header-wrapper">
            <div class="logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Logo RIC">
                </a>
            </div>
            
            <div class="nav-and-actions">
                <nav class="main-nav">
                    <div class="mobile-nav-header">
                        <div class="mobile-logo">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Logo RIC">
                            </a>
                        </div>
                    </div>
                    <ul>
                        <li class="has-submenu">
                            <a href="#" class="menu-trigger">quem somos</a>
                            <?php
                            $header_quem_somos_slug = 'header-menu-quem-somos';
                            $header_quem_somos_items = [];
                            $header_quem_somos_locations = get_nav_menu_locations();

                            if (isset($header_quem_somos_locations[$header_quem_somos_slug])) {
                                $header_quem_somos_menu = wp_get_nav_menu_object($header_quem_somos_locations[$header_quem_somos_slug]);
                                if ($header_quem_somos_menu) {
                                    $header_quem_somos_items = wp_get_nav_menu_items($header_quem_somos_menu->term_id);
                                }
                            }

                            if (empty($header_quem_somos_items)) {
                                $header_quem_somos_menu = wp_get_nav_menu_object($header_quem_somos_slug);
                                if ($header_quem_somos_menu) {
                                    $header_quem_somos_items = wp_get_nav_menu_items($header_quem_somos_menu->term_id);
                                }
                            }

                            $header_quem_somos_top_level = array_filter(
                                $header_quem_somos_items,
                                static function ($menu_item) {
                                    return (int) $menu_item->menu_item_parent === 0;
                                }
                            );
                            ?>

                            <?php if (!empty($header_quem_somos_top_level)) : ?>
                                <div class="submenu">
                                    <div class="submenu-content">
                                        <div class="submenu-column">
                                            <?php foreach ($header_quem_somos_top_level as $menu_item) : ?>
                                                <a href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-submenu">
                                    <?php foreach ($header_quem_somos_top_level as $menu_item) : ?>
                                        <a href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                        <li class="has-mega-menu">
                            <a href="#" class="menu-trigger mega-trigger">negócios</a>
                            
                            <!-- MEGA MENU DESKTOP - Dinâmico do WordPress -->
                            <?php ric_render_negocios_mega_menu(); ?>
                            
                            <!-- MEGA MENU MOBILE - Dinâmico do WordPress -->
                            <?php ric_render_negocios_mega_menu_mobile(); ?>
                        </li>
                        <?php
                        $header_top_menu_slug = 'header-menu-topo';
                        $header_top_menu_items = [];
                        $header_top_menu_locations = get_nav_menu_locations();

                        if (isset($header_top_menu_locations[$header_top_menu_slug])) {
                            $header_top_menu = wp_get_nav_menu_object($header_top_menu_locations[$header_top_menu_slug]);
                            if ($header_top_menu) {
                                $header_top_menu_items = wp_get_nav_menu_items($header_top_menu->term_id);
                            }
                        }

                        if (empty($header_top_menu_items)) {
                            $header_top_menu = wp_get_nav_menu_object($header_top_menu_slug);
                            if ($header_top_menu) {
                                $header_top_menu_items = wp_get_nav_menu_items($header_top_menu->term_id);
                            }
                        }

                        if (!empty($header_top_menu_items)) :
                            $header_top_menu_children = [];
                            foreach ($header_top_menu_items as $menu_item) {
                                $parent_id = (int) $menu_item->menu_item_parent;
                                if (!isset($header_top_menu_children[$parent_id])) {
                                    $header_top_menu_children[$parent_id] = [];
                                }
                                $header_top_menu_children[$parent_id][] = $menu_item;
                            }

                            $header_top_menu_top_level = $header_top_menu_children[0] ?? [];

                            foreach ($header_top_menu_top_level as $top_item) :
                                $top_item_id = (int) $top_item->ID;
                                $top_item_children = $header_top_menu_children[$top_item_id] ?? [];
                                $has_children = !empty($top_item_children);
                                $top_item_url = $top_item->url ?: '#';
                                ?>
                                <li class="<?php echo $has_children ? 'has-submenu' : ''; ?>">
                                    <a href="<?php echo esc_url($top_item_url); ?>" class="<?php echo $has_children ? 'menu-trigger' : ''; ?>">
                                        <?php echo esc_html($top_item->title); ?>
                                    </a>

                                    <?php if ($has_children) : ?>
                                        <div class="submenu">
                                            <div class="submenu-content">
                                                <div class="submenu-column">
                                                    <?php foreach ($top_item_children as $child_item) : ?>
                                                        <a href="<?php echo esc_url($child_item->url ?: '#'); ?>">
                                                            <?php echo esc_html($child_item->title); ?>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mobile-submenu">
                                            <?php foreach ($top_item_children as $child_item) : ?>
                                                <a href="<?php echo esc_url($child_item->url ?: '#'); ?>">
                                                    <?php echo esc_html($child_item->title); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </nav>
                
                <div class="header-actions">
                    <div class="search-icon" style="display: none;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.svg" alt="Search">
                    </div>
                    <div class="btn-anuncie">
                        <a href="<?php echo home_url('/contato'); ?>" class="btn-gradient">Anuncie</a>
                    </div>
                </div>
            </div>
            
            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header> 