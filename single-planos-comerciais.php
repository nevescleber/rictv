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
                                <div class="social-icons">
                                    <a href="#" target="_blank">
                                        <div class="social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank">
                                        <div class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank">
                                        <div class="social-icon">
                                            <i class="fab fa-youtube"></i>
                                        </div>
                                    </a>
                                </div>
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

        <?php else : ?>
            <p>Sessão para TV</p>
        <?php endif; ?>

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
                                    <a href="<?php echo esc_url($pdf_url); ?>" class="btn btn-success btn-lg px-4 py-3 anuncie-btn" target="_blank">
                                        Baixe o Mídia Kit
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Download" class="ms-2 download-icon">
                                    </a>
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

        <section class="midia-kit-busca">
            <div class="container">
                <div class="midia-kit-header">
                    <div class="midia-kit-header-titulo">
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
        

<?php get_footer(); ?>
