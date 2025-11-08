<?php

//define( 'RIC_URL', 'https://deboragarofalo.com/');
define( 'RIC_URL', 'http://localhost/ric-wp/');
//define( 'RIC_URL', 'https://fourleafsolutions.com.br/jobs/rictv/');

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

    if ( is_page_template( 'page-ooh.php' ) ) {
        $classes[] = 'ooh';
    }

    if ( is_page_template( 'page-termos-e-condicoes.php' ) ) {
        $classes[] = 'termos';
    }

    if ( is_404() ) {
        $classes[] = 'termos';
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

// Garantir que o Contact Form 7 carregue scripts corretamente
function ric_ensure_cf7_scripts() {
    // Forçar o CF7 a carregar scripts na página de contato
    if (is_page_template('page-contato.php') || is_page('contato')) {
        if (function_exists('wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
        }
        if (function_exists('wpcf7_enqueue_styles')) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action('wp_enqueue_scripts', 'ric_ensure_cf7_scripts');

// Garantir que o AJAX do CF7 funcione corretamente
function ric_cf7_load_js() {
    if (is_page_template('page-contato.php') || is_page('contato')) {
        wp_add_inline_script('contact-form-7', '
            document.addEventListener("DOMContentLoaded", function() {
                if (typeof wpcf7 !== "undefined") {
                    console.log("CF7 carregado corretamente");
                } else {
                    console.error("CF7 não carregado");
                }
            });
        ');
    }
}
add_action('wp_enqueue_scripts', 'ric_cf7_load_js', 100);


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

// AJAX para busca de cases
function ric_ajax_buscar_cases() {
    // Verificar nonce para segurança
    if (!wp_verify_nonce($_POST['nonce'], 'cases_ajax_nonce')) {
        wp_die('Acesso negado');
    }
    
    // Pegar parâmetros da busca
    $regiao = sanitize_text_field($_POST['regiao']);
    $perfil = sanitize_text_field($_POST['perfil']);
    $plataforma = sanitize_text_field($_POST['plataforma']);
    $crossmedia = sanitize_text_field($_POST['crossmedia']);
    $paged = (int) $_POST['paged'];
    
    // Preparar argumentos da query
    $args = array(
        'post_type' => 'cases',
        'posts_per_page' => 9,
        'post_status' => 'publish',
        'paged' => $paged,
    );
    
    // Preparar meta query para crossmedia se selecionado
    if (!empty($crossmedia) && $crossmedia === '1') {
        $args['meta_query'] = array(
            array(
                'key' => '_is_crossmedia',
                'value' => '1',
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
    $cases_query = new WP_Query($args);
    
    $html = '';
    $paginacao = '';
    
    if ($cases_query->have_posts()) {
        while ($cases_query->have_posts()) {
            $cases_query->the_post();
            
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
            
            $html .= '<a href="' . get_permalink() . '" class="case-item">';
            if ($is_crossmedia) {
                $html .= '<div class="crossmedia-tag">Crossmedia</div>';
            }
            $html .= '<div class="image-container">';
            $html .= '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '">';
            $html .= '</div>';
            $html .= '<div class="case-title">';
            $html .= '<h3>' . esc_html(get_the_title()) . '</h3>';
            $html .= '</div>';
            $html .= '</a>';
        }
        
        // Gerar paginação
        $total_pages = $cases_query->max_num_pages;
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
            $start_page = max(1, $paged - 2);
            $end_page = min($total_pages, $paged + 2);
            
            for ($i = $start_page; $i <= $end_page; $i++) {
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
        $html = '<div class="no-cases"><p>Nenhum case encontrado com os filtros selecionados.</p></div>';
    }
    
    wp_reset_postdata();
    
    // Retornar resposta JSON
    wp_send_json_success(array(
        'html' => $html,
        'paginacao' => $paginacao,
        'total_pages' => $cases_query->max_num_pages,
        'found_posts' => $cases_query->found_posts
    ));
}

// Registrar AJAX para usuários logados e não logados
add_action('wp_ajax_buscar_cases', 'ric_ajax_buscar_cases');
add_action('wp_ajax_nopriv_buscar_cases', 'ric_ajax_buscar_cases');

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
        'footer-menu' => 'Footer Menu',
        'footer-menu-sobre-nos' => 'Footer Menu Sobre Nós',
        'footer-menu-pessoas' => 'Footer Menu Pessoas',
        'footer-menu-negocios' => 'Footer Menu Negócios',
        'footer-menu-social' => 'Footer Menu Social',
        'footer-menu-politicas' => 'Footer Menu Políticas',
        'header-menu-quem-somos' => 'Header Menu Quem Somos',
        'header-menu-topo' => 'Header Menu Topo'
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
        
        // Prepara a URL com RIC_URL
        $item_url = $item->url;
        if (defined('RIC_URL') && strpos($item_url, 'http') !== 0) {
            // Se a URL não começa com http (é relativa), adiciona RIC_URL
            $item_url = rtrim(RIC_URL, '/') . '/' . ltrim($item_url, '/');
        }
        
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
                $output .= "{$indent}        <div class=\"mega-toggle\" aria-hidden=\"true\">\n";
                $output .= "{$indent}            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 512 512\" aria-hidden=\"true\" focusable=\"false\"><polygon points=\"396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5\"/></svg>\n";
                $output .= "{$indent}        </div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item_url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 2: Itens dentro de .mega-submenu-content
        elseif ($depth == 2) {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-nested-submenu\">\n";
                $output .= "{$indent}    <div class=\"mega-nested-header\">\n";
                $output .= "{$indent}        <span>" . esc_html($item->title) . "</span>\n";
                $output .= "{$indent}        <div class=\"mega-nested-toggle\" aria-hidden=\"true\">\n";
                $output .= "{$indent}            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 512 512\" aria-hidden=\"true\" focusable=\"false\"><polygon points=\"396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5\"/></svg>\n";
                $output .= "{$indent}        </div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item_url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 3: Itens dentro de .mega-nested-content
        elseif ($depth == 3) {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-deep-submenu\">\n";
                $output .= "{$indent}    <div class=\"mega-deep-header\">\n";
                $output .= "{$indent}        <span>" . esc_html($item->title) . "</span>\n";
                $output .= "{$indent}        <div class=\"mega-deep-toggle\" aria-hidden=\"true\">\n";
                $output .= "{$indent}            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 512 512\" aria-hidden=\"true\" focusable=\"false\"><polygon points=\"396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5\"/></svg>\n";
                $output .= "{$indent}        </div>\n";
                $output .= "{$indent}    </div>\n";
            } else {
                $output .= "{$indent}<a href=\"" . esc_url($item_url) . "\">" . esc_html($item->title) . "</a>\n";
            }
        }
        // DEPTH 4+: Links
        else {
            $output .= "{$indent}<a href=\"" . esc_url($item_url) . "\">" . esc_html($item->title) . "</a>\n";
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
                    <div class="mega-column mega-column-downloads">
                        <h3>Tabelas Comerciais</h3>
                        <button type="button" class="menu-popup-trigger mega-download-button" data-popup-target="popup-tabelas-comerciais">
                            Tabelas Comerciais
                        </button>
                    </div>
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
        
        // Prepara a URL com RIC_URL
        $item_url = $item->url;
        if (defined('RIC_URL') && strpos($item_url, 'http') !== 0) {
            // Se a URL não começa com http (é relativa), adiciona RIC_URL
            $item_url = rtrim(RIC_URL, '/') . '/' . ltrim($item_url, '/');
        }
        
        // DEPTH 0: Seções principais (.mega-mobile-section)
        if ($depth == 0) {
            $output .= "\n{$indent}<div class=\"mega-mobile-section\">\n";
            $output .= "{$indent}    <h4>" . strtoupper(esc_html($item->title)) . "</h4>\n";
        }
        // DEPTH 1+: Todos os níveis podem ter toggle ou serem links
        else {
            if ($has_children) {
                $output .= "\n{$indent}<div class=\"mega-mobile-submenu\" data-depth=\"{$depth}\">";
                $output .= "<div class=\"mega-mobile-toggle\">" . esc_html($item->title) . "<span aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 512 512\" aria-hidden=\"true\" focusable=\"false\"><polygon points=\"396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5\"/></svg></span></div>";
            } else {
                $output .= "\n{$indent}<a href=\"" . esc_url($item_url) . "\">" . esc_html($item->title) . "</a>";
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
            <div class="mega-mobile-section mega-mobile-section-downloads">
                <h4>Downloads</h4>
                <button type="button" class="menu-popup-trigger mega-download-button" data-popup-target="popup-tabelas-comerciais">
                    Tabelas Comerciais
                </button>
            </div>
        </div>
        <?php
    }
}

// adicionar acf options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Opções do Tema (Geral)',
        'menu_title' => 'Opções do Tema (Geral)',
        'menu_slug' => 'theme-options-geral',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// ===== CUSTOM POST TYPE: FORMULÁRIO MÍDIA KIT =====

// Registrar Custom Post Type para Formulários do Mídia Kit
function ric_register_formulario_midia_kit_post_type() {
    $labels = array(
        'name'                  => 'Formulários Mídia Kit',
        'singular_name'         => 'Formulário Mídia Kit',
        'menu_name'             => 'Formulários Mídia Kit',
        'name_admin_bar'        => 'Formulário Mídia Kit',
        'archives'              => 'Arquivo de Formulários',
        'attributes'            => 'Atributos',
        'parent_item_colon'     => 'Formulário Pai:',
        'all_items'             => 'Todos os Formulários',
        'add_new_item'          => 'Adicionar Novo',
        'add_new'               => 'Adicionar Novo',
        'new_item'              => 'Novo Formulário',
        'edit_item'             => 'Editar Formulário',
        'update_item'           => 'Atualizar Formulário',
        'view_item'             => 'Ver Formulário',
        'view_items'            => 'Ver Formulários',
        'search_items'          => 'Buscar Formulários',
        'not_found'             => 'Nenhum formulário encontrado',
        'not_found_in_trash'    => 'Nenhum formulário na lixeira',
    );
    
    $args = array(
        'label'                 => 'Formulário Mídia Kit',
        'description'           => 'Registro dos formulários de download do Mídia Kit',
        'labels'                => $labels,
        'supports'              => array('title', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 26,
        'menu_icon'             => 'dashicons-feedback',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'show_in_rest'          => false,
    );
    
    register_post_type('form_midia_kit', $args);
}
add_action('init', 'ric_register_formulario_midia_kit_post_type');

// Adicionar colunas personalizadas na lista de formulários
function ric_form_midia_kit_columns($columns) {
    $new_columns = array(
        'cb' => $columns['cb'],
        'title' => 'Nome',
        'empresa' => 'Empresa',
        'email' => 'Email',
        'telefone' => 'Telefone',
        'regiao' => 'Região',
        'pagina' => 'Página',
        'date' => 'Data'
    );
    return $new_columns;
}
add_filter('manage_form_midia_kit_posts_columns', 'ric_form_midia_kit_columns');

// Preencher conteúdo das colunas personalizadas
function ric_form_midia_kit_column_content($column, $post_id) {
    switch ($column) {
        case 'empresa':
            echo esc_html(get_post_meta($post_id, 'empresa', true));
            break;
        case 'email':
            echo esc_html(get_post_meta($post_id, 'email', true));
            break;
        case 'telefone':
            echo esc_html(get_post_meta($post_id, 'telefone', true));
            break;
        case 'regiao':
            echo esc_html(get_post_meta($post_id, 'regiao', true));
            break;
        case 'pagina':
            echo esc_html(get_post_meta($post_id, 'pagina', true));
            break;
    }
}
add_action('manage_form_midia_kit_posts_custom_column', 'ric_form_midia_kit_column_content', 10, 2);

// Tornar as colunas ordenáveis
function ric_form_midia_kit_sortable_columns($columns) {
    $columns['empresa'] = 'empresa';
    $columns['email'] = 'email';
    $columns['regiao'] = 'regiao';
    $columns['pagina'] = 'pagina';
    return $columns;
}
add_filter('manage_edit-form_midia_kit_sortable_columns', 'ric_form_midia_kit_sortable_columns');

// Salvar dados do formulário do Contact Form 7 (MESMO COM ERRO DE EMAIL)
function ric_save_form_midia_kit_data($contact_form) {
    // Pegar ID do formulário
    $form_id = $contact_form->id();
    
    // Verificar se é o formulário do Mídia Kit (substitua pelo ID correto)
    // Você pode verificar pelo título ou ID
    $form_title = $contact_form->title();
    
    if (strpos($form_title, 'Popup Midia Kit') === false && strpos($form_title, 'Mídia Kit') === false) {
        return; // Não é o formulário do Mídia Kit, sair
    }
    
    // Pegar dados enviados
    $submission = WPCF7_Submission::get_instance();
    
    if ($submission) {
        $posted_data = $submission->get_posted_data();
        
        // DEBUG: Salvar todos os dados para análise (pode comentar depois)
        error_log('Contact Form 7 - Dados recebidos: ' . print_r($posted_data, true));
        
        // Extrair campos
        $nome = isset($posted_data['nome']) ? sanitize_text_field($posted_data['nome']) : '';
        $empresa = isset($posted_data['empresa']) ? sanitize_text_field($posted_data['empresa']) : '';
        $cargo = isset($posted_data['cargo']) ? sanitize_text_field($posted_data['cargo']) : '';
        $telefone = isset($posted_data['telefone']) ? sanitize_text_field($posted_data['telefone']) : '';
        $email = isset($posted_data['email']) ? sanitize_email($posted_data['email']) : '';
        
        // Captura da região - pode vir como array ou string
        $regiao = '';
        if (isset($posted_data['regiao'])) {
            if (is_array($posted_data['regiao'])) {
                $regiao = sanitize_text_field($posted_data['regiao'][0]);
            } else {
                $regiao = sanitize_text_field($posted_data['regiao']);
            }
            // Se vier "Região de Interesse" (label), deixar vazio
            if ($regiao === 'Região de Interesse') {
                $regiao = '';
            }
        }
        
        // Criar o post
        $post_data = array(
            'post_title'    => $nome . ' - ' . $empresa,
            'post_type'     => 'form_midia_kit',
            'post_status'   => 'publish',
            'post_author'   => 1,
        );
        
        // Inserir o post
        $post_id = wp_insert_post($post_data);
        
        // Capturar a página de origem (HTTP_REFERER)
        $pagina = '';
        if (isset($_SERVER['HTTP_REFERER'])) {
            $pagina_url = $_SERVER['HTTP_REFERER'];
            // Extrair apenas o caminho da URL (sem domínio)
            $parsed_url = parse_url($pagina_url);
            if (isset($parsed_url['path'])) {
                $pagina = $parsed_url['path'];
                // Remover barra inicial se existir
                $pagina = ltrim($pagina, '/');
                // Se estiver vazio, é a home
                if (empty($pagina)) {
                    $pagina = 'Home';
                }
            } else {
                $pagina = $pagina_url;
            }
        }
        
        // Se o post foi criado com sucesso, salvar os meta campos
        if ($post_id && !is_wp_error($post_id)) {
            update_post_meta($post_id, 'nome', $nome);
            update_post_meta($post_id, 'empresa', $empresa);
            update_post_meta($post_id, 'cargo', $cargo);
            update_post_meta($post_id, 'telefone', $telefone);
            update_post_meta($post_id, 'email', $email);
            update_post_meta($post_id, 'regiao', $regiao);
            update_post_meta($post_id, 'pagina', $pagina);
            update_post_meta($post_id, 'form_id', $form_id);
            update_post_meta($post_id, 'ip_address', isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
            update_post_meta($post_id, 'user_agent', isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
            
            // DEBUG: Confirmar salvamento
            error_log('Formulário Mídia Kit salvo - ID: ' . $post_id . ' - Região: ' . $regiao . ' - Página: ' . $pagina);
        }
    }
}

// Hook que executa ANTES do envio do email (sempre executa, mesmo se email falhar)
add_action('wpcf7_before_send_mail', 'ric_save_form_midia_kit_data');

// Meta box para exibir detalhes do formulário
function ric_add_form_midia_kit_meta_box() {
    add_meta_box(
        'form_midia_kit_details',
        'Detalhes do Formulário',
        'ric_form_midia_kit_meta_box_callback',
        'form_midia_kit',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'ric_add_form_midia_kit_meta_box');

// Callback do meta box
function ric_form_midia_kit_meta_box_callback($post) {
    $nome = get_post_meta($post->ID, 'nome', true);
    $empresa = get_post_meta($post->ID, 'empresa', true);
    $cargo = get_post_meta($post->ID, 'cargo', true);
    $telefone = get_post_meta($post->ID, 'telefone', true);
    $email = get_post_meta($post->ID, 'email', true);
    $regiao = get_post_meta($post->ID, 'regiao', true);
    $pagina = get_post_meta($post->ID, 'pagina', true);
    $ip = get_post_meta($post->ID, 'ip_address', true);
    $user_agent = get_post_meta($post->ID, 'user_agent', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><strong>Nome:</strong></th>
            <td><?php echo esc_html($nome); ?></td>
        </tr>
        <tr>
            <th><strong>Empresa:</strong></th>
            <td><?php echo esc_html($empresa); ?></td>
        </tr>
        <tr>
            <th><strong>Cargo:</strong></th>
            <td><?php echo esc_html($cargo); ?></td>
        </tr>
        <tr>
            <th><strong>Telefone:</strong></th>
            <td><?php echo esc_html($telefone); ?></td>
        </tr>
        <tr>
            <th><strong>Email:</strong></th>
            <td><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></td>
        </tr>
        <tr>
            <th><strong>Região de Interesse:</strong></th>
            <td><?php echo esc_html($regiao); ?></td>
        </tr>
        <tr>
            <th><strong>Página de Origem:</strong></th>
            <td><?php echo esc_html($pagina); ?></td>
        </tr>
        <tr>
            <th><strong>Endereço IP:</strong></th>
            <td><?php echo esc_html($ip); ?></td>
        </tr>
        <tr>
            <th><strong>Navegador:</strong></th>
            <td><?php echo esc_html($user_agent); ?></td>
        </tr>
        <tr>
            <th><strong>Data de Envio:</strong></th>
            <td><?php echo get_the_date('d/m/Y H:i:s', $post->ID); ?></td>
        </tr>
    </table>
    
    <style>
        .form-table th {
            width: 200px;
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }
        .form-table td {
            padding: 10px;
        }
        .form-table tr {
            border-bottom: 1px solid #ddd;
        }
    </style>
    <?php
}