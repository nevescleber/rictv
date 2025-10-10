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
                                <option value="curitiba">Curitiba</option>
                                <option value="rmc">RMC</option>
                                <option value="litoral">Litoral</option>
                                <option value="interior">Interior</option>
                            </select>
                        </div>
                        <div class="filtro">
                            <select name="perfil" id="perfil">
                                <option value="" selected disabled>Perfil</option>
                                <option value="jovem">Jovem</option>
                                <option value="adulto">Adulto</option>
                                <option value="senior">Sênior</option>
                            </select>
                        </div>
                        <div class="filtro">
                            <select name="veiculo" id="veiculo">
                                <option value="" selected disabled>Veículo</option>
                                <option value="tv">TV</option>
                                <option value="radio">Rádio</option>
                                <option value="digital">Digital</option>
                            </select>
                        </div>
                        <div class="filtro">
                            <label class="checkbox-container">
                                <input type="checkbox" name="crossmedia" id="crossmedia">
                                <span>Mostrar Somente projetos crossmedia</span>
                            </label>
                        </div>
                        <button class="btn-buscar">Buscar</button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="lista-cases">
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
                    <div class="paginacao">
                        <?php
                        // Paginação dinâmica
                        $current_page = max(1, $paged);
                        $total_pages = $cases_query->max_num_pages;
                        
                        // Página anterior
                        if ($current_page > 1) :
                            $prev_page = $current_page - 1;
                            $prev_link = ($prev_page == 1) ? get_permalink() : add_query_arg('paged', $prev_page, get_permalink());
                        ?>
                            <a href="<?php echo esc_url($prev_link); ?>" class="pagina">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 11L1.5 6L6.5 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php
                        // Mostrar páginas
                        $start_page = max(1, $current_page - 2);
                        $end_page = min($total_pages, $current_page + 2);
                        
                        for ($i = $start_page; $i <= $end_page; $i++) :
                            $page_link = ($i == 1) ? get_permalink() : add_query_arg('paged', $i, get_permalink());
                            $active_class = ($i == $current_page) ? ' active' : '';
                        ?>
                            <a href="<?php echo esc_url($page_link); ?>" class="pagina<?php echo $active_class; ?>">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>
                        
                        <?php
                        // Próxima página
                        if ($current_page < $total_pages) :
                            $next_page = $current_page + 1;
                            $next_link = add_query_arg('paged', $next_page, get_permalink());
                        ?>
                            <a href="<?php echo esc_url($next_link); ?>" class="pagina next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>