<?php

//define( 'RIC_URL', 'https://deboragarofalo.com/');
define( 'RIC_URL', 'http://localhost/ric-wp/');

// Custom classes for css and js /
add_filter( 'body_class','ric_body_class' );
function ric_body_class( $classes ) {

    if ( is_page_template( 'front-page.php' ) ) {
        $classes[] = 'home';
    } 

    if ( is_page_template( 'page-projetos-especiais.php' ) ) {
        $classes[] = 'projetos-especiais';
    } 

    if ( is_page_template( 'page-nossa-historia.php' ) ) {
        $classes[] = 'historia';
    } 
	
    if ( is_singular( 'projetos-especiais' ) ) {
        $classes[] = 'projetos-inner';
    }

    if ( is_page_template( 'page-instituto-ric.php' ) ) {
        $classes[] = 'instituto-ric';
    } 

    if ( is_page_template( 'page-codigo-cultura.php' ) ) {
        $classes[] = 'codigo-cultura';
    } 

    if ( is_home() ) {
        $classes[] = 'blog internal';
    }
   
  /*if ( is_single()) {
      $classes[] = 'internal';
  }*/

    return $classes;
}


function custom_excerpt_length( $length ) {
 return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');

//// Remove auto paragraph contact form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );


add_theme_support('post-thumbnails');

// //Remove p tags from the_content pages 
// function my_wp_content_function($content) {
//   return strip_tags($content,"<br><h2><ul><li>"); //add any tags here you want to preserve
// }
// add_filter('the_content', 'my_wp_content_function');

// Remove p tags the_excerpt
remove_filter('the_excerpt','wpautop');

// Registrar taxonomias personalizadas
function ric_register_taxonomies() {
    
    // Taxonomia: Região
    register_taxonomy('regiao', array('projetos-especiais', 'post'), array(
        'labels' => array(
            'name' => 'Regiões',
            'singular_name' => 'Região',
            'search_items' => 'Buscar Regiões',
            'all_items' => 'Todas as Regiões',
            'parent_item' => 'Região Pai',
            'parent_item_colon' => 'Região Pai:',
            'edit_item' => 'Editar Região',
            'update_item' => 'Atualizar Região',
            'add_new_item' => 'Adicionar Nova Região',
            'new_item_name' => 'Nome da Nova Região',
            'menu_name' => 'Regiões',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'regiao'),
    ));

    // Taxonomia: Perfil
    register_taxonomy('perfil', array('projetos-especiais', 'post'), array(
        'labels' => array(
            'name' => 'Perfis',
            'singular_name' => 'Perfil',
            'search_items' => 'Buscar Perfis',
            'all_items' => 'Todos os Perfis',
            'parent_item' => 'Perfil Pai',
            'parent_item_colon' => 'Perfil Pai:',
            'edit_item' => 'Editar Perfil',
            'update_item' => 'Atualizar Perfil',
            'add_new_item' => 'Adicionar Novo Perfil',
            'new_item_name' => 'Nome do Novo Perfil',
            'menu_name' => 'Perfis',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'perfil'),
    ));

    // Taxonomia: Plataforma
    register_taxonomy('plataforma', array('projetos-especiais', 'post'), array(
        'labels' => array(
            'name' => 'Plataformas',
            'singular_name' => 'Plataforma',
            'search_items' => 'Buscar Plataformas',
            'all_items' => 'Todas as Plataformas',
            'parent_item' => 'Plataforma Pai',
            'parent_item_colon' => 'Plataforma Pai:',
            'edit_item' => 'Editar Plataforma',
            'update_item' => 'Atualizar Plataforma',
            'add_new_item' => 'Adicionar Nova Plataforma',
            'new_item_name' => 'Nome da Nova Plataforma',
            'menu_name' => 'Plataformas',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'plataforma'),
    ));
}

// Hook para registrar as taxonomias
add_action('init', 'ric_register_taxonomies');

// Função para adicionar taxonomias a post types existentes
function ric_add_taxonomies_to_post_types() {
    // Registrar taxonomias para posts padrão também
    register_taxonomy_for_object_type('regiao', 'post');
    register_taxonomy_for_object_type('perfil', 'post');
    register_taxonomy_for_object_type('plataforma', 'post');
    
    // Para adicionar a outros post types, use:
    // register_taxonomy_for_object_type('regiao', 'nome_do_post_type');
    // register_taxonomy_for_object_type('perfil', 'nome_do_post_type');
    // register_taxonomy_for_object_type('plataforma', 'nome_do_post_type');
}

add_action('init', 'ric_add_taxonomies_to_post_types');

// AJAX para busca de projetos especiais
function ric_ajax_buscar_projetos() {
    // Verificar nonce para segurança
    if (!wp_verify_nonce($_POST['nonce'], 'projetos_ajax_nonce')) {
        wp_die('Acesso negado');
    }
    
    // Pegar parâmetros da busca
    $regiao = sanitize_text_field($_POST['regiao']);
    $perfil = sanitize_text_field($_POST['perfil']);
    $mes = sanitize_text_field($_POST['mes']);
    $plataforma = sanitize_text_field($_POST['plataforma']);
    $paged = (int) $_POST['paged'];
    
    // Preparar argumentos da query
    $args = array(
        'post_type' => 'projetos-especiais',
        'posts_per_page' => 9,
        'post_status' => 'publish',
        'paged' => $paged,
    );
    
    // Preparar meta query para o mês se selecionado
    if (!empty($mes)) {
        $args['meta_query'] = array(
            array(
                'key' => 'mes_projeto',
                'value' => $mes,
                'compare' => '='
            )
        );
    }
    
    // Preparar tax query se houver filtros de taxonomia
    $tax_query = array();
    
    if (!empty($regiao)) {
        $tax_query[] = array(
            'taxonomy' => 'regiao',
            'field' => 'slug',
            'terms' => $regiao,
        );
    }
    
    if (!empty($perfil)) {
        $tax_query[] = array(
            'taxonomy' => 'perfil',
            'field' => 'slug',
            'terms' => $perfil,
        );
    }
    
    if (!empty($plataforma)) {
        $tax_query[] = array(
            'taxonomy' => 'plataforma',
            'field' => 'slug',
            'terms' => $plataforma,
        );
    }
    
    if (!empty($tax_query)) {
        $args['tax_query'] = $tax_query;
        if (count($tax_query) > 1) {
            $args['tax_query']['relation'] = 'AND';
        }
    }
    
    // Executar query
    $projetos_query = new WP_Query($args);
    
    $html = '';
    $paginacao = '';
    
    if ($projetos_query->have_posts()) {
        while ($projetos_query->have_posts()) {
            $projetos_query->the_post();
            
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
            
            $html .= '<div class="col-lg-4 col-md-6">';
            $html .= '<a href="' . get_permalink() . '" class="projeto-link">';
            $html .= '<div class="projeto-box">';
            $html .= '<div class="projeto-imagem">';
            
            if (has_post_thumbnail()) {
                $html .= get_the_post_thumbnail(get_the_ID(), 'medium', array('alt' => get_the_title()));
            } else {
                $html .= '<img src="' . get_template_directory_uri() . '/assets/img/img-projeto-especial.jpg" alt="' . get_the_title() . '">';
            }
            
            $html .= '</div>';
            $html .= '<div class="projeto-content">';
            $html .= '<div class="projeto-tags">';
            
            // Mostrar tags de Plataforma
            if ($plataformas && !is_wp_error($plataformas)) {
                foreach ($plataformas as $plataforma) {
                    $html .= '<span class="tag ' . esc_attr($plataforma->slug) . '">' . esc_html($plataforma->name) . '</span>';
                }
            }
            
            $html .= '</div>';
            $html .= '<h3>' . get_the_title() . '</h3>';
            $html .= '<p>' . esc_html($descricao) . '</p>';
            
            if ($localizacao) {
                $html .= '<div class="projeto-location">';
                $html .= '<img src="' . get_template_directory_uri() . '/assets/img/map.svg" alt="Localização">';
                $html .= '<span>' . esc_html($localizacao) . '</span>';
                $html .= '</div>';
            }
            
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</a>';
            $html .= '</div>';
        }
        
        // Gerar paginação
        $total_pages = $projetos_query->max_num_pages;
        if ($total_pages > 1) {
            $paginacao .= '<div class="row" id="paginacao-container">';
            $paginacao .= '<div class="col-12">';
            $paginacao .= '<div class="paginacao">';
            
            // Página anterior
            if ($paged > 1) {
                $paginacao .= '<button class="pagina prev" data-page="' . ($paged - 1) . '">';
                $paginacao .= '<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">';
                $paginacao .= '<path d="M6.5 11L1.5 6L6.5 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
                $paginacao .= '</svg>';
                $paginacao .= '</button>';
            }
            
            // Páginas numeradas
            for ($i = 1; $i <= $total_pages; $i++) {
                $active_class = ($i == $paged) ? ' active' : '';
                $paginacao .= '<button class="pagina' . $active_class . '" data-page="' . $i . '">' . $i . '</button>';
            }
            
            // Próxima página
            if ($paged < $total_pages) {
                $paginacao .= '<button class="pagina next" data-page="' . ($paged + 1) . '">';
                $paginacao .= '<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">';
                $paginacao .= '<path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
                $paginacao .= '</svg>';
                $paginacao .= '</button>';
            }
            
            $paginacao .= '</div>';
            $paginacao .= '</div>';
            $paginacao .= '</div>';
        }
        
    } else {
        $html = '<div class="col-12"><p class="text-center">Nenhum projeto especial encontrado com os filtros selecionados.</p></div>';
    }
    
    wp_reset_postdata();
    
    // Retornar resposta JSON
    wp_send_json_success(array(
        'html' => $html,
        'paginacao' => $paginacao,
        'total_pages' => $projetos_query->max_num_pages,
        'found_posts' => $projetos_query->found_posts
    ));
}

// Registrar AJAX para usuários logados e não logados
add_action('wp_ajax_buscar_projetos', 'ric_ajax_buscar_projetos');
add_action('wp_ajax_nopriv_buscar_projetos', 'ric_ajax_buscar_projetos');

// Adicionar meta box para o mês do projeto
function ric_add_projeto_mes_meta_box() {
    add_meta_box(
        'projeto_mes',
        'Mês do Projeto',
        'ric_projeto_mes_meta_box_callback',
        'projetos-especiais',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ric_add_projeto_mes_meta_box');

// Callback do meta box
function ric_projeto_mes_meta_box_callback($post) {
    wp_nonce_field('save_projeto_mes', 'projeto_mes_nonce');
    $mes_projeto = get_post_meta($post->ID, 'mes_projeto', true);
    
    $meses = array(
        '1' => 'Janeiro',
        '2' => 'Fevereiro', 
        '3' => 'Março',
        '4' => 'Abril',
        '5' => 'Maio',
        '6' => 'Junho',
        '7' => 'Julho',
        '8' => 'Agosto',
        '9' => 'Setembro',
        '10' => 'Outubro',
        '11' => 'Novembro',
        '12' => 'Dezembro'
    );
    
    echo '<select name="mes_projeto" style="width: 100%;">';
    echo '<option value="">Selecione o mês</option>';
    foreach ($meses as $num => $nome) {
        $selected = ($mes_projeto == $num) ? ' selected' : '';
        echo '<option value="' . $num . '"' . $selected . '>' . $nome . '</option>';
    }
    echo '</select>';
    echo '<p><em>Selecione o mês em que o projeto será realizado.</em></p>';
}

// Salvar meta box
function ric_save_projeto_mes_meta_box($post_id) {
    if (!isset($_POST['projeto_mes_nonce']) || !wp_verify_nonce($_POST['projeto_mes_nonce'], 'save_projeto_mes')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['mes_projeto'])) {
        update_post_meta($post_id, 'mes_projeto', sanitize_text_field($_POST['mes_projeto']));
    }
}
add_action('save_post', 'ric_save_projeto_mes_meta_box');

// Adicionar meta box para marcar projeto como destaque (caso não use ACF)
function ric_add_projeto_destaque_meta_box() {
    add_meta_box(
        'projeto_destaque',
        'Projeto em Destaque',
        'ric_projeto_destaque_meta_box_callback',
        'projetos-especiais',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'ric_add_projeto_destaque_meta_box');

// Callback do meta box destaque
function ric_projeto_destaque_meta_box_callback($post) {
    wp_nonce_field('save_projeto_destaque', 'projeto_destaque_nonce');
    $destaque = get_post_meta($post->ID, 'destaque', true);
    
    echo '<label for="destaque">';
    echo '<input type="checkbox" id="destaque" name="destaque" value="Sim"' . checked($destaque, 'Sim', false) . ' />';
    echo ' Marcar este projeto como destaque';
    echo '</label>';
    echo '<p><em>Projetos em destaque aparecem em uma seção especial na página.</em></p>';
}

// Salvar meta box destaque
function ric_save_projeto_destaque_meta_box($post_id) {
    if (!isset($_POST['projeto_destaque_nonce']) || !wp_verify_nonce($_POST['projeto_destaque_nonce'], 'save_projeto_destaque')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['destaque'])) {
        update_post_meta($post_id, 'destaque', 'Sim');
    } else {
        update_post_meta($post_id, 'destaque', 'Não');
    }
}
add_action('save_post', 'ric_save_projeto_destaque_meta_box');

// Adicionar coluna "Destaque" na lista de projetos especiais
function ric_projetos_especiais_columns($columns) {
    $columns['destaque'] = 'Destaque';
    return $columns;
}
add_filter('manage_projetos-especiais_posts_columns', 'ric_projetos_especiais_columns');

// Conteúdo da coluna "Destaque"
function ric_projetos_especiais_column_content($column, $post_id) {
    if ($column == 'destaque') {
        $destaque = get_post_meta($post_id, 'destaque', true);
        if ($destaque == 'Sim' || $destaque == 'True' || $destaque == '1' || $destaque == 'true' || $destaque == 'yes') {
            echo '<span style="color: #ffd700; font-weight: bold;">⭐ DESTAQUE</span>';
        } else {
            echo '<span style="color: #ccc;">—</span>';
        }
    }
}
add_action('manage_projetos-especiais_posts_custom_column', 'ric_projetos_especiais_column_content', 10, 2);

// Tornar a coluna "Destaque" ordenável
function ric_projetos_especiais_sortable_columns($columns) {
    $columns['destaque'] = 'destaque';
    return $columns;
}
add_filter('manage_edit-projetos-especiais_sortable_columns', 'ric_projetos_especiais_sortable_columns');

// Adicionar meta box para URL do PDF
function ric_add_projeto_pdf_meta_box() {
    add_meta_box(
        'projeto_pdf',
        'PDF do Projeto',
        'ric_projeto_pdf_meta_box_callback',
        'projetos-especiais',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ric_add_projeto_pdf_meta_box');

// Callback do meta box PDF
function ric_projeto_pdf_meta_box_callback($post) {
    wp_nonce_field('save_projeto_pdf', 'projeto_pdf_nonce');
    $pdf_url = get_post_meta($post->ID, 'PDF', true);
    
    echo '<label for="pdf_url">URL do PDF:</label>';
    echo '<input type="url" id="pdf_url" name="pdf_url" value="' . esc_attr($pdf_url) . '" style="width: 100%; margin-top: 10px;" placeholder="https://exemplo.com/arquivo.pdf" />';
    echo '<p><em>Cole aqui a URL completa do arquivo PDF para download.</em></p>';
}

// Salvar meta box PDF
function ric_save_projeto_pdf_meta_box($post_id) {
    if (!isset($_POST['projeto_pdf_nonce']) || !wp_verify_nonce($_POST['projeto_pdf_nonce'], 'save_projeto_pdf')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['pdf_url'])) {
        update_post_meta($post_id, 'PDF', esc_url_raw($_POST['pdf_url']));
    }
}
add_action('save_post', 'ric_save_projeto_pdf_meta_box');