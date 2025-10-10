<?php get_header(); ?>

    <div class="banners">
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>
    </div>

    <section class="projetos-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="case-header">
                        <div class="case-tag-wrapper">
                            <span class="case-tag">CASE</span>
                            <span class="case-date">
                                <?php 
                                // Array com nomes dos meses em português
                                $meses = array(
                                    1 => 'JANEIRO', 2 => 'FEVEREIRO', 3 => 'MARÇO', 4 => 'ABRIL',
                                    5 => 'MAIO', 6 => 'JUNHO', 7 => 'JULHO', 8 => 'AGOSTO',
                                    9 => 'SETEMBRO', 10 => 'OUTUBRO', 11 => 'NOVEMBRO', 12 => 'DEZEMBRO'
                                );
                                
                                $mes_atual = (int) date('n'); // Número do mês atual
                                $ano_atual = date('Y'); // Ano atual
                                
                                echo $meses[$mes_atual] . ' ' . $ano_atual;
                                ?>
                            </span>
                        </div>
                        <div class="case-logo">
                            <?php 
                            $logotipo = get_field('logotipo');
                            if ($logotipo) : 
                            ?>
                                <img src="<?php echo esc_url($logotipo); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="projeto-header">
                        <div class="projeto-title">
                            <h1 class="text-big"><?php the_title(); ?></h1>
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
                    <div class="text-medium">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contato-section">
        <div class="container">
            <div class="contato-wrapper">
                <div class="contato-content">
                    <div class="contato-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/elementos.png" alt="Ícone">
                    </div>
                    <div class="contato-text">
                        <h2 class="text-big">Quer saber mais sobre como podemos alavancar sua marca?</h2>
                        <p class="text-medium">Preencha o formulário e nosso Executivo de Contas entrará em contato.</p>
                    </div>
                </div>
                <div class="contato-action">
                    <a href="#" class="btn-preencher text-big">Preencher Formulário</a>
                </div>
            </div>
        </div>
    </section>

    <section class="projetos-buscas">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2 class="text-big">Outros Cases</h2>
                        <a href="cases" class="btn-todos-cases text-medium">Todos os Cases</a>
                    </div>
                </div>
            </div>

            <div class="lista-cases">
                <?php
                // Query para buscar outros cases (excluindo o atual)
                $outros_cases_args = array(
                    'post_type' => 'cases',
                    'posts_per_page' => 3, // Mostrar apenas 3 outros cases
                    'post_status' => 'publish',
                    'orderby' => 'rand', // Ordem aleatória para variedade
                    'post__not_in' => array(get_the_ID()) // Excluir o case atual
                );
                
                $outros_cases_query = new WP_Query($outros_cases_args);
                
                if ($outros_cases_query->have_posts()) :
                    while ($outros_cases_query->have_posts()) : $outros_cases_query->the_post();
                        // Verificar se é crossmedia
                        $is_crossmedia = get_post_meta(get_the_ID(), '_is_crossmedia', true);
                        
                        // Verificar se tem thumbnail
                        $thumbnail_url = '';
                        if (has_post_thumbnail()) {
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        } else {
                            // Imagem padrão se não tiver thumbnail
                            $thumbnail_url = get_template_directory_uri() . '/assets/img/img-cases-mulher.jpg';
                        }
                ?>
                
                <a href="<?php echo get_permalink(); ?>" class="case-item">
                    <?php if ($is_crossmedia) : ?>
                        <div class="crossmedia-tag">Crossmedia</div>
                    <?php endif; ?>
                    <div class="image-container">
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    </div>
                    <div class="case-title">
                        <h3><?php echo esc_html(get_the_title()); ?></h3>
                    </div>
                </a>
                
                <?php 
                    endwhile;
                else : 
                ?>
                    <div class="no-other-cases">
                        <p>Nenhum outro case disponível no momento.</p>
                    </div>
                <?php 
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>