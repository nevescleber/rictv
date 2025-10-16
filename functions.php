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

    if ( is_page_template( 'page-principios-editoriais.php' ) ) {
        $classes[] = 'principios-editoriais';
    } 

    if ( is_page_template( 'page-equipe-comercial.php' ) ) {
        $classes[] = 'equipe-comercial';
    } 

    if ( is_page_template( 'page-cases.php' ) ) {
        $classes[] = 'cases';
    } 

    if ( is_page_template( 'page-carreira.php' ) ) {
        $classes[] = 'carreira';
    } 

    if ( is_singular( 'cases' ) ) {
        $classes[] = 'cases-inner';
    }
    
    if ( is_singular( 'post' ) ) {
        $classes[] = 'blog-inner';
    }

    if ( is_home() ) {
        $classes[] = 'blog internal';
    }

    if ( is_page_template( 'page-contato.php' ) ) {
        $classes[] = 'contato';
    } 

    if ( is_page_template( 'page-planos-comerciais.php' ) ) {
        $classes[] = 'planos-comerciais';
    }

    if ( is_singular( 'planos-comerciais' ) ) {
        $classes[] = 'planos-comerciais-inner';
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
    register_taxonomy('regiao', array('projetos-especiais', 'planos-comerciais', 'post'), array(
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
    register_taxonomy('perfil', array('projetos-especiais', 'planos-comerciais', 'post'), array(
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
    register_taxonomy('plataforma', array('projetos-especiais', 'planos-comerciais', 'post'), array(
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

// Registrar post type Cases
function ric_register_cases_post_type() {
    $labels = array(
        'name'                  => 'Cases',
        'singular_name'         => 'Case',
        'menu_name'             => 'Cases',
        'name_admin_bar'        => 'Case',
        'archives'              => 'Arquivo de Cases',
        'attributes'            => 'Atributos do Case',
        'parent_item_colon'     => 'Case Pai:',
        'all_items'             => 'Todos os Cases',
        'add_new_item'          => 'Adicionar Novo Case',
        'add_new'               => 'Adicionar Novo',
        'new_item'              => 'Novo Case',
        'edit_item'             => 'Editar Case',
        'update_item'           => 'Atualizar Case',
        'view_item'             => 'Ver Case',
        'view_items'            => 'Ver Cases',
        'search_items'          => 'Buscar Cases',
        'not_found'             => 'Nenhum case encontrado',
        'not_found_in_trash'    => 'Nenhum case encontrado na lixeira',
        'featured_image'        => 'Imagem Destacada',
        'set_featured_image'    => 'Definir imagem destacada',
        'remove_featured_image' => 'Remover imagem destacada',
        'use_featured_image'    => 'Usar como imagem destacada',
        'insert_into_item'      => 'Inserir no case',
        'uploaded_to_this_item' => 'Enviado para este case',
        'items_list'            => 'Lista de cases',
        'items_list_navigation' => 'Navegação da lista de cases',
        'filter_items_list'     => 'Filtrar lista de cases',
    );
    
    $args = array(
        'label'                 => 'Case',
        'description'           => 'Cases de sucesso da RIC',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('regiao', 'perfil', 'plataforma'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'cases'),
    );
    
    register_post_type('cases', $args);
}

add_action('init', 'ric_register_cases_post_type');

// Registrar post type Planos Comerciais
function ric_register_planos_comerciais_post_type() {
    $labels = array(
        'name'                  => 'Planos Comerciais',
        'singular_name'         => 'Plano Comercial',
        'menu_name'             => 'Planos Comerciais',
        'name_admin_bar'        => 'Plano Comercial',
        'archives'              => 'Arquivo de Planos Comerciais',
        'attributes'            => 'Atributos do Plano',
        'parent_item_colon'     => 'Plano Pai:',
        'all_items'             => 'Todos os Planos',
        'add_new_item'          => 'Adicionar Novo Plano',
        'add_new'               => 'Adicionar Novo',
        'new_item'              => 'Novo Plano',
        'edit_item'             => 'Editar Plano',
        'update_item'           => 'Atualizar Plano',
        'view_item'             => 'Ver Plano',
        'view_items'            => 'Ver Planos',
        'search_items'          => 'Buscar Planos',
        'not_found'             => 'Nenhum plano encontrado',
        'not_found_in_trash'    => 'Nenhum plano encontrado na lixeira',
        'featured_image'        => 'Imagem Destacada',
        'set_featured_image'    => 'Definir imagem destacada',
        'remove_featured_image' => 'Remover imagem destacada',
        'use_featured_image'    => 'Usar como imagem destacada',
        'insert_into_item'      => 'Inserir no plano',
        'uploaded_to_this_item' => 'Enviado para este plano',
        'items_list'            => 'Lista de planos',
        'items_list_navigation' => 'Navegação da lista de planos',
        'filter_items_list'     => 'Filtrar lista de planos',
    );
    
    $args = array(
        'label'                 => 'Plano Comercial',
        'description'           => 'Planos Comerciais da RIC',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('regiao', 'perfil', 'plataforma'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'planos-comerciais'),
    );
    
    register_post_type('planos-comerciais', $args);
}

add_action('init', 'ric_register_planos_comerciais_post_type');

// Adicionar meta box para casos crossmedia
function ric_add_cases_meta_boxes() {
    add_meta_box(
        'cases_crossmedia',
        'Configurações do Case',
        'ric_cases_meta_box_callback',
        'cases',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ric_add_cases_meta_boxes');

// Callback da meta box
function ric_cases_meta_box_callback($post) {
    wp_nonce_field('ric_save_cases_meta_box_data', 'ric_cases_meta_box_nonce');
    
    $is_crossmedia = get_post_meta($post->ID, '_is_crossmedia', true);
    
    echo '<p>';
    echo '<input type="checkbox" id="is_crossmedia" name="is_crossmedia" value="1" ' . checked(1, $is_crossmedia, false) . ' />';
    echo '<label for="is_crossmedia"> Este é um projeto crossmedia</label>';
    echo '</p>';
}

// Salvar dados da meta box
function ric_save_cases_meta_box_data($post_id) {
    if (!isset($_POST['ric_cases_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['ric_cases_meta_box_nonce'], 'ric_save_cases_meta_box_data')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (isset($_POST['post_type']) && 'cases' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }
    
    $is_crossmedia = isset($_POST['is_crossmedia']) ? 1 : 0;
    update_post_meta($post_id, '_is_crossmedia', $is_crossmedia);
}
add_action('save_post', 'ric_save_cases_meta_box_data');

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

// ===== FUNCIONALIDADES PARA PLANOS COMERCIAIS =====

// Adicionar body class para planos-comerciais
add_filter('body_class', 'ric_planos_comerciais_body_class');
function ric_planos_comerciais_body_class($classes) {
    if (is_page_template('page-planos-comerciais.php')) {
        $classes[] = 'planos-comerciais';
    }
    
    if (is_singular('planos-comerciais')) {
        $classes[] = 'planos-inner';
    }
    
    return $classes;
}

// Adicionar meta box para o mês do plano comercial
function ric_add_plano_mes_meta_box() {
    add_meta_box(
        'plano_mes',
        'Mês do Plano',
        'ric_plano_mes_meta_box_callback',
        'planos-comerciais',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ric_add_plano_mes_meta_box');

// Callback do meta box
function ric_plano_mes_meta_box_callback($post) {
    wp_nonce_field('save_plano_mes', 'plano_mes_nonce');
    $mes_plano = get_post_meta($post->ID, 'mes_plano', true);
    
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
    
    echo '<select name="mes_plano" style="width: 100%;">';
    echo '<option value="">Selecione o mês</option>';
    foreach ($meses as $num => $nome) {
        $selected = ($mes_plano == $num) ? ' selected' : '';
        echo '<option value="' . $num . '"' . $selected . '>' . $nome . '</option>';
    }
    echo '</select>';
    echo '<p><em>Selecione o mês em que o plano será realizado.</em></p>';
}

// Salvar meta box
function ric_save_plano_mes_meta_box($post_id) {
    if (!isset($_POST['plano_mes_nonce']) || !wp_verify_nonce($_POST['plano_mes_nonce'], 'save_plano_mes')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['mes_plano'])) {
        update_post_meta($post_id, 'mes_plano', sanitize_text_field($_POST['mes_plano']));
    }
}
add_action('save_post', 'ric_save_plano_mes_meta_box');

// Adicionar meta box para marcar plano como destaque
function ric_add_plano_destaque_meta_box() {
    add_meta_box(
        'plano_destaque',
        'Plano em Destaque',
        'ric_plano_destaque_meta_box_callback',
        'planos-comerciais',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'ric_add_plano_destaque_meta_box');

// Callback do meta box destaque
function ric_plano_destaque_meta_box_callback($post) {
    wp_nonce_field('save_plano_destaque', 'plano_destaque_nonce');
    $destaque = get_post_meta($post->ID, 'destaque', true);
    
    echo '<label for="destaque_plano">';
    echo '<input type="checkbox" id="destaque_plano" name="destaque_plano" value="Sim"' . checked($destaque, 'Sim', false) . ' />';
    echo ' Marcar este plano como destaque';
    echo '</label>';
    echo '<p><em>Planos em destaque aparecem em uma seção especial na página.</em></p>';
}

// Salvar meta box destaque
function ric_save_plano_destaque_meta_box($post_id) {
    if (!isset($_POST['plano_destaque_nonce']) || !wp_verify_nonce($_POST['plano_destaque_nonce'], 'save_plano_destaque')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['destaque_plano'])) {
        update_post_meta($post_id, 'destaque', 'Sim');
    } else {
        update_post_meta($post_id, 'destaque', 'Não');
    }
}
add_action('save_post', 'ric_save_plano_destaque_meta_box');

// Adicionar coluna "Destaque" na lista de planos comerciais
function ric_planos_comerciais_columns($columns) {
    $columns['destaque'] = 'Destaque';
    return $columns;
}
add_filter('manage_planos-comerciais_posts_columns', 'ric_planos_comerciais_columns');

// Conteúdo da coluna "Destaque"
function ric_planos_comerciais_column_content($column, $post_id) {
    if ($column == 'destaque') {
        $destaque = get_post_meta($post_id, 'destaque', true);
        if ($destaque == 'Sim' || $destaque == 'True' || $destaque == '1' || $destaque == 'true' || $destaque == 'yes') {
            echo '<span style="color: #ffd700; font-weight: bold;">⭐ DESTAQUE</span>';
        } else {
            echo '<span style="color: #ccc;">—</span>';
        }
    }
}
add_action('manage_planos-comerciais_posts_custom_column', 'ric_planos_comerciais_column_content', 10, 2);

// Tornar a coluna "Destaque" ordenável
function ric_planos_comerciais_sortable_columns($columns) {
    $columns['destaque'] = 'destaque';
    return $columns;
}
add_filter('manage_edit-planos-comerciais_sortable_columns', 'ric_planos_comerciais_sortable_columns');

// Adicionar meta box para URL do PDF
function ric_add_plano_pdf_meta_box() {
    add_meta_box(
        'plano_pdf',
        'PDF do Plano',
        'ric_plano_pdf_meta_box_callback',
        'planos-comerciais',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ric_add_plano_pdf_meta_box');

// Callback do meta box PDF
function ric_plano_pdf_meta_box_callback($post) {
    wp_nonce_field('save_plano_pdf', 'plano_pdf_nonce');
    $pdf_url = get_post_meta($post->ID, 'PDF', true);
    
    echo '<label for="pdf_url_plano">URL do PDF:</label>';
    echo '<input type="url" id="pdf_url_plano" name="pdf_url_plano" value="' . esc_attr($pdf_url) . '" style="width: 100%; margin-top: 10px;" placeholder="https://exemplo.com/arquivo.pdf" />';
    echo '<p><em>Cole aqui a URL completa do arquivo PDF para download.</em></p>';
}

// Salvar meta box PDF
function ric_save_plano_pdf_meta_box($post_id) {
    if (!isset($_POST['plano_pdf_nonce']) || !wp_verify_nonce($_POST['plano_pdf_nonce'], 'save_plano_pdf')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['pdf_url_plano'])) {
        update_post_meta($post_id, 'PDF', esc_url_raw($_POST['pdf_url_plano']));
    }
}
add_action('save_post', 'ric_save_plano_pdf_meta_box');

// AJAX para busca de planos comerciais
function ric_ajax_buscar_planos() {
    // Verificar nonce para segurança
    if (!wp_verify_nonce($_POST['nonce'], 'planos_ajax_nonce')) {
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
        'post_type' => 'planos-comerciais',
        'posts_per_page' => 8,
        'post_status' => 'publish',
        'paged' => $paged,
    );
    
    // Preparar meta query para o mês se selecionado
    if (!empty($mes)) {
        $args['meta_query'] = array(
            array(
                'key' => 'mes_plano',
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
    $planos_query = new WP_Query($args);
    
    $html = '';
    $paginacao = '';
    
    if ($planos_query->have_posts()) {
        while ($planos_query->have_posts()) {
            $planos_query->the_post();
            
            $html .= '<div class="col-lg-3 col-md-6 col-12">';
            $html .= '<a href="' . get_permalink() . '" class="midia-kit-link">';
            $html .= '<div class="midia-kit-box">';
            
            if (has_post_thumbnail()) {
                $html .= get_the_post_thumbnail(get_the_ID(), 'medium', array('alt' => get_the_title()));
            } else {
                $html .= '<img src="' . get_template_directory_uri() . '/assets/img/01_Midia.jpg" alt="' . get_the_title() . '">';
            }
            
            $html .= '</div>';
            $html .= '</a>';
            $html .= '</div>';
        }
        
        // Gerar paginação
        $total_pages = $planos_query->max_num_pages;
        if ($total_pages > 1) {
            $paginacao .= '<div class="paginacao" id="paginacao-container">';
            
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
        }
        
    } else {
        $html = '<div class="col-12"><p class="text-center">Nenhum plano comercial encontrado com os filtros selecionados.</p></div>';
    }
    
    wp_reset_postdata();
    
    // Retornar resposta JSON
    wp_send_json_success(array(
        'html' => $html,
        'paginacao' => $paginacao,
        'total_pages' => $planos_query->max_num_pages,
        'found_posts' => $planos_query->found_posts
    ));
}

// Registrar AJAX para usuários logados e não logados
add_action('wp_ajax_buscar_planos', 'ric_ajax_buscar_planos');
add_action('wp_ajax_nopriv_buscar_planos', 'ric_ajax_buscar_planos');

// Habilitar suporte a menus
add_theme_support('menus');

// Registrar posições dos menus
function ric_register_menus() {
    register_nav_menus(array(
        'top-menu' => 'Top Menu',
        'negocios-menu' => 'Menu Negócios',
        'fs-menu' => 'FS Menu',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('init', 'ric_register_menus');

// Custom Walker para Mega Menu - Gera HTML EXATAMENTE igual ao estático
class RIC_Mega_Menu_Walker extends Walker_Nav_Menu {
    
    // Inicia lista de subitens
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Depth 0 (colunas) -> Depth 1 (itens): Não precisa wrapper, itens ficam direto na coluna
        if ($depth == 0) {
            return;
        }
        
        $indent = str_repeat("    ", $depth + 1);
        
        // Depth 1 -> Depth 2: Adiciona .mega-submenu-content
        if ($depth == 1) {
            $output .= "\n{$indent}<div class=\"mega-submenu-content\">\n";
        }
        // Depth 2 -> Depth 3: Adiciona .mega-nested-content
        elseif ($depth == 2) {
            $output .= "\n{$indent}<div class=\"mega-nested-content\">\n";
        }
        // Depth 3 -> Depth 4: Adiciona .mega-deep-content
        elseif ($depth == 3) {
            $output .= "\n{$indent}<div class=\"mega-deep-content\">\n";
        }
    }
    
    // Finaliza lista de subitens
    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            return;
        }
        
        $indent = str_repeat("    ", $depth + 1);
        $output .= "{$indent}</div>\n";
    }
    
    // Inicia item do menu
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = str_repeat("    ", $depth + 1);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        // DEPTH 0: Colunas (.mega-column)
        if ($depth == 0) {
            $output .= "\n{$indent}<div class=\"mega-column\">\n";
            $output .= "{$indent}    <h3>" . esc_html($item->title) . "</h3>\n";
        }
        // DEPTH 1: Itens dentro das colunas
        elseif ($depth == 1) {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-submenu\">\n";
                $output .= "{$indent}    <div class=\"mega-submenu-header\">\n";
                $output .= "{$indent}        <span>" . esc_html($item->title) . "</span>\n";
                $output .= "{$indent}        <div class=\"mega-toggle\">▼</div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item->url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 2: Itens dentro de .mega-submenu-content
        elseif ($depth == 2) {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-nested-submenu\">\n";
                $output .= "{$indent}    <div class=\"mega-nested-header\">\n";
                $output .= "{$indent}        <span>" . esc_html($item->title) . "</span>\n";
                $output .= "{$indent}        <div class=\"mega-nested-toggle\">▼</div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item->url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 3: Itens dentro de .mega-nested-content
        elseif ($depth == 3) {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-deep-submenu\">\n";
                $output .= "{$indent}    <div class=\"mega-deep-header\">\n";
                $output .= "{$indent}        <span>" . esc_html($item->title) . "</span>\n";
                $output .= "{$indent}        <div class=\"mega-deep-toggle\">▼</div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item->url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 4+: Links
        else {
            $output .= "{$indent}<a href=\"" . esc_url($item->url) . "\">" . esc_html($item->title) . "</a>\n";
        }
    }
    
    // Finaliza item do menu
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $indent = str_repeat("    ", $depth + 1);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth == 0) {
            $output .= "{$indent}</div><!-- .mega-column -->\n";
        } elseif ($depth == 1 && $has_children) {
            $output .= "{$indent}</div><!-- .mega-submenu -->\n";
        } elseif ($depth == 2 && $has_children) {
            $output .= "{$indent}</div><!-- .mega-nested-submenu -->\n";
        } elseif ($depth == 3 && $has_children) {
            $output .= "{$indent}</div><!-- .mega-deep-submenu -->\n";
        }
    }
}

// Função helper para renderizar o mega menu de negócios
function ric_render_negocios_mega_menu() {
    if (has_nav_menu('negocios-menu')) {
        ?>
        <div class="mega-menu">
            <div class="mega-menu-content">
                <!-- Área Verde Lateral -->
                <div class="mega-menu-sidebar">
                    <div class="mega-sidebar-content">
                        <h2>RIC<br>Negócios</h2>
                        <p class="text-medium">Conheça nossos projetos, canais de comunicação e nossos planos comerciais.</p>
                    </div>
                </div>
                
                <!-- 4 Colunas de Conteúdo -->
                <div class="mega-menu-columns">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'negocios-menu',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'walker' => new RIC_Mega_Menu_Walker(),
                        'depth' => 5
                    ));
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}

// Custom Walker para versão mobile do mega menu - TODOS OS NÍVEIS (igual desktop)
class RIC_Mega_Menu_Mobile_Walker extends Walker_Nav_Menu {
    
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Depth 0: Itens dentro da seção - não precisa wrapper
        if ($depth == 0) {
            return;
        }
        
        $indent = str_repeat("    ", $depth + 1);
        
        // Todos os níveis 1+ usam .mega-mobile-content (sem quebra de linha antes para nextElementSibling funcionar)
        $output .= "<div class=\"mega-mobile-content\">\n";
    }
    
    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            return;
        }
        
        $indent = str_repeat("    ", $depth + 1);
        $output .= "{$indent}</div>\n";
    }
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = str_repeat("    ", $depth + 1);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        // DEPTH 0: Seções principais (.mega-mobile-section)
        if ($depth == 0) {
            $output .= "\n{$indent}<div class=\"mega-mobile-section\">\n";
            $output .= "{$indent}    <h4>" . strtoupper(esc_html($item->title)) . "</h4>\n";
        }
        // DEPTH 1+: Todos os níveis podem ter toggle ou serem links
        else {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-mobile-submenu\" data-depth=\"{$depth}\">";
                $output .= "<div class=\"mega-mobile-toggle\">" . esc_html($item->title) . " ▼</div>";
            } else {
                $output .= "\n{$indent}<a href=\"" . esc_url($item->url) . "\">" . esc_html($item->title) . "</a>";
            }
        }
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $indent = str_repeat("    ", $depth + 1);
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth == 0) {
            $output .= "{$indent}</div><!-- .mega-mobile-section -->\n";
        } elseif ($depth > 0 && $has_children) {
            $output .= "{$indent}</div><!-- .mega-mobile-submenu -->\n";
        }
    }
}

// Função helper para renderizar o mega menu mobile de negócios
function ric_render_negocios_mega_menu_mobile() {
    if (has_nav_menu('negocios-menu')) {
        ?>
        <div class="mega-mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'negocios-menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new RIC_Mega_Menu_Mobile_Walker(),
                'depth' => 5 // Mobile: todos os níveis (igual ao desktop)
            ));
            ?>
        </div>
        <?php
    }
}