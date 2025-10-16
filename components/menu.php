<header class="main-header">
    <div class="container container--big">
        <div class="header-wrapper">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Logo RIC">
                </a>
            </div>
            
            <div class="nav-and-actions">
                <nav class="main-nav">
                    <div class="mobile-nav-header">
                        <div class="mobile-logo">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Logo RIC">
                            </a>
                        </div>
                    </div>
                    <ul>
                        <li class="has-submenu">
                            <a href="#" class="menu-trigger">quem somos</a>
                            <div class="submenu">
                                <div class="submenu-content">
                                    <div class="submenu-column">
                                        <a href="/ric-wp/nossa-historia">Nossa História</a>
                                        <a href="/ric-wp/codigo-de-cultura">Cultura</a>
                                        <a href="/ric-wp/principios-editoriais">Princípios Editoriais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-submenu">
                                <a href="/ric-wp/nossa-historia">Nossa História</a>
                                <a href="/ric-wp/codigo-de-cultura">Cultura</a>
                                <a href="/ric-wp/principios-editoriais">Princípios Editoriais</a>
                            </div>
                        </li>
                        <li class="has-mega-menu">
                            <a href="#" class="menu-trigger mega-trigger">negócios</a>
                            
                            <!-- MEGA MENU DESKTOP - Dinâmico do WordPress -->
                            <?php ric_render_negocios_mega_menu(); ?>
                            
                            <!-- MEGA MENU MOBILE - Dinâmico do WordPress -->
                            <?php ric_render_negocios_mega_menu_mobile(); ?>
                        </li>
                        <li class="has-submenu">
                            <a href="#" class="menu-trigger">pessoas</a>
                            <div class="submenu">
                                <div class="submenu-content">
                                    <div class="submenu-column">
                                        <a href="/ric-wp/equipe-comercial">Equipe Comercial</a>
                                        <a href="/ric-wp/carreira-uniric">Carreira / UNIRIC</a>
                                        <a href="/ric-wp/vagas">Vagas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-submenu">
                                <a href="/ric-wp/equipe-comercial">Equipe Comercial</a>
                                <a href="/ric-wp/carreira-uniric">Carreira / UNIRIC</a>
                                <a href="#">Vagas</a>
                            </div>
                        </li>
                        <li class="has-submenu">
                            <a href="#" class="menu-trigger">conteúdo</a>
                            <div class="submenu">
                                <div class="submenu-content">
                                    <div class="submenu-column">
                                        <a href="cases">Cases</a>
                                        <a href="/ric-wp/blog">Ric Talks</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-submenu">
                                <a href="cases">Cases</a>
                                <a href="/ric-wp/blog">Ric Talks</a>
                            </div>
                        </li>
                        <li class="has-submenu">
                            <a href="#" class="menu-trigger">instituto ric</a>
                            <div class="submenu">
                                <div class="submenu-content">
                                    <div class="submenu-column">
                                        <a href="/ric-wp/instituto-ric">Instituto RIC</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-submenu">
                                <a href="/ric-wp/instituto-ric">Instituto RIC</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                
                <div class="header-actions">
                    <div class="search-icon" style="display: none;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.svg" alt="Search">
                    </div>
                    <div class="">
                        <a href="#" class="btn-gradient">Anuncie</a>
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