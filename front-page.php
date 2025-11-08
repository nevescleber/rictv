<!-- HEAD -->
<?php get_header(); ?>
    
    <?php include 'components/banner.php'; ?>

   <!-- PARTNERS -->
   <?php include 'components/partiners.php'; ?>

    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <?php 
                    $comunicacao_imagem = get_field('comunicacao_imagem');
                    if( $comunicacao_imagem ): ?>
                        <img src="<?php echo esc_url($comunicacao_imagem); ?>" alt="RIC TV">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-imagem-01.png" alt="RIC TV">
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="content">
                            <?php 
                            $comunicacao_texto = get_field('comunicacao_texto');
                            if( $comunicacao_texto ): 
                                echo $comunicacao_texto;
                            endif; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php 
                    $comunicacao_subtitulo = get_field('comunicacao_subtitulo');
                    if( $comunicacao_subtitulo ): ?>
                        <p class="text-medium-big desc">
                            <?php echo $comunicacao_subtitulo; ?>
                        </p>
                    <?php else: ?>
                        <p class="text-medium-big desc">
                            <b>O Grupo RIC Paraná</b> é a escolha certa para marcas que 
                            buscam <b>publicidade multiplataforma com alto impacto.</b>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="brands-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-ric.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-left text-white mb-5 mb-lg-0">
                    <?php 
                    $mandala_texto = get_field('mandala_texto');
                    if( $mandala_texto ): ?>
                        <div class="content">
                            <?php echo $mandala_texto; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php 
                    $mandala_texto_link = get_field('mandala_texto_link');
                    $mandala_link = get_field('mandala_link');
                    if( $mandala_texto_link ): ?>
                        <a href="<?php echo esc_url($mandala_link); ?>" class="btn-saiba-mais text-white"><?php echo esc_html($mandala_texto_link); ?> <i class="arrow-icon">→</i></a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 col-right">
                    <?php 
                    $mandala_imagem = get_field('mandala_imagem');
                    if( $mandala_imagem ): ?>
                        <img src="<?php echo esc_url($mandala_imagem); ?>" alt="Grupo RIC" />
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala_2025_ric.png" alt="Grupo RIC" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cobertura-section position-relative py-5" style="display: none;">
        <!-- Gradiente que vai da borda esquerda da tela até o meio -->
        <div class="gradient-overlay position-absolute"></div>
        
        <div class="container position-relative h-100">
            <div class="row align-items-center h-100">
                <!-- Coluna do conteúdo (logo e texto) -->
                <div class="col-lg-6">
                    <div class="content-cobertura d-flex align-items-center gap-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-azul.png" alt="Grupo RIC" class="logo-cobertura">
                        <div>
                            <h2 class="texto-cobertura fw-bold mb-0">Clique no mapa e veja onde o Grupo RIC está no Paraná</h2>
                        </div>
                    </div>
                </div>
                
                <!-- Coluna do mapa -->
                <div class="col-lg-6">
                    <div class="mapa-container d-flex justify-content-center align-items-center h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-ric.png" alt="Mapa do Paraná" class="mapa-parana-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ric-where">
        <div class="ric-grid">
            <div class="ric-text-section">
                <img class="ric-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-azul.png" alt="Grupo RIC" />
                <div class="ric-copy">
                    <?php 
                    $mapa_texto = get_field('mapa_texto');
                    if( $mapa_texto ): ?>
                        <h2 class="text-medium-small ric-title">
                            <?php echo $mapa_texto; ?>
                        </h2>
                    <?php else: ?>
                        <h2 class="text-medium-small ric-title">
                            Clique no mapa e veja onde o Grupo Ric está no Paraná.
                        </h2>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ric-map">
                <?php 
                $mapa_imagem = get_field('mapa_imagem');
                if( $mapa_imagem ): ?>
                    <img src="<?php echo esc_url($mapa_imagem); ?>" alt="Mapa do Paraná com pontos do Grupo RIC" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-ric.png" alt="Mapa do Paraná com pontos do Grupo RIC" />
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="instituto-ric position-relative py-5">
        <div class="container container--big">
            <div class="instituto-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/img/criancas-que-jogam-na-grama.jpg') no-repeat center center; background-size: cover;">
                <div class="instituto-logo">
                    <?php 
                    $atitude_logo = get_field('atitude_logo');
                    if( $atitude_logo ): ?>
                        <img src="<?php echo esc_url($atitude_logo); ?>" alt="Instituto RIC" class="img-fluid">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-instituto-ric.png" alt="Instituto RIC" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="instituto-content text-white">
                    <?php 
                    $atitude_texto = get_field('atitude_texto');
                    if( $atitude_texto ): ?>
                        <div class="content">
                            <?php echo $atitude_texto; ?>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                    
                    <?php 
                    $atitude_texto_link = get_field('atitude_texto_link');
                    $atitude_link = get_field('atitude_link');
                    if( $atitude_texto_link ): ?>
                        <a href="<?php echo esc_url($atitude_link); ?>" class="btn btn-outline-light btn-lg instituto-btn hover-underline text-white">
                            <span class="btn-content">
                                <?php echo esc_html($atitude_texto_link); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </span>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section class="redes-sociais">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                    <div class="redes-sociais-header">
                        <h2 class="text-medium-big">Acompanhe as redes sociais do grupo RIC</h2>
                        
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
                                <?php if ($social_linkedin) : ?>
                                    <a href="<?php echo $social_linkedin; ?>" class="me-3" target="_blank" rel="noopener">
                                        <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z'></path></svg>
                                    </a>
                                <?php endif; ?>
                                <?php if ($social_instagram) : ?>
                                    <a href="<?php echo $social_instagram; ?>" class="me-3" target="_blank" rel="noopener">
                                        <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z'></path></svg>
                                    </a>
                                <?php endif; ?>
                                <?php if ($social_facebook) : ?>
                                    <a href="<?php echo $social_facebook; ?>" target="_blank" rel="noopener">
                                        <svg width='20' height='20' viewBox='0 0 320 512' xmlns='http://www.w3.org/2000/svg'><path d='M279.14 288l14.22-92.66h-88.91V127.22c0-25.35 12.42-50.06 52.24-50.06H295V6.26S259.91 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72V195.3H22.89V288h81.39v224h100.17V288z'/></svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
               </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'components/anuncie-grupo-ric.php'; ?>
        
    <section class="insights-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-start mb-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 col-6">
                        <h2 class="text-medium-big display-4 fw-bold mb-3">RIC Talks</h2>
                    </div>
                    <div class="col-lg-6 col-6 d-flex justify-content-lg-end gap-3 mt-3 mt-lg-0">
                        <a href="<?php echo home_url('/blog'); ?>" class="btn btn-outline-primary px-4 py-2">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php
                // Query para buscar os 3 posts mais recentes
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                
                $blog_posts = new WP_Query($args);
                
                if ($blog_posts->have_posts()) :
                    $post_count = 0;
                    
                    while ($blog_posts->have_posts()) : $blog_posts->the_post();
                        $post_count++;
                        
                        // Buscar imagem destacada
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if (!$thumbnail_url) {
                            $thumbnail_url = get_template_directory_uri() . '/assets/img/criancas-que-jogam-na-grama.jpg';
                        }
                        
                        // Buscar categoria
                        $categories = get_the_category();
                        $category_name = !empty($categories) ? $categories[0]->name : 'Artigo';
                        $category_class = !empty($categories) ? sanitize_title($categories[0]->name) : 'artigo';
                        
                        // Primeiro post - ocupa col-lg-7 (lado esquerdo)
                        if ($post_count == 1) :
                ?>
                    <div class="col-lg-7">
                        <div class="card border-0 bg-transparent">
                            <a href="<?php the_permalink(); ?>" class="case-link">
                                <div class="position-relative card-bg-img" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                        <span class="badge <?php echo esc_attr($category_class); ?> bg-warning text-dark mb-3 align-self-start px-3 py-2"><?php echo esc_html($category_name); ?></span>
                                        <h3 class="text-medium text-white"><?php the_title(); ?></h3>
                                        <button class="btn btn-link text-white p-0">+</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                        // Segundo e terceiro posts - começam col-lg-5 (lado direito)
                        elseif ($post_count == 2) :
                ?>
                    <div class="col-lg-5">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="card border-0 bg-transparent">
                                    <a href="<?php the_permalink(); ?>" class="case-link">
                                        <div class="position-relative card-bg-img" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                                <span class="badge <?php echo esc_attr($category_class); ?> bg-warning text-dark mb-3 align-self-start px-3 py-2"><?php echo esc_html($category_name); ?></span>
                                                <h3 class="text-medium text-white"><?php the_title(); ?></h3>
                                                <button class="btn btn-link text-white p-0">+</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                <?php
                        else : // Terceiro post
                ?>
                            <div class="col-12">
                                <div class="card border-0 bg-transparent">
                                    <a href="<?php the_permalink(); ?>" class="case-link">
                                        <div class="position-relative card-bg-img" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                                            <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                                <span class="badge <?php echo esc_attr($category_class); ?> bg-warning text-dark mb-3 align-self-start px-3 py-2"><?php echo esc_html($category_name); ?></span>
                                                <h3 class="text-medium text-white"><?php the_title(); ?></h3>
                                                <button class="btn btn-link text-white p-0">+</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                        endif;
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-12">
                        <p class="text-center">Nenhum post encontrado.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>