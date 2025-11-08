<?php 
/*
Template Name: Nossa História
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-historia.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger"><?php echo get_the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="nossa-historia">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-right">
                    <?php 
                    $secao_1_descricao_esquerda = get_field('secao_1_descricao_esquerda');
                    if ($secao_1_descricao_esquerda): 
                    ?>
                        <div class="content">
                            <?php echo $secao_1_descricao_esquerda; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-left">
                    <?php 
                        $secao_1_descricao_direito = get_field('secao_1_descricao_direito');
                        if ($secao_1_descricao_direito): 
                        ?>
                            <div class="text-small desc">
                                <?php echo $secao_1_descricao_direito; ?>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre-mario">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $secao_1_imagem_direita = get_field('secao_1_imagem_direita');
                        if ($secao_1_imagem_direita): 
                        ?>
                        <img src="<?php echo $secao_1_imagem_direita; ?>" alt="Mário Petrelli" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                        $secao_1_descricao_imagem = get_field('secao_1_descricao_imagem');
                        if ($secao_1_descricao_imagem): 
                        ?>
                            <div class="content">
                                <?php echo $secao_1_descricao_imagem; ?>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $secao_2_descricao_esquerda = get_field('secao_2_descricao_esquerda');
                        if ($secao_2_descricao_esquerda): 
                        ?>
                            <div class="content">
                                <?php echo $secao_2_descricao_esquerda; ?>
                            </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php 
                        $secao_2_descricao_direita = get_field('secao_2_descricao_direita');
                        if ($secao_2_descricao_direita): 
                        ?>
                            <div class="content">
                                <?php echo $secao_2_descricao_direita; ?>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-timeline">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <!-- Timeline Swiper -->
                    <div class="timeline-container">
                        <div class="timeline-line"></div>
                        
                        <div class="swiper historia-timeline-swiper">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('secao_3_itens')): ?>
                                    <?php while (have_rows('secao_3_itens')): the_row(); ?>
                                        <?php 
                                        $linha_ano = get_sub_field('linha_ano');
                                        $linha_imagem = get_sub_field('linha_imagem');
                                        $linha_descricao = get_sub_field('linha_descricao');
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="timeline-item">
                                                <?php if ($linha_ano): ?>
                                                    <div class="timeline-year"><?php echo esc_html($linha_ano); ?></div>
                                                <?php endif; ?>
                                                <div class="timeline-dot"></div>
                                                <div class="timeline-content">
                                                    <?php if ($linha_imagem): ?>
                                                        <img src="<?php echo esc_url($linha_imagem); ?>" alt="<?php echo esc_attr($linha_ano); ?>" class="timeline-image">
                                                    <?php endif; ?>
                                                    <?php if ($linha_descricao): ?>
                                                        <p class="text-small"><?php echo $linha_descricao; ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Navigation arrows -->
                        <div class="timeline-nav">
                            <button class="timeline-prev">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="timeline-next">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box">

                        <div class="img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                        </div>

                        <p class="text-small">
                            <?php 
                                $secao_4_visao = get_field('secao_4_visao');
                                if ($secao_4_visao): 
                                ?>
                                    <?php echo $secao_4_visao; ?>
                            <?php endif; ?>
                        </p>

                        <p class="text-medium">
                            <?php 
                                $secao_4_historia = get_field('secao_4_historia');
                                if ($secao_4_historia): 
                                ?>
                                     <?php echo $secao_4_historia; ?>
                            <?php endif; ?>
                        </p>

                        <p class="text-medium-big">
                            <?php 
                                $secao_4_descricao = get_field('secao_4_descricao');
                                if ($secao_4_descricao): 
                                ?>
                                    <?php echo $secao_4_descricao; ?>
                            <?php endif; ?>
                        </p>

                        <div class="img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-grande.png" alt="1987" class="timeline-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $secao_5_descricao = get_field('secao_5_descricao');
                        if ($secao_5_descricao): 
                        ?>
                            <div class="content">
                                <?php echo $secao_5_descricao; ?>
                            </div>
                    <?php endif; ?>


                </div>

                <div class="col-md-6">
                    <div class="historia-faq-container">
                        <?php 
                            $secao_5_imagem = get_field('secao_5_imagem');
                            if ($secao_5_imagem): 
                            ?>
                                <img src="<?php echo $secao_5_imagem; ?>" alt="Multiplataforma, multiconteúdo e multiconexão" class="img-fluid">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>	

    <!--<section class="historia-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $secao_5_descricao = get_field('secao_5_descricao');
                        if ($secao_5_descricao): 
                        ?>
                            <div class="content">
                                <?php echo $secao_5_descricao; ?>
                            </div>
                    <?php endif; ?>

                    <?php 
                        $secao_5_imagem = get_field('secao_5_imagem');
                        if ($secao_5_imagem): 
                        ?>
                            <img src="<?php echo $secao_5_imagem; ?>" alt="Multiplataforma, multiconteúdo e multiconexão" class="img-fluid">
                    <?php endif; ?>

                </div>

                <div class="col-md-6">
                    <div class="historia-faq-container">
                        <?php if (have_rows('faq')): ?>
                            <?php while (have_rows('faq')): the_row(); ?>
                                <?php 
                                $faq_titulo = get_sub_field('faq_titulo');
                                $faq_descricao = get_sub_field('faq_descricao');
                                ?>
                                <div class="faq-item">
                                    <div class="faq-header">
                                        <?php if ($faq_titulo): ?>
                                            <h4><?php echo esc_html($faq_titulo); ?></h4>
                                        <?php endif; ?>
                                        <span class="faq-toggle">+</span>
                                    </div>
                                    <div class="faq-content">
                                        <div class="faq-content-inner">
                                            <?php if ($faq_descricao): ?>
                                                <p class="text-small"><?php echo $faq_descricao; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section class="historia-video">
        <div class="video-background">
            <?php 
            $secao_5_video = get_field('secao_5_video');
            if ($secao_5_video): 
            ?>
                <video autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($secao_5_video); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            <div class="video-overlay">
                <div class="container">
                    <div class="video-content">
                        <div class="video-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vertical.png" alt="Grupo RIC" class="img-fluid">
                        </div>
                        <div class="video-text">
                            <p class="text-medium-big">
                                Esse é o Grupo Ric: o maior grupo de comunicação
                                multiplataforma do Paraná e um dos maiores do país, sempre inovando e conectando pessoas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logos">
        <div class="logos-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="Grupo RIC" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logos-list">
                       <?php if (have_rows('logotipos')): ?>
                           <?php while (have_rows('logotipos')): the_row(); ?>
                               <?php $logo_imagem = get_sub_field('logo_imagem'); ?>
                               <?php if ($logo_imagem): ?>
                                   <img src="<?php echo esc_url($logo_imagem); ?>" alt="Grupo RIC" class="img-fluid">
                               <?php endif; ?>
                           <?php endwhile; ?>
                       <?php endif; ?>
                    </div>
                </div>

                <div class="col-12">
                    <?php 
                    $apresentacao_institucional = get_field('opcao_apresentacao_institucional', 'option');
                    if ($apresentacao_institucional): 
                    ?>
                        <a href="<?php echo esc_url($apresentacao_institucional); ?>" class="btn-saiba-mais text-medium" data-fancybox data-type="iframe">Veja Nossa Apresentação Institucional</a>
                    <?php else: ?>
                        <a href="#" class="btn-saiba-mais text-medium">Veja Nossa Apresentação Institucional</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
