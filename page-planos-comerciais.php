<?php /* Template Name: Planos Comerciais */ ?>

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
                                    <h1 class="text-big"><?php echo get_the_title(); ?></h1>
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

    <?php
    // Detectar qual página estamos (radio ou tv) baseado no slug
    $current_page_slug = get_post_field('post_name', get_the_ID());
    $plataforma_filtro = '';
    
    if (strpos($current_page_slug, 'radio') !== false) {
        $plataforma_filtro = 'radio';
    } elseif (strpos($current_page_slug, 'tv') !== false) {
        $plataforma_filtro = 'tv';
    }
    
    // Paginação
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    // Preparar query com filtro de plataforma se necessário
    $args = array(
        'post_type' => 'planos-comerciais',
        'posts_per_page' => 8,
        'post_status' => 'publish',
        'paged' => $paged
    );
    
    // Se houver filtro de plataforma pela URL, aplicar
    if (!empty($plataforma_filtro)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'plataforma',
                'field' => 'slug',
                'terms' => $plataforma_filtro,
            )
        );
    }
    
    $planos_query = new WP_Query($args);
    ?>

    <section class="midia-kit-busca">
        <div class="container">
            <div class="midia-kit-header">
                <div class="midia-kit-header-titulo">
                    Confira nossos Planos Comerciais
                </div>
                <div class="midia-kit-filtros">
                    <span class="filtro-label">Filtrar por</span>
                    <div class="filtros-container">
                        <div class="filtro">
                            <select name="regiao" id="regiao">
                                <option value="">Região</option>
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
                            <select name="plataforma" id="plataforma">
                                <option value="">Plataforma</option>
                                <?php
                                $plataformas = get_terms(array(
                                    'taxonomy' => 'plataforma',
                                    'hide_empty' => false,
                                ));
                                if (!empty($plataformas) && !is_wp_error($plataformas)) {
                                    foreach ($plataformas as $plataforma) {
                                        $selected = ($plataforma->slug == $plataforma_filtro) ? ' selected' : '';
                                        echo '<option value="' . esc_attr($plataforma->slug) . '"' . $selected . '>' . esc_html($plataforma->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="midia-kit-divisor">
            <div class="row midia-kit-grid" id="planos-grid">
                <?php
                if ($planos_query->have_posts()) :
                    while ($planos_query->have_posts()) : $planos_query->the_post();
                ?>
                    <div class="col-lg-3 col-md-6 col-12">
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
                    <div class="col-12">
                        <p class="text-center">Nenhum plano comercial encontrado.</p>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            // Paginação dinâmica
            $total_pages = $planos_query->max_num_pages;
            if ($total_pages > 1) :
            ?>
            <div class="paginacao" id="paginacao-container">
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
        for (let i = 0; i < 8; i++) {
            skeletonHtml += `
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="skeleton-box">
                        <div class="skeleton-loading skeleton-image"></div>
                    </div>
                </div>
            `;
        }
        return skeletonHtml;
    }
    
    // Função para fazer busca AJAX
    function buscarPlanos(page = 1) {
        const regiao = $('#regiao').val() || '';
        const plataforma = $('#plataforma').val() || '';
        
        // Mostrar skeleton loading
        $('#planos-grid').html(createSkeletonLoading());
        $('#paginacao-container').hide();
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'buscar_planos',
                regiao: regiao,
                perfil: '',
                mes: '',
                plataforma: plataforma,
                paged: page,
                nonce: '<?php echo wp_create_nonce('planos_ajax_nonce'); ?>'
            },
            success: function(response) {
                if (response.success) {
                    // Atualizar conteúdo
                    $('#planos-grid').html(response.data.html);
                    
                    // Atualizar ou esconder paginação
                    if (response.data.paginacao) {
                        // Remover paginação existente
                        $('#paginacao-container').remove();
                        // Adicionar nova paginação
                        $('.midia-kit-busca .container').append(response.data.paginacao);
                    } else {
                        $('#paginacao-container').remove();
                    }
                    
                    // Scroll suave para os resultados
                    $('html, body').animate({
                        scrollTop: $('#planos-grid').offset().top - 100
                    }, 500);
                }
            },
            error: function() {
                $('#planos-grid').html('<div class="col-12"><p class="text-center">Erro ao buscar planos comerciais. Tente novamente.</p></div>');
            }
        });
    }
    
    // Busca automática quando mudar filtros
    $('#regiao, #plataforma').on('change', function() {
        buscarPlanos(1);
    });
    
    // Paginação AJAX (para links normais)
    $(document).on('click', '#paginacao-container a.pagina', function(e) {
        e.preventDefault();
        
        const url = $(this).attr('href');
        const pageMatch = url.match(/page\/(\d+)/);
        const page = pageMatch ? pageMatch[1] : 1;
        buscarPlanos(page);
    });
    
    // Paginação AJAX (para buttons AJAX)
    $(document).on('click', '#paginacao-container button.pagina', function(e) {
        e.preventDefault();
        
        const page = $(this).data('page');
        if (page) {
            buscarPlanos(page);
        }
    });
    
});
</script>

<?php get_footer(); ?>