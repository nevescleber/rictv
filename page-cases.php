<?php 
/*
Template Name: Cases
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-equipe.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Cases</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <div class="filtro">
                            <label class="checkbox-container">
                                <input type="checkbox" name="crossmedia" id="crossmedia">
                                <span>Mostrar Somente projetos crossmedia</span>
                            </label>
                        </div>
                        <button class="btn-buscar" id="btn-buscar">Buscar</button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="lista-cases" id="cases-grid">
                        <?php
                        // Paginação
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        
                        // Query para buscar posts do tipo 'cases'
                        $cases_args = array(
                            'post_type' => 'cases',
                            'posts_per_page' => 9, // Mostrar 9 cases por página
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged
                        );
                        
                        $cases_query = new WP_Query($cases_args);
                        
                        if ($cases_query->have_posts()) :
                            while ($cases_query->have_posts()) : $cases_query->the_post();
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
                            <div class="no-cases">
                                <p>Nenhum case encontrado. <a href="<?php echo admin_url('post-new.php?post_type=cases'); ?>">Adicione o primeiro case</a>.</p>
                            </div>
                        <?php 
                        endif;
                        ?>
                    </div>

                    <?php if ($cases_query->max_num_pages > 1) : ?>
                    <div class="paginacao" id="paginacao-container">
                        <?php
                        // Paginação dinâmica
                        $current_page = max(1, $paged);
                        $total_pages = $cases_query->max_num_pages;
                        
                        // Página anterior
                        if ($current_page > 1) :
                            $prev_page = $current_page - 1;
                        ?>
                            <button class="pagina prev" data-page="<?php echo $prev_page; ?>">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 11L1.5 6L6.5 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        <?php endif; ?>
                        
                        <?php
                        // Mostrar páginas
                        $start_page = max(1, $current_page - 2);
                        $end_page = min($total_pages, $current_page + 2);
                        
                        for ($i = $start_page; $i <= $end_page; $i++) :
                            $active_class = ($i == $current_page) ? ' active' : '';
                        ?>
                            <button class="pagina<?php echo $active_class; ?>" data-page="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </button>
                        <?php endfor; ?>
                        
                        <?php
                        // Próxima página
                        if ($current_page < $total_pages) :
                            $next_page = $current_page + 1;
                        ?>
                            <button class="pagina next" data-page="<?php echo $next_page; ?>">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="divisor"></div>

<script>
jQuery(document).ready(function($) {
    // Função para buscar cases
    function buscarCases(page = 1) {
        const regiao = $('#regiao').val() || '';
        const perfil = $('#perfil').val() || '';
        const plataforma = $('#plataforma').val() || '';
        const crossmedia = $('#crossmedia').is(':checked') ? '1' : '';
        
        // Desabilitar botão e mostrar loading
        $('#btn-buscar').text('Buscando...').prop('disabled', true);
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'buscar_cases',
                regiao: regiao,
                perfil: perfil,
                plataforma: plataforma,
                crossmedia: crossmedia,
                paged: page,
                nonce: '<?php echo wp_create_nonce('cases_ajax_nonce'); ?>'
            },
            success: function(response) {
                if (response.success) {
                    // Atualizar conteúdo
                    $('#cases-grid').html(response.data.html);
                    
                    // Atualizar ou esconder paginação
                    if (response.data.paginacao) {
                        if ($('#paginacao-container').length) {
                            $('#paginacao-container').replaceWith(response.data.paginacao);
                        } else {
                            $('#cases-grid').after(response.data.paginacao);
                        }
                    } else {
                        $('#paginacao-container').hide();
                    }
                    
                    // Scroll suave para os resultados
                    $('html, body').animate({
                        scrollTop: $('#cases-grid').offset().top - 100
                    }, 500);
                } else {
                    $('#cases-grid').html('<div class="no-cases"><p>Nenhum case encontrado com os filtros selecionados.</p></div>');
                }
            },
            error: function() {
                $('#cases-grid').html('<div class="no-cases"><p>Erro ao buscar cases. Tente novamente.</p></div>');
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
        buscarCases(1);
    });
    
    // Busca automática quando mudar filtros
    $('#regiao, #perfil, #plataforma, #crossmedia').on('change', function() {
        buscarCases(1);
    });
    
    // Paginação AJAX
    $(document).on('click', '.paginacao .pagina', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        if (page) {
            buscarCases(page);
        }
    });
    
    // Enter no campo de busca
    $('.filtros-wrapper select').on('keypress', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            buscarCases(1);
        }
    });
    
});
</script>

<?php get_footer(); ?>