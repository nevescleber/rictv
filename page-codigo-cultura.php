<?php 
/*
Template Name: Código de Cultura
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-codigo-cultura.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Código de Cultura</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="proposito">
        <div class="proposito-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    $secao_1_descricao_esquerda = get_field('secao_1_descricao_esquerda');
                    if ($secao_1_descricao_esquerda): 
                    ?>
                        <div class="content">
                            <?php echo $secao_1_descricao_esquerda; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                    $secao_1_descricao_direita = get_field('secao_1_descricao_direita');
                    if ($secao_1_descricao_direita): 
                    ?>
                        <div class="content">
                            <?php echo $secao_1_descricao_direita; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="proposito-content">
        <div class="container">
            <div class="row">
                <?php if (have_rows('futuro_itens')): ?>
                    <?php 
                    $count = 0;
                    while (have_rows('futuro_itens')): the_row(); 
                        $count++;
                        if ($count > 2) break; // Apenas os 2 primeiros
                        
                        $titulo = get_sub_field('futuro_item_titulo');
                        $descricao = get_sub_field('futuro_descricao_item');
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card-proposito">
                                <?php if ($titulo): ?>
                                    <h3><?php echo $titulo; ?></h3>
                                <?php endif; ?>
                                <?php if ($descricao): ?>
                                    <p class="text-medium">
                                        <?php echo $descricao; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <div class="col-lg-4 col-12 mb-4">
                    <div class="text-only-section">
                        <h3><?php the_field('futuro_texto'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                // Pega os itens 3, 4 e 5
                $all_items = get_field('futuro_itens');
                if ($all_items && is_array($all_items)): 
                    $items_to_show = array_slice($all_items, 2, 3); // Pega do índice 2 (3º item) até 3 itens
                    
                    foreach ($items_to_show as $index => $item):
                        $titulo = $item['futuro_item_titulo'];
                        $descricao = $item['futuro_descricao_item'];
                        
                        // Define classe especial para o último item (3º da lista)
                        $col_class = ($index == 2) ? 'col-lg-4 col-12 mb-4' : 'col-lg-4 col-md-6 mb-4';
                ?>
                        <div class="<?php echo $col_class; ?>">
                            <div class="card-proposito">
                                <?php if ($titulo): ?>
                                    <h3><?php echo esc_html($titulo); ?></h3>
                                <?php endif; ?>
                                <?php if ($descricao): ?>
                                    <p class="text-medium">
                                        <?php echo $descricao; ?>
                                    </p>
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

    <section class="futuro">
        <div class="futuro-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="Background Futuro">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-big text-white">
                        <?php the_field('futuro_texto_titulo'); ?><br />
                        <span><?php the_field('futuro_texto_subtitulo'); ?></span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-futuro">
        <div class="container-fluid">
            <div class="row g-0">
                <?php 
                if (have_rows('futuro_cards')): 
                    $card_count = 0;
                    $bg_classes = ['conteudo', 'comercial', 'marketing', 'recursos-humanos', 'tecnologia', 'institucional'];
                    
                    while (have_rows('futuro_cards')): the_row(); 
                        $titulo = get_sub_field('futuro_card_titulo');
                        $descricao = get_sub_field('futuro_card_descricao');
                        $imagem = get_sub_field('futuro_card_imagem');
                        
                        // Pega a classe de background correspondente ou usa a primeira como padrão
                        $bg_class = isset($bg_classes[$card_count]) ? $bg_classes[$card_count] : $bg_classes[0];
                        $card_count++;
                ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card-futuro" data-bg="<?php echo esc_attr($bg_class); ?>">
                                <div class="card-image">
                                    <?php if ($imagem): ?>
                                        <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr($titulo); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <?php if ($titulo): ?>
                                        <h3><?php echo $titulo; ?></h3>
                                    <?php endif; ?>
                                </div>
                                <div class="card-overlay">
                                    <div class="overlay-content">
                                        <?php if ($titulo): ?>
                                            <h3><?php echo $titulo; ?></h3>
                                        <?php endif; ?>
                                        <?php if ($descricao): ?>
                                            <p class="text-medium">
                                                <?php echo $descricao; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php 
                    endwhile; 
                endif; 
                ?>
            </div>
        </div>
    </section>

    <section class="visao">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    $secao_3_descricao_direita = get_field('secao_3_descricao_direita');
                    if ($secao_3_descricao_direita): 
                    ?>
                        <div class="content">
                            <?php echo $secao_3_descricao_direita; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                    $secao_3_imagem = get_field('secao_3_imagem');
                    if ($secao_3_imagem): 
                    ?>
                        <img src="<?php echo $secao_3_imagem; ?>" alt="Nossa visão em ação">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="juntos">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-left">
                        <h2 class="text-bigger">
                            <?php the_field('secao_4_titulo_esquerda'); ?>
                        </h2>

                        <p class="text-medium">
                            <?php the_field('secao_4_texto_esquerda'); ?> 
                        </p>
                    </div>
                    <div class="img-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                    </div>
                    <div class="col-md-6 col-right">
                        <div class="img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ativo-ric.png" alt="1987" class="timeline-image">
                        </div>
                        <div class="content text-medium">
                            <?php the_field('secao_4_descricao_direita'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="principios">
        <?php 
        if (have_rows('principios')): 
            $color_classes = ['azul', 'verde', 'laranja', 'azul-claro'];
            $color_index = 0;
            
            while (have_rows('principios')): the_row(); 
                $icone = get_sub_field('principios_icone');
                $titulo = get_sub_field('principios_titulo');
                $descricao = get_sub_field('principios_descricao');
                
                // Pega a classe de cor e avança para a próxima (circular)
                $color_class = $color_classes[$color_index];
                $color_index = ($color_index + 1) % count($color_classes);
        ?>
                <div class="<?php echo esc_attr($color_class); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <?php if ($icone): ?>
                                    <img src="<?php echo esc_url($icone); ?>" alt="<?php echo esc_attr($titulo); ?>">
                                <?php endif; ?>
                                <?php if ($titulo): ?>
                                    <h2 class="text-big"><?php echo $titulo; ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <?php if ($descricao): ?>
                                    <p class="text-medium">
                                        <?php echo $descricao; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php 
            endwhile; 
        endif; 
        ?>
    </section>

    <section class="diferenca" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-left">
                    <?php 	
                    $secao_imagem = get_field('secao_imagem');
                    if ($secao_imagem): 
                    ?>
                        <img src="<?php echo $secao_imagem; ?>" alt="A nossa diferença">
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-right">
                    <?php 
                    $secao_6_descricao = get_field('secao_6_descricao');
                    if ($secao_6_descricao): 
                    ?>
                        <div class="content text-medium">
                            <?php echo $secao_6_descricao; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="missao" style="display: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 missao-left">
                    <div class="missao-content">
                        <h2 class="text-bigger">Nossos parceiros de missão</h2>
                    </div>
                    
                    <div class="missao-swiper-container">
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev-custom">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next-custom">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="swiper missao-swiper">
                            <div class="swiper-wrapper">
                                <?php 
                                if (have_rows('parceiros')): 
                                    $slide_number = 0;
                                    
                                    while (have_rows('parceiros')): the_row(); 
                                        $slide_number++;
                                        $missao_descricao = get_sub_field('missao_descricao');
                                ?>
                                        <div class="swiper-slide">
                                            <div class="slide-content">
                                                <div class="slide-number"><?php echo $slide_number; ?></div>
                                                <?php if ($missao_descricao): ?>
                                                    <div class="slide-text">
                                                        <p class="text-medium"><?php echo $missao_descricao; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                <?php 
                                    endwhile; 
                                endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none missao-right">
                    <!-- Área direita vazia -->
                </div>
            </div>
        </div>
    </section>

    <section class="video" style="display: none;">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/img/videoplayback.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <div class="container">
                    <div class="video-content">
                        <div class="video-text-left">
                            <h2 class="text-big">
                               <?php the_field('secao_8_descricao_direita'); ?>
                            </h2>
                        </div>
                        <div class="video-text-right">
                            <p class="text-medium">
                                <?php the_field('secao_8_descricao_esquerdo'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lideranca" style="display: none;">
        <div class="container">
            <?php 
            $all_conteudo = get_field('secao_9_conteudo');
            if ($all_conteudo && is_array($all_conteudo)): 
            ?>
                <div class="row">
                    <?php 
                    // Primeiros 2 itens na primeira linha
                    for ($i = 0; $i < 2 && $i < count($all_conteudo); $i++):
                        $item = $all_conteudo[$i];
                        $titulo = $item['secao_9_conteudo_titulo'];
                        $descricao = $item['secao_9_conteudo_descricao'];
                    ?>
                        <div class="col-md-6">
                            <?php if ($titulo): ?>
                                <h2 class="text-big"><?php echo $titulo; ?></h2>
                            <?php endif; ?>
                            <?php if ($descricao): ?>
                                <p class="text-medium">
                                    <?php echo $descricao; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="row">
                    <?php 
                    // Terceiro item na segunda linha (primeira coluna)
                    if (isset($all_conteudo[2])):
                        $item = $all_conteudo[2];
                        $titulo = $item['secao_9_conteudo_titulo'];
                        $descricao = $item['secao_9_conteudo_descricao'];
                    ?>
                        <div class="col-md-6">
                            <?php if ($titulo): ?>
                                <h2 class="text-big"><?php echo $titulo; ?></h2>
                            <?php endif; ?>
                            <?php if ($descricao): ?>
                                <p class="text-medium">
                                    <?php echo $descricao; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="col-md-6">
                        slider
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>


    <div class="divisor"></div>


<?php get_footer(); ?>