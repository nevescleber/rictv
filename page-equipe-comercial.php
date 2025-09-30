<?php 
/*
Template Name: Equipe Comercial
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
                            <h1 class="text-bigger">Equipe Comercial</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="principios">
        <div class="principios-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-big text-white">
                        Diretoria Geral
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe-comercial-diretoria">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="equipe-comercial-diretoria-card">
                        <div class="card-image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem_01.png" alt="Leonardo Petrelli Neto">
                            <div class="card-overlay">
                                <h2 class="text-medium-big text-white">
                                    Leonardo <br />Petrelli Neto
                                </h2>
                            </div>
                            <div class="card-badge">
                                <p class="text-small">Presidente</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="text-medium">
                                Fundou em 2000 a Dtcom, empresa paranaense que é pioneira no Brasil na utilização interligada dos recursos de TV (teleaulas) e da Internet (LMS) para promover a educação à distância e o desenvolvimento humano e profissional no ambiente corporativo, privado e público em todo o território nacional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="equipe-comercial-diretoria-card">
                        <div class="card-image-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem_02.png" alt="Leonardo Petrelli Neto">
                            <div class="card-overlay">
                                <h2 class="text-medium-big text-white">
                                    Marcelo <br />Requena
                                </h2>
                            </div>
                            <div class="card-badge">
                                <p class="text-small">Diretor Corp. de Mercado e Soluções Integradas</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="text-medium">
                                Com mais de 20 anos de experiência em cargos executivos, tive a oportunidade de construir uma carreira sólida no setor de mídia, sempre com um olhar estratégico para o futuro da comunicação. Atualmente, como Diretor de Mercado no Grupo RIC, sou especialista em negociação B2B, vendas e estratégias comerciais de alto impacto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe-comercial-nacional">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-big">
                        Diretoria Nacional
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="José Paulo Travagin">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">José Paulo Travagin</h3>
                            <p class="card-position">Diretor Exec. Mercado Nacional</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="Maria Silva">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">Maria Silva</h3>
                            <p class="card-position">Diretora de Vendas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="João Santos">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">João Santos</h3>
                            <p class="card-position">Diretor de Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="Ana Costa">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">Ana Costa</h3>
                            <p class="card-position">Diretora Comercial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="Carlos Oliveira">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">Carlos Oliveira</h3>
                            <p class="card-position">Diretor de Operações</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="Fernanda Lima">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">Fernanda Lima</h3>
                            <p class="card-position">Diretora de Estratégia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="equipe-comercial-nacional-card">
                        <button class="card-btn-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="card-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diretoria-01.png" alt="Roberto Mendes">
                        </div>
                        <div class="card-info">
                            <div class="card-tag">Diretoria Nacional</div>
                            <h3 class="card-name">Roberto Mendes</h3>
                            <p class="card-position">Diretor de Desenvolvimento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>