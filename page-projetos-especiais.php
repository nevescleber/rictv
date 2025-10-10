<?php /* Template Name: Projetos Especiais */ ?>

<?php get_header(); ?>

    <div class="banners">
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-projetos-especiais.jpg" alt="RIC TV">
                    <?php endif; ?>
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-big">Projetos</h1>
                                    <!--<p>
                                        Aqui você encontra nossa seleção de Projetos Especiais vigentes em todos os nossos canais.
                                        Busque e <br> confira nossas linhas mais segmentadas para mídia e perfomance crossmedia.
                                    </p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="banner-projetos" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banners">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php
                                // Query para buscar projetos em destaque para o slider
                                $projetos_destaque_slider = new WP_Query(array(
                                    'post_type' => 'projetos-especiais',
                                    'posts_per_page' => 5, // Limite de slides
                                    'post_status' => 'publish',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'destaque',
                                            'value' => array('Sim', 'True', '1', 'true', 'yes'),
                                            'compare' => 'IN'
                                        )
                                    )
                                ));

                                if ($projetos_destaque_slider->have_posts()) :
                                    while ($projetos_destaque_slider->have_posts()) : $projetos_destaque_slider->the_post();
                                        
                                        // Preparar descrição com 100 caracteres
                                        $descricao = get_the_excerpt();
                                        if (empty($descricao)) {
                                            $descricao = get_the_content();
                                        }
                                        $descricao = wp_strip_all_tags($descricao);
                                        if (strlen($descricao) > 100) {
                                            $descricao = substr($descricao, 0, 100) . '...';
                                        }
                                ?>
                                    <div class="swiper-slide">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-projetos-especiais.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <div class="slide-text">
                                                <h2><?php the_title(); ?></h2>
                                                <?php if ($descricao) : ?>
                                                    <p><?php echo esc_html($descricao); ?></p>
                                                <?php endif; ?>
                                                <a href="<?php the_permalink(); ?>" class="btn-secondary">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    // Fallback se não houver projetos em destaque
                                ?>
                                    <!--<div class="swiper-slide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-projetos-especiais.jpg" alt="Projetos Especiais">
                                        <div class="slide-overlay"></div>
                                        <div class="slide-content">
                                            <div class="slide-text">
                                                <h2>Projetos Especiais</h2>
                                                <p>Conheça nossos projetos especiais e iniciativas exclusivas.</p>
                                                <a href="#projetos" class="btn-secondary">Ver Projetos</a>
                                            </div>
                                        </div>
                                    </div>-->
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
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
                    <div class="filtros-wrapper">
                        <div class="filtro">
                            <select name="regiao" id="regiao">
                                <option value="" selected disabled>Região</option>
                                <?php
                                $regioes = get_terms(array(
                                    'taxonomy' => 'regiao',
                                    'hide_empty' => false,
                                ));
                                if (!empty($regioes) && !is_wp_error($regioes)) {
                                    foreach ($regioes as $regiao) {
                                        echo '<option value="' . esc_attr($regiao->slug) . '">' . esc_html($regiao->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="filtro">
                            <select name="perfil" id="perfil">
                                <option value="" selected disabled>Perfil</option>
                                <?php
                                $perfis = get_terms(array(
                                    'taxonomy' => 'perfil',
                                    'hide_empty' => false,
                                ));
                                if (!empty($perfis) && !is_wp_error($perfis)) {
                                    foreach ($perfis as $perfil) {
                                        echo '<option value="' . esc_attr($perfil->slug) . '">' . esc_html($perfil->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="filtro">
                            <select name="mes" id="mes">
                                <option value="" selected disabled>Mês</option>
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                        </div>
                        <div class="filtro">
                            <select name="plataforma" id="plataforma">
                                <option value="" selected disabled>Plataforma</option>
                                <?php
                                $plataformas = get_terms(array(
                                    'taxonomy' => 'plataforma',
                                    'hide_empty' => false,
                                ));
                                if (!empty($plataformas) && !is_wp_error($plataformas)) {
                                    foreach ($plataformas as $plataforma) {
                                        echo '<option value="' . esc_attr($plataforma->slug) . '">' . esc_html($plataforma->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button class="btn-buscar" id="btn-buscar">Buscar</button>
                    </div>
                </div>
            </div>
            
            <div class="row projetos-grid" id="projetos-grid">
                <?php
                // Paginação
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                // Query para buscar posts do tipo projetos-especiais
                $projetos_query = new WP_Query(array(
                    'post_type' => 'projetos-especiais',
                    'posts_per_page' => 9, // Número de posts por página
                    'post_status' => 'publish',
                    'paged' => $paged
                ));

                if ($projetos_query->have_posts()) :
                    while ($projetos_query->have_posts()) : $projetos_query->the_post();
                        
                        // Buscar taxonomias do post atual
                        $regioes = get_the_terms(get_the_ID(), 'regiao');
                        $perfis = get_the_terms(get_the_ID(), 'perfil');
                        $plataformas = get_the_terms(get_the_ID(), 'plataforma');
                        
                        // Preparar descrição com 100 caracteres
                        $descricao = get_the_excerpt();
                        if (empty($descricao)) {
                            $descricao = get_the_content();
                        }
                        $descricao = wp_strip_all_tags($descricao);
                        if (strlen($descricao) > 100) {
                            $descricao = substr($descricao, 0, 100) . '...';
                        }
                        
                        // Preparar localização (todas as regiões)
                        $localizacao = '';
                        if ($regioes && !is_wp_error($regioes)) {
                            $nomes_regioes = array();
                            foreach ($regioes as $regiao) {
                                $nomes_regioes[] = $regiao->name;
                            }
                            $localizacao = implode(', ', $nomes_regioes);
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
                                        // Mostrar tags de Perfil
                                        /*if ($perfis && !is_wp_error($perfis)) {
                                            foreach ($perfis as $perfil) {
                                                echo '<span class="tag ' . esc_attr($perfil->slug) . '">' . esc_html($perfil->name) . '</span>';
                                            }
                                        }*/
                                        
                                        // Mostrar tags de Plataforma
                                        if ($plataformas && !is_wp_error($plataformas)) {
                                            foreach ($plataformas as $plataforma) {
                                                echo '<span class="tag ' . esc_attr($plataforma->slug) . '">' . esc_html($plataforma->name) . '</span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo esc_html($descricao); ?></p>
                                    <?php if ($localizacao) : ?>
                                        <div class="projeto-location">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Localização">
                                            <span><?php echo esc_html($localizacao); ?></span>
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
                        <p class="text-center">Nenhum projeto especial encontrado.</p>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            // Paginação dinâmica
            $total_pages = $projetos_query->max_num_pages;
            if ($total_pages > 1) :
            ?>
            <div class="row" id="paginacao-container">
                <div class="col-12">
                    <div class="paginacao">
                        <?php
                        // Página anterior
                        if ($paged > 1) {
                            echo '<a href="' . get_pagenum_link($paged - 1) . '" class="pagina prev">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 11L1.5 6L6.5 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>';
                        }
                        
                        // Páginas numeradas
                        for ($i = 1; $i <= $total_pages; $i++) {
                            $active_class = ($i == $paged) ? ' active' : '';
                            echo '<a href="' . get_pagenum_link($i) . '" class="pagina' . $active_class . '">' . $i . '</a>';
                        }
                        
                        // Próxima página
                        if ($paged < $total_pages) {
                            echo '<a href="' . get_pagenum_link($paged + 1) . '" class="pagina next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="divisor"></div>

<!-- CSS para Overlay e Skeleton Loading -->
<style>
/* Overlay para os slides dos projetos especiais */
.banner-projetos .slide-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

.banner-projetos .swiper-slide {
    position: relative;
}

.banner-projetos .slide-content {
    position: relative;
    z-index: 2;
}

.skeleton-loading {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

.skeleton-box {
    border-radius: 8px;
    margin-bottom: 20px;
}

.skeleton-image {
    height: 200px;
    width: 100%;
    margin-bottom: 15px;
}

.skeleton-title {
    height: 20px;
    width: 70%;
    margin-bottom: 10px;
}

.skeleton-text {
    height: 14px;
    width: 100%;
    margin-bottom: 5px;
}

.skeleton-text:last-child {
    width: 60%;
}

.skeleton-tags {
    height: 12px;
    width: 40%;
    margin-bottom: 10px;
}
</style>

<!-- JavaScript AJAX -->
<script>
jQuery(document).ready(function($) {
    
    // Função para criar skeleton loading
    function createSkeletonLoading() {
        let skeletonHtml = '';
        for (let i = 0; i < 9; i++) {
            skeletonHtml += `
                <div class="col-lg-4 col-md-6">
                    <div class="skeleton-box">
                        <div class="skeleton-loading skeleton-image"></div>
                        <div class="skeleton-loading skeleton-tags"></div>
                        <div class="skeleton-loading skeleton-title"></div>
                        <div class="skeleton-loading skeleton-text"></div>
                        <div class="skeleton-loading skeleton-text"></div>
                        <div class="skeleton-loading skeleton-text"></div>
                    </div>
                </div>
            `;
        }
        return skeletonHtml;
    }
    
    // Função para fazer busca AJAX
    function buscarProjetos(page = 1) {
        const regiao = $('#regiao').val();
        const perfil = $('#perfil').val();
        const mes = $('#mes').val();
        const plataforma = $('#plataforma').val();
        
        // Mostrar skeleton loading
        $('#projetos-grid').html(createSkeletonLoading());
        $('#paginacao-container').hide();
        
        // Alterar texto do botão
        $('#btn-buscar').text('Buscando...').prop('disabled', true);
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'buscar_projetos',
                regiao: regiao,
                perfil: perfil,
                mes: mes,
                plataforma: plataforma,
                paged: page,
                nonce: '<?php echo wp_create_nonce('projetos_ajax_nonce'); ?>'
            },
            success: function(response) {
                if (response.success) {
                    // Atualizar conteúdo
                    $('#projetos-grid').html(response.data.html);
                    
                    // Atualizar ou esconder paginação
                    if (response.data.paginacao) {
                        $('#paginacao-container').replaceWith(response.data.paginacao);
                    } else {
                        $('#paginacao-container').hide();
                    }
                    
                    // Scroll suave para os resultados
                    $('html, body').animate({
                        scrollTop: $('#projetos-grid').offset().top - 100
                    }, 500);
                }
            },
            error: function() {
                $('#projetos-grid').html('<div class="col-12"><p class="text-center">Erro ao buscar projetos. Tente novamente.</p></div>');
            },
            complete: function() {
                // Restaurar botão
                $('#btn-buscar').text('Buscar').prop('disabled', false);
            }
        });
    }
    
    // Evento no botão buscar
    $('#btn-buscar').on('click', function(e) {
        e.preventDefault();
        buscarProjetos(1);
    });
    
    // Busca automática quando mudar filtros
    $('#regiao, #perfil, #mes, #plataforma').on('change', function() {
        buscarProjetos(1);
    });
    
    // Paginação AJAX
    $(document).on('click', '.paginacao .pagina', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        if (page) {
            buscarProjetos(page);
        }
    });
    
    // Enter no campo de busca
    $('.filtros-wrapper select').on('keypress', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            buscarProjetos(1);
        }
    });
    
});
</script>

<?php get_footer(); ?>