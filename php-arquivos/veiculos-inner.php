<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ric TV</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/framework.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="veiculos-inner">
    <?php include 'components/menu.php'; ?>

    <main class="content">
    <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/Banner.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>RIC TV Conectada</h1>
                                        <p>
                                            Uma nova forma de assistir RICtv | RECORD
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="projetos-info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="assets/img/rictv_record.png" alt="Grupo de pessoas sorrindo" class="img-fluid rounded-3 projeto-img" style="width: 100%; height: auto;" />
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h1 class="projeto-titulo mb-3">A Revolução da Publicidade<br>na TV Aberta</h1>
                        <div class="projeto-descricao">
                            O Grupo Ric revolucionou a forma de entrega da sua marca, conectando a TV ao mundo digital, através de mídia programática.<br><br>
                            A RICtv Conectada proporciona ao telespectador uma nova experiência, transformando a tela da televisão em uma plataforma digital e interativa. Somos a 1ª emissora nacional a utilizar essa tecnologia, tornando a entrega da sua marca cada vez mais completa.<br><br>
                            Com uma publicidade totalmente personalizada e segmentada, você poderá iniciar uma conversa interativa com o seu público-alvo conectado ao sinal de TV aberta.<br><br>
                            Para você que deseja anunciar na TV, a RICtv Conectada liga a sua marca ao público-alvo de forma inovadora e inteligente, através do uso de dados e inteligência artificial. <strong>O resultado disso é uma entrega mais assertiva e com maior alcance da sua publicidade.</strong>
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
                                <h2 class="display-4 fw-bold text-white mb-0">Acesse o link ao lado e saiba mais<br> sobre a RICtv conectada</h2>
                            </div>
                            <div>
                                <a href="#" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">
                                    Ver Mídia Kit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="midia-kits-section py-5">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 col-12">
                        <h2 class="fw-bold" style="margin-bottom:0;">Outros Veículos</h2>
                    </div>
                    <div class="col-md-6 col-12 text-md-end mt-3 mt-md-0">
                        <a href="#" class="btn-saiba-mais cases-btn">Ver Todos Os Veículos</a>
                    </div>
                </div>
                <div class="midia-kits-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="assets/img/slider/slide-tv.jpg" alt="Mídia Kit RICtv 2023" class="img-fluid rounded-3" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="assets/img/slider/slide2.jpg" alt="Mídia Kit RICtv 2024" class="img-fluid rounded-3" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="assets/img/slider/slide3.jpg" alt="Mídia Kit RICtv 2025" class="img-fluid rounded-3" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="assets/img/logos/banda-b.png" alt="Banda B" class="img-fluid rounded-3" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="assets/img/logos/banda-b.png" alt="Banda B" class="img-fluid rounded-3" />
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <div class="divisor"></div>

        <?php include_once 'components/footer.php'; ?>

         <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
        <!-- Custom JS -->
        <script src="assets/js/main.js"></script>
    </main>
</body>
</html>