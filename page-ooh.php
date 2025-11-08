<?php /* Template Name: OOH */ ?>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ooh-content-1">
        <div class="container-fluid">
            <div class="ooh-gradient-section">
                <div class="ooh-top-labels">
                    <?php if (have_rows('comunicacao')): ?>
                        <?php while (have_rows('comunicacao')): the_row(); ?>
                            <span class="text-medium"><?php echo get_sub_field('comunicacao_nome'); ?></span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="ooh-separator"></div>
                <div class="ooh-categories">
                    <?php if (have_rows('negocios_itens')): ?>
                        <?php while (have_rows('negocios_itens')): the_row(); ?>
                            <div class="ooh-category-tag text-medium"><?php echo get_sub_field('negocios_nome'); ?></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if (have_rows('conteudo_itens')): ?>
        <?php 
        $count = 0;
        $total_items = count(get_field('conteudo_itens'));
        ?>
        <?php while (have_rows('conteudo_itens')): the_row(); ?>
            <?php 
            $count++;
            $is_par = ($count % 2 == 0);
            $is_last = ($count == $total_items);
            $imagem = get_sub_field('conteudo_imagem');
            $titulo = get_sub_field('conteudo_titulo');
            $conteudo = get_sub_field('conteudo_conteudo');
            ?>
            
            <section class="ooh-content<?php echo $is_par ? '-2' : ''; ?>">
                <div class="container">
                    <div class="row">
                        <?php if ($is_par): ?>
                            <!-- Item PAR - Imagem à direita no desktop -->
                            <div class="col-md-6 col-md-push-6">
                                <?php if ($imagem): ?>
                                    <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr($titulo); ?>" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 col-md-pull-6">
                                <?php if ($titulo): ?>
                                    <h2 class="text-bigger"><?php echo $titulo; ?></h2>
                                <?php endif; ?>
                                <?php if ($conteudo): ?>
                                    <p class="text-medium"><?php echo $conteudo; ?></p>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <!-- Item ÍMPAR - Imagem à esquerda -->
                            <div class="col-md-6">
                                <?php if ($imagem): ?>
                                    <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr($titulo); ?>" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <?php if ($titulo): ?>
                                    <h2 class="text-bigger"><?php echo $titulo; ?></h2>
                                <?php endif; ?>
                                <?php if ($conteudo): ?>
                                    <p class="text-medium"><?php echo $conteudo; ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (!$is_last): ?>
                        <div class="line-separator"></div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="ooh-content-4">
        <div class="container-fluid px-0">
            <div class="ooh-slider-wrapper">
                <div class="swiper ooh-swiper">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('sliders')): ?>
                            <?php while (have_rows('sliders')): the_row(); ?>
                                <?php $slider_imagem = get_sub_field('slider_imagem'); ?>
                                <?php if ($slider_imagem): ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($slider_imagem); ?>" alt="Slider OOH" class="ooh-slide-img">
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination ooh-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="anuncie-section py-5 position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="anuncie-container">
                    <div class="anuncie-bg"></div>
                    <div class="anuncie-flex">
                        <div>
                            <h2 class="text-big text-white">Se interessou?<br>Baixe o PDF agora!</h2>
                        </div>
                        <div class="anuncie-text">
                            <p class="text-medium text-white">
                                Baixe o PDF e saiba tudo o que o <br>
                                programa pode oferecer para o <br>
                                crescimento do seu negócio
                            </p>
                        </div>
                        <div>
                            <?php 
                            // Buscar PDF do campo ACF
                            $pdf_url = get_field('arquivo_pdf');
                            if ($pdf_url) : 
                            ?>
                                <button type="button" onclick="event.preventDefault(); openPopupMidiaKit('<?php echo esc_url($pdf_url); ?>'); return false;" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">
                                    Baixe o PDF
                                    
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15L8 11H11V3H13V11H16L12 15Z" fill="currentColor"/>
                                        <path d="M20 18H4V11H6V16H18V11H20V18Z" fill="currentColor"/>
                                    </svg> 
                                </button>
                            <?php else : ?>
                                <button class="btn btn-secondary btn-lg px-4 py-3" disabled>
                                    Estamos atualizando o PDF
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
   
    <div class="divisor"></div>

<!-- Incluir popup do Mídia Kit -->
<?php include get_template_directory() . '/components/popup.php'; ?>

<?php get_footer(); ?>