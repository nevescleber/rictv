<?php get_header(); ?>

 <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Banner.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <section class="projetos-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="projeto-header">
                            <div class="projeto-title">
                                <h1><?php the_title(); ?></h1>
                                <div class="projeto-meta">
                                    <?php
                                    // Buscar todas as regiões
                                    $regioes = get_the_terms(get_the_ID(), 'regiao');
                                    if ($regioes && !is_wp_error($regioes)) :
                                        $nomes_regioes = array();
                                        foreach ($regioes as $regiao) {
                                            $nomes_regioes[] = $regiao->name;
                                        }
                                        $regioes_texto = implode(', ', $nomes_regioes);
                                    ?>
                                        <div class="location">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Localização">
                                            <span><?php echo esc_html($regioes_texto); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="info-tags">
                                        <?php
                                        // Data de publicação
                                        $mes_projeto = get_post_meta(get_the_ID(), 'mes_projeto', true);
                                        if ($mes_projeto) {
                                            $meses = array(
                                                '1' => 'JANEIRO', '2' => 'FEVEREIRO', '3' => 'MARÇO',
                                                '4' => 'ABRIL', '5' => 'MAIO', '6' => 'JUNHO',
                                                '7' => 'JULHO', '8' => 'AGOSTO', '9' => 'SETEMBRO',
                                                '10' => 'OUTUBRO', '11' => 'NOVEMBRO', '12' => 'DEZEMBRO'
                                            );
                                            echo '<span class="date">' . $meses[$mes_projeto] . ' ' . get_the_date('Y') . '</span>';
                                        } else {
                                            echo '<span class="date">' . strtoupper(get_the_date('F Y')) . '</span>';
                                        }
                                        
                                        // Plataformas
                                        $plataformas = get_the_terms(get_the_ID(), 'plataforma');
                                        if ($plataformas && !is_wp_error($plataformas)) {
                                            foreach ($plataformas as $plataforma) {
                                                echo '<span class="type">' . strtoupper(esc_html($plataforma->name)) . '</span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="perfil-programa">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="perfil-header">
                            <h2>Perfil do Programa</h2>
                            <div class="categorias">
                                <?php
                                // Buscar taxonomias de perfil
                                $perfis = get_the_terms(get_the_ID(), 'perfil');
                                if ($perfis && !is_wp_error($perfis)) {
                                    foreach ($perfis as $perfil) {
                                        echo '<span>' . strtoupper(esc_html($perfil->name)) . '</span>';
                                    }
                                } else {
                                    echo '<span>SEM CATEGORIAS DEFINIDAS</span>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="perfil-content">
                            <?php 
                            if (get_the_content()) {
                                the_content();
                            } else {
                                echo '<p>Conteúdo não disponível para este projeto.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="anuncie-section py-5 position-relative">
            <div class="container-fluid">
                <div class="container">
                    <div class="anuncie-container">
                        <div class="anuncie-bg"></div>
                        <div class="anuncie-flex">
                            <div>
                                <h2 class="display-4 fw-bold text-white mb-0">Se interessou?<br>Baixe o PDF agora!</h2>
                            </div>
                            <div class="anuncie-text">
                                <p class="text-white fs-4 mb-0">Baixe o PDF e saiba tudo o que o programa pode oferecer para o crescimento do seu negócio</p>
                            </div>
                            <div>
                                <?php 
                                $pdf_url = get_field('PDF'); // Campo ACF
                                if ($pdf_url) : 
                                ?>
                                    <a href="<?php echo esc_url($pdf_url); ?>" class="btn btn-success btn-lg px-4 py-3 anuncie-btn" target="_blank">
                                        Baixe o PDF
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Download" class="ms-2 download-icon">
                                    </a>
                                <?php else : ?>
                                    <button class="btn btn-secondary btn-lg px-4 py-3" disabled>
                                        PDF não disponível
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projetos-buscas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Outros Projetos</h2>
                    </div>
                </div>

                <div class="row projetos-grid">
                    <?php
                    // Query para buscar outros projetos (excluindo o atual)
                    $outros_projetos = new WP_Query(array(
                        'post_type' => 'projetos-especiais',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'post__not_in' => array(get_the_ID()) // Excluir o projeto atual
                    ));

                    if ($outros_projetos->have_posts()) :
                        while ($outros_projetos->have_posts()) : $outros_projetos->the_post();
                            
                            // Buscar taxonomias do post atual
                            $regioes_outros = get_the_terms(get_the_ID(), 'regiao');
                            $plataformas_outros = get_the_terms(get_the_ID(), 'plataforma');
                            
                            // Preparar descrição com 100 caracteres
                            $descricao_outros = get_the_excerpt();
                            if (empty($descricao_outros)) {
                                $descricao_outros = get_the_content();
                            }
                            $descricao_outros = wp_strip_all_tags($descricao_outros);
                            if (strlen($descricao_outros) > 100) {
                                $descricao_outros = substr($descricao_outros, 0, 100) . '...';
                            }
                            
                            // Preparar localização (todas as regiões)
                            $localizacao_outros = '';
                            if ($regioes_outros && !is_wp_error($regioes_outros)) {
                                $nomes_regioes_outros = array();
                                foreach ($regioes_outros as $regiao_outro) {
                                    $nomes_regioes_outros[] = $regiao_outro->name;
                                }
                                $localizacao_outros = implode(', ', $nomes_regioes_outros);
                            }
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php the_permalink(); ?>" class="projeto-link">
                                <div class="projeto-box">
                                    <div class="projeto-imagem">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-projeto-especial.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="projeto-content">
                                        <div class="projeto-tags">
                                            <?php
                                            // Mostrar tags de Plataforma
                                            if ($plataformas_outros && !is_wp_error($plataformas_outros)) {
                                                foreach ($plataformas_outros as $plataforma) {
                                                    echo '<span class="tag ' . esc_attr($plataforma->slug) . '">' . esc_html($plataforma->name) . '</span>';
                                                }
                                            }
                                            ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo esc_html($descricao_outros); ?></p>
                                        <?php if ($localizacao_outros) : ?>
                                            <div class="projeto-location">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Localização">
                                                <span><?php echo esc_html($localizacao_outros); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="col-12">
                            <p class="text-center">Nenhum outro projeto encontrado.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
           
        </section>

        <div class="divisor"></div>
        
    </main>

<?php get_footer(); ?>