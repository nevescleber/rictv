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
                    <h2 class="text-big">
                        A Uniric é muito mais que um ambiente virtual de aprendizagem
                    </h2>

                    <p class="text-medium">
                        "Quem se desenvolve transforma.<br>
                        E quem transforma inspira."
                    </p>
                </div>
                <div class="col-md-6">
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
                </div>
            </div>
        </div>
    </section>

    <section class="carreira-content-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cards-grid">
                        <div class="card-item">
                            <div class="card-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" alt="Desenvolve">
                            </div>
                            <h3 class="card-title">Desenvolve</h3>
                            <p class="card-description">Porque a transformação começa no crescimento pessoal e profissional.</p>
                        </div>
                        
                        <div class="card-item">
                            <div class="card-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt="Transforma">
                            </div>
                            <h3 class="card-title">Transforma</h3>
                            <p class="card-description">Porque quem aprende e evolui passa a transformar não só a si, mas ao seu entorno.</p>
                        </div>
                        
                        <div class="card-item">
                            <div class="card-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon3.png" alt="Inspira">
                            </div>
                            <h3 class="card-title">Inspira</h3>
                            <p class="card-description">Porque quem transforma deixa uma marca positiva e inspira todos ao seu redor.</p>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carreira-cursos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-carreira.png" alt="RIC TV">
                </div>
                <div class="col-md-6">
                    <h2 class="text-big">
                        Por que Universidade Corporativa Mário Petrelli?
                    </h2>
                    <p class="text-medium">
                        Não é apenas um nome, mas uma inspiração. É uma homenagem a quem plantou as sementes do Grupo Ric e acreditava no desenvolvimento das pessoas como a força para transformar a empresa e a comunidade.
                        <br><br>
                        É a ponte entre o passado e o futuro, entre o legado de quem começou esta história e o compromisso de quem vai continuar a escrevê‑la.
                        <br><br>
                        É assim que cada colaborador passa a ser guardião e multiplicador desse legado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    

<?php get_footer(); ?>