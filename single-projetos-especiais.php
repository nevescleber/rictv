<?php get_header(); ?>

 <main class="content projetos-especiais">
    <div class="banners">
        <div class="banner-content">
            <?php
            $imagem_grande = get_field('projetos_imagem_grande');

            if (!empty($imagem_grande)) :
                $imagem_grande = esc_url($imagem_grande);
            ?>
                <img src="<?php echo $imagem_grande; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            <?php elseif (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-projetos-especiais.jpg" alt="Projetos Especiais">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--<h1 class="text-bigger"><?php the_title(); ?></h1>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php
        $projetos_cor_principal = get_field('projetos_cor_principal');
        $default_cor = '#7f3893';
        $cor_background = '';

        if (is_array($projetos_cor_principal)) {
            if (!empty($projetos_cor_principal['rgba'])) {
                $cor_background = sanitize_text_field($projetos_cor_principal['rgba']);
            } elseif (!empty($projetos_cor_principal['hex'])) {
                $cor_background = sanitize_hex_color($projetos_cor_principal['hex']);
            }
        } elseif (is_string($projetos_cor_principal)) {
            $cor_background = sanitize_hex_color($projetos_cor_principal);
            if (!$cor_background) {
                $cor_background = sanitize_text_field($projetos_cor_principal);
            }
        }

        if (!$cor_background) {
            $cor_background = $default_cor;
        }
        ?>
        <section class="projetos-info" style="background-color: <?php echo esc_attr($cor_background); ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="projeto-header">
                            <h2 class="text-medium-big" >Perfil do Programa</h2>

                            <div class="projetos-location">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="projeto-categoria">
                            <?php
                                $projetos_cor_fundo_categorias = get_field('projetos_cor_fundo_categorias');
                                $categorias_background = '';

                                if (is_array($projetos_cor_fundo_categorias)) {
                                    if (!empty($projetos_cor_fundo_categorias['rgba'])) {
                                        $categorias_background = sanitize_text_field($projetos_cor_fundo_categorias['rgba']);
                                    } elseif (!empty($projetos_cor_fundo_categorias['hex'])) {
                                        $categorias_background = sanitize_hex_color($projetos_cor_fundo_categorias['hex']);
                                    }
                                } elseif (is_string($projetos_cor_fundo_categorias)) {
                                    $categorias_background = sanitize_hex_color($projetos_cor_fundo_categorias);
                                    if (!$categorias_background) {
                                        $categorias_background = sanitize_text_field($projetos_cor_fundo_categorias);
                                    }
                                }

                                $categorias_style_attr = $categorias_background ? ' style="background-color: ' . esc_attr($categorias_background) . ';"' : '';
                            ?>
                            <div class="categorias"<?php echo $categorias_style_attr; ?>>
                                <?php
                                    // Buscar taxonomias de perfil
                                    $perfis = get_the_terms(get_the_ID(), 'perfil');
                                    if ($perfis && !is_wp_error($perfis)) {
                                        foreach ($perfis as $perfil) {
                                            echo '<span class="text-small">' . strtoupper(esc_html($perfil->name)) . '</span>';
                                        }
                                    } else {
                                        echo '<span class="text-small"></span>';
                                    }
                                ?>
                            </div>

                            <div class="projeto-content">
                            <div class="projeto-header">
                                <div class="projeto-title">
                                    <div class="projeto-meta">
                                        
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
                                                echo '<span class="text-medium date">' . $meses[$mes_projeto] . ' ' . get_the_date('Y') . '</span>';
                                            } else {
                                                echo '<span class="text-medium date">' . strtoupper(get_the_date('F Y')) . '</span>';
                                            }
                                            
                                            // Plataformas
                                            $plataformas = get_the_terms(get_the_ID(), 'plataforma');
                                            if ($plataformas && !is_wp_error($plataformas)) {
                                                $plataforma_style_attr = $categorias_background ? ' style="background-color: ' . esc_attr($categorias_background) . ';"' : '';
                                                foreach ($plataformas as $plataforma) {
                                                    echo '<span class="text-small type"' . $plataforma_style_attr . '>' . strtoupper(esc_html($plataforma->name)) . '</span>';
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

            </div>
        </section>
        <section class="perfil-programa">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="perfil-content">
                            <?php
                            $projetos_cor_titulo = get_field('projetos_cor_principal');
                            $titulo_style = '';

                            if (is_array($projetos_cor_titulo)) {
                                if (!empty($projetos_cor_titulo['rgba'])) {
                                    $titulo_style = sanitize_text_field($projetos_cor_titulo['rgba']);
                                } elseif (!empty($projetos_cor_titulo['hex'])) {
                                    $titulo_style = sanitize_hex_color($projetos_cor_titulo['hex']);
                                }
                            } elseif (is_string($projetos_cor_titulo)) {
                                $titulo_style = sanitize_hex_color($projetos_cor_titulo);
                                if (!$titulo_style) {
                                    $titulo_style = sanitize_text_field($projetos_cor_titulo);
                                }
                            }

                            $titulo_style_attr = $titulo_style ? ' style="color: ' . esc_attr($titulo_style) . ';"' : '';
                            ?>
                            <h1 class="text-big"<?php echo $titulo_style_attr; ?>><?php the_title(); ?></h1>

                            <?php 
                                $projetos_cor_texto = get_field('projetos_cor_principal');
                                $heading_color = '';

                                if (is_array($projetos_cor_texto)) {
                                    if (!empty($projetos_cor_texto['rgba'])) {
                                        $heading_color = sanitize_text_field($projetos_cor_texto['rgba']);
                                    } elseif (!empty($projetos_cor_texto['hex'])) {
                                        $heading_color = sanitize_hex_color($projetos_cor_texto['hex']);
                                    }
                                } elseif (is_string($projetos_cor_texto)) {
                                    $heading_color = sanitize_hex_color($projetos_cor_texto);
                                    if (!$heading_color) {
                                        $heading_color = sanitize_text_field($projetos_cor_texto);
                                    }
                                }

                                $conteudo = get_the_content();

                                if ($conteudo) {
                                    if ($heading_color) {
                                        $conteudo = preg_replace_callback(
                                            '/<(h[1-4])( [^>]*)?>/i',
                                            function ($matches) use ($heading_color) {
                                                $tag = $matches[1];
                                                $attrs = isset($matches[2]) ? $matches[2] : '';

                                                if (stripos($attrs, 'style=') !== false) {
                                                    $attrs = preg_replace_callback(
                                                        '/style=("|\')(.*?)\1/i',
                                                        function ($styleMatches) use ($heading_color) {
                                                            $quote = $styleMatches[1];
                                                            $styleContent = trim($styleMatches[2]);
                                                            if ($styleContent !== '' && substr(trim($styleContent), -1) !== ';') {
                                                                $styleContent = rtrim($styleContent) . ';';
                                                            }
                                                            $styleContent .= ' color: ' . esc_attr($heading_color) . ';';
                                                            return 'style=' . $quote . $styleContent . $quote;
                                                        },
                                                        $attrs
                                                    );
                                                } else {
                                                    $attrs .= ' style="color: ' . esc_attr($heading_color) . ';"';
                                                }

                                                return '<' . $tag . $attrs . '>';
                                            },
                                            $conteudo
                                        );
                                    }

                                    echo apply_filters('the_content', $conteudo);
                                } else {
                                    echo '<p></p>';
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
                                $pdf_url = get_field('projetos_pdf'); // Campo ACF
                                if ($pdf_url) : 
                                    $pdf_url = esc_url($pdf_url);
                                ?>
                                    <button type="button" class="btn btn-success btn-lg px-4 py-3 anuncie-btn" onclick="event.preventDefault(); openPopupMidiaKit('<?php echo esc_js($pdf_url); ?>'); return false;">
                                        Baixa o nosso PDF
                                        <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Download" class="ms-2 download-icon">-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ms-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/></svg>
                                    </button>
                                <?php else : ?>
                                    <button class="btn btn-secondary btn-lg px-4 py-3" disabled>
                                        Estamos atualizando o PDF
                                    </button>
                                <?php endif; ?>
                            </div>
                            </div> <!-- Fecha projeto-content -->
                        </div> <!-- Fecha projeto-categoria -->
                    </div>
                </div>
            </div>
        </section>

        <section class="projetos-buscas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h2 class="text-big" style="margin: 0;">Outros Projetos</h2>
                            <a href="<?php echo home_url('/'); ?>/projetos-especiais" class="text-medium btn btn-outline-primary related-btn">Outros Projetos</a>
                        </div>
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

<?php include_once get_template_directory() . '/components/popup.php'; ?>

<?php get_footer(); ?>