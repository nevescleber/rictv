<!-- HEAD -->
<?php get_header(); ?>
    
    <?php include 'components/banner.php'; ?>

   <!-- PARTNERS -->
   <?php include 'components/partiners.php'; ?>

    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-imagem-01.png" alt="RIC TV">
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <h2 class="text-medium-big">Grupo RIC: Comunicação multiplataforma no Paraná</h2>
                        <p class="text-medium">
                            <b>O Grupo RIC é um dos maiores grupos de comunicação do sul do Brasil</b>, com atuação multiplataforma em <b>TV aberta, rádio, portais de notícias, redes sociais, eventos, impresso e conteúdos lifestyle premium.</b> Com mais de três décadas de história, conectamos marcas e pessoas com informação de qualidade, entretenimento e projetos que geram resultados reais para os nossos parceiros.
                            <br><br>
                            <b>Comunicação inteligente com presença em todo o Paraná</b>
                            Estamos presentes nas principais regiões do Paraná, por meio de nossas emissoras em <b>Curitiba, Londrina, Maringá e Oeste do Estado.</b>
                            <br><br>
                            Nossas plataformas alcançam milhões de pessoas todos os meses, com conteúdos que combinam <b>credibilidade jornalística, inovação em formatos e abordagens personalizadas</b> para cada público e anunciante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="text-medium-big desc">
                        <b>O Grupo RIC Paraná</b> é a escolha certa para marcas que 
                        buscam <b>publicidade multiplataforma com alto impacto.</b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="brands-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-ric.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-left text-white mb-5 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4 text-medium-big">Um grupo de mídia <br /> multiplataforma</h2>
                    <p class="text-medium">Explore o universo de excelência do Grupo Ric! Convidamos você a descobrir cada uma de nossas marcas, onde tradição e inovação se encontram para oferecer o melhor em comunicação e entretenimento.</p>
                    <a href="#" class="btn-saiba-mais text-white">saiba mais <i class="arrow-icon">→</i></a>
                </div>
                <div class="col-lg-6 col-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala_2025_ric.png" />
                </div>
            </div>
        </div>
    </section>

    <section class="cobertura-section position-relative py-5" style="display: none;">
        <!-- Gradiente que vai da borda esquerda da tela até o meio -->
        <div class="gradient-overlay position-absolute"></div>
        
        <div class="container position-relative h-100">
            <div class="row align-items-center h-100">
                <!-- Coluna do conteúdo (logo e texto) -->
                <div class="col-lg-6">
                    <div class="content-cobertura d-flex align-items-center gap-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-azul.png" alt="Grupo RIC" class="logo-cobertura">
                        <div>
                            <h2 class="texto-cobertura fw-bold mb-0">Clique no mapa e veja onde o Grupo RIC está no Paraná</h2>
                        </div>
                    </div>
                </div>
                
                <!-- Coluna do mapa -->
                <div class="col-lg-6">
                    <div class="mapa-container d-flex justify-content-center align-items-center h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-ric.png" alt="Mapa do Paraná" class="mapa-parana-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ric-where">
        <div class="ric-grid">
            <div class="ric-text-section">
                <img class="ric-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-azul.png" alt="Grupo RIC" />
                <div class="ric-copy">
                    <h1 class="text-medium-small ric-title">
                        Clique no mapa e veja onde o Grupo Ric está no Paraná.
                    </h1>
                </div>
            </div>

            <div class="ric-map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mapa-ric.png" alt="Mapa do Paraná com pontos do Grupo RIC" />
            </div>
        </div>
    </section>


    <section class="instituto-ric position-relative py-5">
        <div class="container container--big">
            <div class="instituto-flex" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo get_template_directory_uri(); ?>/assets/img/criancas-que-jogam-na-grama.jpg') no-repeat center center; background-size: cover;">
                <div class="instituto-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-instituto-ric.png" alt="Instituto RIC" class="img-fluid">
                </div>
                <div class="instituto-content text-white">
                    <h2 class="display-4 fw-bold mb-4">Atitudes que <br> transformam vidas</h2>
                    <p class="fs-5 mb-4">Somos um Centro Integrado de Comunicação que investe em tecnologia e trabalha em benefício da sociedade. Criamos o Instituto RIC, sem fins lucrativos, para promover saúde, educação, e sustentabilidade no Paraná. Utilizamos nossas plataformas para conscientizar a sociedade, inspirar mudanças e fortalecer laços comunitários.</p>
                    <a href="#" class="btn btn-outline-light btn-lg instituto-btn hover-underline text-white">
                        <span class="btn-content">
                            saiba mais
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="redes-sociais">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                    <div class="redes-sociais-header">
                        <h2 class="text-medium-big">Acompanhe as redes sociais do grupo RIC</h2>
                        
                        <div class="social-icons">
                            <a href="#" class="me-3">
                            <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z'></path></svg>
                            </a>
                            <a href="#">
                            <svg width='20' height='20' viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'><path d='M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z'></path></svg>
                            </a>
                        </div>
                    </div>
               </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram" class="img-fluid">
                        </div>
                    </div>
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
                            <h2 class="display-4 fw-bold text-white mb-0">Anuncie no<br>Grupo RIC</h2>
                        </div>
                        <div class="anuncie-text">
                            <p class="text-white fs-4 mb-0">Oportunidades para a sua marca<br>falar com todos os públicos</p>
                        </div>
                        <div>
                            <a href="#" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">Começar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section class="insights-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-start mb-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 col-6">
                        <h2 class="text-medium-big display-4 fw-bold mb-3">RIC Talks</h2>
                    </div>
                    <div class="col-lg-6 col-6 d-flex justify-content-lg-end gap-3 mt-3 mt-lg-0">
                        <a href="#" class="btn btn-outline-primary px-4 py-2">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card border-0 bg-transparent">
                        <a href="#" class="case-link">
                            <div class="position-relative card-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/criancas-que-jogam-na-grama.jpg');">
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                    <span class="badge curso bg-warning text-dark mb-3 align-self-start px-3 py-2">Curso</span>
                                    <h3 class="text-medium text-white">ABC da Construção tem maior quantidade de acessos da história</h3>
                                    <button class="btn btn-link text-white p-0">+</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="card border-0 bg-transparent">
                                <a href="#" class="case-link">
                                    <div class="position-relative card-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/criancas-que-jogam-na-grama.jpg');">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                            <span class="badge artigo bg-warning text-dark mb-3 align-self-start px-3 py-2">Artigo</span>
                                            <h3 class="text-medium text-white">ABC da Construção tem maior quantidade de acessos da história</h3>
                                            <button class="btn btn-link text-white p-0">+</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card border-0 bg-transparent">
                                <a href="#" class="case-link">
                                    <div class="position-relative card-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/criancas-que-jogam-na-grama.jpg');">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                            <span class="badge estudo bg-warning text-dark mb-3 align-self-start px-3 py-2">Estudo</span>
                                            <h3 class="text-medium text-white">ABC da Construção tem maior quantidade de acessos da história</h3>
                                            <button class="btn btn-link text-white p-0">+</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>