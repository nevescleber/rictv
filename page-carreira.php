<?php 
/*
Template Name: Carreira / UNIRIC
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-carreira.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--<h1 class="text-bigger"><?php echo get_the_title(); ?></h1>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="carreira-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    $secao_1_descricao_esquerda = get_field('secao_1_descricao_esquerda');
                    if( $secao_1_descricao_esquerda ): ?>
                        <div class="content">
                            <?php echo $secao_1_descricao_esquerda; ?>
                        </div>
                    <?php else: ?>
                        <h2 class="text-big">
                            A Uniric é muito mais que um ambiente virtual de aprendizagem
                        </h2>

                        <p class="text-medium">
                            "Quem se desenvolve transforma.<br>
                            E quem transforma inspira."
                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                    $secao_1_descricao_direita = get_field('secao_1_descricao_direita');
                    if( $secao_1_descricao_direita ): ?>
                        <div class="content">
                            <?php echo $secao_1_descricao_direita; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-medium">
                            <b>A Uniric nasce como parte do nosso código de cultura,</b> 
                            valorizando talentos, acreditando na meritocracia e impulsionando a evolução contínua. 
                            É um convite para cada colaborador embarcar em uma <b>jornada de aprendizado, crescimento pessoal, profissional 
                            e de transformação</b>, conectando o legado de Mário Petrelli ao propósito do Grupo Ric no desenvolvimento do Paraná.
                            <br><br>
                            Sua essência está na padronização dos processos internos corporativos, na centralização e 
                            atualização de formações, na promoção da inovação e do alinhamento estratégico gerando mais 
                            resultados e no desenvolvimento das competências técnicas e comportamentais dos colaboradores, fortalecendo o desempenho e a performance em todas as áreas.
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="carreira-content-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cards-grid">
                        <?php if( have_rows('secao_1_cards') ): ?>
                            <?php while( have_rows('secao_1_cards') ): the_row(); 
                                $card_imagem = get_sub_field('card_imagem');
                                $card_titulo = get_sub_field('card_titulo');
                                $card_descricao = get_sub_field('card_descricao');
                            ?>
                                <div class="card-item">
                                    <?php if( $card_imagem ): ?>
                                        <div class="card-icon">
                                            <img src="<?php echo esc_url($card_imagem); ?>" alt="<?php echo esc_attr($card_titulo); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if( $card_titulo ): ?>
                                        <h3 class="card-title"><?php echo esc_html($card_titulo); ?></h3>
                                    <?php endif; ?>
                                    <?php if( $card_descricao ): ?>
                                        <p class="card-description"><?php echo esc_html($card_descricao); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carreira-tags">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="word-cloud">
                        <?php if( have_rows('nuvem_de_palavras') ): ?>
                            <?php 
                            // Classes fixas para cada palavra na ordem
                            $classes_palavras = array(
                                'word word-large word-blue-dark word-bold',      // Palavra 1
                                'word word-medium word-blue-light',              // Palavra 2
                                'word word-small word-purple',                   // Palavra 3
                                'word word-medium word-pink word-italic',        // Palavra 4
                                'word word-largest word-orange word-bold',       // Palavra 5
                                'word word-large word-green word-bold',          // Palavra 6
                                'word word-medium word-teal word-italic',        // Palavra 7
                                'word word-small word-blue word-bold'            // Palavra 8
                            );
                            
                            // Estrutura de linhas: quantas palavras em cada linha
                            $palavras_por_linha = array(3, 2, 3);
                            
                            // Coletar todas as palavras
                            $todas_palavras = array();
                            while( have_rows('nuvem_de_palavras') ): the_row();
                                $palavra = get_sub_field('nuvem_palavra');
                                if($palavra) {
                                    $todas_palavras[] = $palavra;
                                }
                            endwhile;
                            
                            // Renderizar linhas
                            $palavra_index = 0;
                            $row_number = 1;
                            foreach($palavras_por_linha as $qtd_palavras):
                                if($palavra_index >= count($todas_palavras)) break;
                            ?>
                                <div class="word-row row-<?php echo $row_number; ?>">
                                    <?php for($i = 0; $i < $qtd_palavras; $i++): 
                                        if($palavra_index < count($todas_palavras)):
                                            $palavra = $todas_palavras[$palavra_index];
                                            $classes = isset($classes_palavras[$palavra_index]) ? $classes_palavras[$palavra_index] : 'word';
                                    ?>
                                        <span class="<?php echo esc_attr($classes); ?>">
                                            <?php echo esc_html($palavra); ?>
                                        </span>
                                    <?php 
                                            $palavra_index++;
                                        endif;
                                    endfor; ?>
                                </div>
                            <?php 
                            $row_number++;
                            endforeach; ?>
                        <?php else: ?>
                            <div class="word-row row-1">
                                <span class="word word-large word-blue-dark word-bold">DESENVOLVIMENTO</span>
                                <span class="word word-medium word-blue-light">CULTURA</span>
                                <span class="word word-small word-purple">pessoas</span>
                            </div>
                            
                            <div class="word-row row-2">
                                <span class="word word-medium word-pink word-italic">legado</span>
                                <span class="word word-largest word-orange word-bold">TRANSFORMAÇÃO</span>
                            </div>
                            
                            <div class="word-row row-3">
                                <span class="word word-large word-green word-bold">PROPÓSITO</span>
                                <span class="word word-medium word-teal word-italic">aprendizagem</span>
                                <span class="word word-small word-blue word-bold">inovação</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carreira-cursos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <?php 
                   $secao_3_imagem = get_field('secao_3_imagem');
                   if( $secao_3_imagem ): ?>
                       <img src="<?php echo esc_url($secao_3_imagem); ?>" alt="RIC TV">
                   <?php else: ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-carreira.png" alt="RIC TV">
                   <?php endif; ?>
                </div>
                <div class="col-md-6">
                   <?php 
                   $secao_3_descricao = get_field('secao_3_descricao');
                   if( $secao_3_descricao ): ?>
                       <div class="content">
                           <?php echo $secao_3_descricao; ?>
                       </div>
                   <?php else: ?>
                       <p class="text-medium">
                           "Quem se desenvolve transforma.<br>
                           E quem transforma inspira."
                       </p>
                   <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    

<?php get_footer(); ?>