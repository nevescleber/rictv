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
<body class="programas-inner">
    <?php include 'components/menu.php'; ?>

    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/Banner.jpg" alt="RIC TV">
                    </div>
                </div>
            </div>
        </div>

        <section class="projetos-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="projeto-header">
                            <div class="projeto-title">
                                <h1>Sempre Jovem, Sempre Curitiba!</h1>
                                <div class="projeto-meta">
                                    <div class="location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Curitiba</span>
                                    </div>
                                    <div class="info-tags">
                                        <span class="date">MARÇO 2025</span>
                                        <span class="type">RÁDIO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="perfil-programa">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="perfil-header">
                            <h2>Perfil do Programa</h2>
                            <div class="categorias">
                                <span>CULTURA</span>
                                <span>DATAS COMEMORATIVAS</span>
                                <span>HUMOR</span>
                                <span>MÚSICA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="perfil-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
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
                                <h2 class="display-4 fw-bold text-white mb-0">Se interessou?<br>Baixe o PDF agora!</h2>
                            </div>
                            <div class="anuncie-text">
                                <p class="text-white fs-4 mb-0">Baixe o PDF e saiba tudo o que o programa pode oferecer para o crescimento do seu negócio</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-success btn-lg px-4 py-3 anuncie-btn">
                                    Baixe o PDF
                                    <img src="assets/img/download.svg" alt="Download" class="ms-2 download-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projetos-buscas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Confira outros programas</h2>
                    </div>
                </div>

                <div class="row projetos-grid">
                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/expoinga.png" alt="Mestres do Fogo">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Mestres do Fogo</h3>
                                    <p>Mestres do Fogo é um programa de TV que busca destacar as pessoas que fazem a diferença...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Maringá - Santa Catarina</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/expoinga.png" alt="Mestres do Fogo">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                    </div>
                                    <h3>Mestres do Fogo</h3>
                                    <p>Mestres do Fogo é um programa de TV que busca destacar as pessoas que fazem a diferença...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Curitiba</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/expoinga.png" alt="Mestres do Fogo">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Mestres do Fogo</h3>
                                    <p>Mestres do Fogo é um programa de TV que busca destacar as pessoas que fazem a diferença...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Paraná</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           
        </section>

        <div class="divisor"></div>

        <?php include_once 'components/footer.php'; ?>
    </main>
</body>
</html>