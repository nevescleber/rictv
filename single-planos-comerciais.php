<?php get_header(); ?>

        <div class="banners">
            <div class="banner-content">
                <?php 
                $banner_imagem = get_field('banner_imagem');
                if ($banner_imagem) : ?>
                    <img src="<?php echo $banner_imagem; ?>" alt="<?php the_title(); ?>">
                <?php elseif (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-record-2.png" alt="RIC TV">
                <?php endif; ?>
                <div class="banner-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-bigger"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        $opcao = get_field('opcao');
        if ($opcao === 'Rádio') : 
        ?>
           
            <section class="planos-comerciais-sobre">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php 
                            $sessao_1_imagem_esquerda = get_field('sessao_1_imagem_esquerda');
                            if ($sessao_1_imagem_esquerda) : ?>
                                <img src="<?php echo $sessao_1_imagem_esquerda; ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-record-2.png" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php 
                            $sessao_1_texto_direito = get_field('sessao_1_texto_direito');
                            if ($sessao_1_texto_direito) : ?>
                                <div class="content">
                                    <?php echo $sessao_1_texto_direito; ?>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="planos-duracao">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="stats-container">
                                <?php 
                                $sessao_2_azul_radio = get_field('sessao_2_azul_radio');
                                $sessao_2_azul_radio_texto_fonte = get_field('sessao_2_azul_radio_texto_fonte');
                                if ($sessao_2_azul_radio) :
                                    foreach ($sessao_2_azul_radio as $item) :
                                        $numero = $item['sessao_2_azul_radio_numero'];
                                        $texto = $item['sessao_2_azul_radio_texto'];
                                ?>
                                <div class="stats-column">
                                    <div class="stats-number text-bigger"><?php echo esc_html($numero); ?></div>
                                    <div class="stats-description text-medium bold"><?php echo wp_kses($texto, array('br' => array())); ?></div>
                                </div>
                                <?php 
                                    endforeach;
                                else :
                                ?>
                                <!-- Fallback com dados padrão -->
                                <?php endif; ?>
                            </div>
                            <div class="stats-source text-small">
                                <?php echo $sessao_2_azul_radio_texto_fonte; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="planos-comerciais-potencia">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php 
                            $sessao_3_radio_texto = get_field('sessao_3_radio_texto');
                            if ($sessao_3_radio_texto) : ?>
                                <div class="content">
                                    <?php echo $sessao_3_radio_texto; ?>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php 
                            $sessao_3_radio_imagem = get_field('sessao_3_radio_imagem');
                            if ($sessao_3_radio_imagem) : ?>
                                <img src="<?php echo $sessao_3_radio_imagem; ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-record.png" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row line">
                        <div class="col-md-4">
                            <div class="social-info">
                                <h2 class="social-title">Alcance nas<br>Redes</h2>
                                <p class="social-subtitle">Nos siga nas redes sociais</p>
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
                                        <?php if ($social_instagram) : ?>
                                            <a href="<?php echo $social_instagram; ?>" target="_blank" rel="noopener">
                                                <div class="social-icon">
                                                    <i class="fab fa-instagram"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($social_facebook) : ?>
                                            <a href="<?php echo $social_facebook; ?>" target="_blank" rel="noopener">
                                                <div class="social-icon">
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($social_linkedin) : ?>
                                            <a href="<?php echo $social_linkedin; ?>" target="_blank" rel="noopener">
                                                <div class="social-icon">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="social-cards">
                            <?php 
                            $youtube_numeros = get_field('youtube_numeros');
                            $facebook_numeros = get_field('facebook_numeros');
                            $instagram_numeros = get_field('instagram_numeros');
                            ?>
                            <div class="social-card">
                                <div class="card-icon">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <div class="card-number"><?php echo $youtube_numeros ? esc_html($youtube_numeros) : '16.3m'; ?></div>
                                <div class="card-divider"></div>
                                <div class="card-description text-medium">Inscritos no <br>Youtube</div>
                            </div>
                            <div class="social-card">
                                <div class="card-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="card-number"><?php echo $facebook_numeros ? esc_html($facebook_numeros) : '319.7m'; ?></div>
                                <div class="card-divider"></div>
                                <div class="card-description text-medium">Seguidores no Facebook</div>
                            </div>
                            <div class="social-card">
                                <div class="card-icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="card-number"><?php echo $instagram_numeros ? esc_html($instagram_numeros) : '72.6m'; ?></div>
                                <div class="card-divider"></div>
                                <div class="card-description text-medium">Seguidores no Instagram</div>
                            </div>
                            </div>
                            <div class="social-source">
                                <?php 
                                $alcance_fonte = get_field('alcance_fonte');
                                echo $alcance_fonte ? $alcance_fonte : 'Fonte. Curtidas Facebook (Ago/2021) | Seguidores Instagram (Ago/2021) | Analytics Youtube/21) Jovem Pan Curitiba';
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
                                        <h2 class="text-big">Baixe Agora Nosso <br>Mídia Kit</h2>
                                    </div>
                                    <div class="anuncie-text">
                                        <p class="text-white text-medium">
                                            Criamos estratégias personalizadas para levar sua campanha ainda mais longe.
                                        </p>
                                    </div>
                                    <div>
                                        <?php 
                                        // Buscar PDF do meta campo ou ACF
                                        $pdf_url = get_post_meta(get_the_ID(), 'PDF', true);
                                        if (!$pdf_url) {
                                            $pdf_url = get_field('midia_kit_arquivo'); // Tenta ACF também
                                        }
                                        if ($pdf_url) : 
                                        ?>
                                            <button type="button" onclick="event.preventDefault(); openPopupMidiaKit('<?php echo esc_url($pdf_url); ?>'); return false;" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">
                                                Baixe o Mídia Kit
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Download" class="ms-2 download-icon">
                                            </button>
                                        <?php else : ?>
                                            <button class="btn btn-secondary btn-lg px-4 py-3" disabled>
                                                Estamos atualizando <br> o mídia kit
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div> <!-- Fecha projeto-content -->
                            </div> <!-- Fecha projeto-categoria -->
                        </div>
                    </div>
                </div>
            </section>

        <?php else : ?>
            <section class="projetos-info">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-md-6">
                            <?php 
                            $sessao_1_imagem_esquerda = get_field('sessao_1_imagem_esquerda');
                            if ($sessao_1_imagem_esquerda) : ?>
                                <div class="image">
                                    <img src="<?php echo $sessao_1_imagem_esquerda; ?>" alt="<?php the_title(); ?>">
                                </div>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-record-2.png" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <?php 
                            $sessao_1_texto_direito = get_field('sessao_1_texto_direito');
                            if ($sessao_1_texto_direito) : ?>
                                <div class="content">
                                    <?php echo $sessao_1_texto_direito; ?>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="audiencia-info py-5">
                <div class="container px-0">
                    <div class="row g-0 text-white audiencia-row">
                        <?php 
                        $sessao_2_azul_tv = get_field('sessao_2_azul_tv');
                        if ($sessao_2_azul_tv) :
                            $index = 0;
                            foreach ($sessao_2_azul_tv as $item) :
                                $numero = isset($item['sessao_2_azul_tv_numero']) ? $item['sessao_2_azul_tv_numero'] : '';
                                $titulo = isset($item['sessao_2_azul_tv_titulo']) ? $item['sessao_2_azul_tv_titulo'] : '';
                                $texto = isset($item['sessao_2_azul_tv_texto']) ? $item['sessao_2_azul_tv_texto'] : '';
                                
                                // Primeiro item sem número
                                if ($index === 0) :
                        ?>
                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center align-items-center audiencia-col text-center text-lg-start px-4 py-5">
                                <h2 class="text-big"><?php echo esc_html($titulo); ?></h2>
                                <p class="text-small"><?php echo wp_kses_post($texto); ?></p>
                            </div>
                        <?php 
                                else : 
                                    // Demais itens com número
                        ?>
                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center align-items-center audiencia-col text-center px-4 py-5">
                                <?php if ($numero) : ?>
                                    <div class="text-bigger bold"><?php echo esc_html($numero); ?></div>
                                <?php endif; ?>
                                <?php if ($titulo) : ?>
                                    <div class="text-medium-small bold"><?php echo esc_html($titulo); ?></div>
                                <?php endif; ?>
                                <?php if ($texto) : ?>
                                    <div class="text-small"><?php echo wp_kses_post($texto); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php 
                                endif;
                                $index++;
                            endforeach;
                        else :
                            // Fallback com dados padrão
                        ?>  
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="como-anunciar-section py-5">
                <div class="container">
                    <div class="row justify-content-center align-items-stretch">
                        <div class="col-lg-3 col-md-12 d-flex flex-column justify-content-center align-items-start mb-4 mb-lg-0 text-lg-start text-center">
                            <h2 class="text-big">Como anunciar?</h2>
                            <?php 
                            $como_anunciar_texto = get_field('como_anunciar_texto');
                            if ($como_anunciar_texto) : ?>
                                <div class="text-medium"><?php echo wp_kses_post($como_anunciar_texto); ?></div>
                            <?php endif; ?>
                        </div>
                        <?php 
                        $como_anunciar_itens = get_field('como_anunciar_itens');
                        if ($como_anunciar_itens) :
                            foreach ($como_anunciar_itens as $item) :
                                $titulo = isset($item['como_anunciar_item_titulo']) ? $item['como_anunciar_item_titulo'] : '';
                                $descricao = isset($item['como_anunciar_descricao']) ? $item['como_anunciar_descricao'] : '';
                        ?>
                            <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                                <div class="anunciar-box h-100 d-flex flex-column align-items-center text-center">
                                    <?php if ($titulo) : ?>
                                        <h3 class="text-medium-big"><?php echo esc_html($titulo); ?></h3>
                                    <?php endif; ?>
                                    <hr class="anunciar-box-line">
                                    <?php if ($descricao) : ?>
                                        <div class="text-medium"><?php echo wp_kses_post($descricao); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        endif; 
                        ?>
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
                                <h2 class="text-big">Precisa de uma <br>solução sob medida?</h2>
                            </div>
                            <div class="anuncie-text">
                                <p class="text-white text-medium">
                                    Criamos estratégias <br>
                                    personalizadas para levar sua <br>
                                    campanha ainda mais longe.
                                </p>
                            </div>
                            <div>
                                <?php 
                                // Buscar PDF do meta campo ou ACF
                                $pdf_url = get_post_meta(get_the_ID(), 'PDF', true);
                                if (!$pdf_url) {
                                    $pdf_url = get_field('midia_kit_arquivo'); // Tenta ACF também
                                }
                                if ($pdf_url) : 
                                ?>
                                    <button type="button" onclick="event.preventDefault(); openPopupMidiaKit('<?php echo esc_url($pdf_url); ?>'); return false;" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">
                                        Baixe o Mídia Kit
                                        <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Download" class="ms-2 download-icon">-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ms-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/></svg>
                                    </button>
                                <?php else : ?>
                                    <button class="btn btn-secondary btn-lg px-4 py-3" disabled>
                                        Estamos atualizando <br> o mídia kit
                                    </button>
                                <?php endif; ?>
                            </div>
                            </div> <!-- Fecha projeto-content -->
                        </div> <!-- Fecha projeto-categoria -->
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>


        <section class="midia-kit-busca">
            <div class="container">
                <div class="midia-kit-header">
                    <div class="text-big bold">
                        Outros Planos Comerciais
                    </div>
                    <div class="midia-kit-header-botao">
                        <a href="<?php echo home_url('/'); ?>/planos-comerciais" class="text-medium btn btn-outline-primary related-btn">Ver Todos</a>
                    </div>
                </div>
                <hr class="midia-kit-divisor">
                
                <!-- Swiper -->
                <div class="swiper planos-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        // Query para buscar outros planos comerciais (excluindo o atual)
                        $outros_planos = new WP_Query(array(
                            'post_type' => 'planos-comerciais',
                            'posts_per_page' => 12,
                            'post_status' => 'publish',
                            'post__not_in' => array(get_the_ID()) // Excluir o plano atual
                        ));

                        if ($outros_planos->have_posts()) :
                            while ($outros_planos->have_posts()) : $outros_planos->the_post();
                                
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
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>" class="midia-kit-link">
                                    <div class="midia-kit-box">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01_Midia.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="swiper-slide">
                                <div class="col-12">
                                    <p class="text-center">Nenhum plano comercial encontrado.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <div class="divisor"></div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.planos-swiper', {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        });
        </script>
        
<!-- Incluir popup do Mídia Kit -->
<?php include get_template_directory() . '/components/popup.php'; ?>

<script>
// Script de verificação - pode remover após testar
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página carregada');
    console.log('Popup existe:', document.getElementById('popup-midia-kit') ? 'SIM' : 'NÃO');
    console.log('Função openPopupMidiaKit existe:', typeof openPopupMidiaKit !== 'undefined' ? 'SIM' : 'NÃO');
});
</script>

<?php get_footer(); ?>
