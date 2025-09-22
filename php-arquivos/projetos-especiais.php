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
<body class="projetos-especiais">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/bg-projetos-especiais.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Projetos Especiais</h1>
                                        <p>
                                            Aqui você encontra nossa seleção de Projetos Especiais vigentes em todos os nossos canais.
                                            Busque e <br> confira nossas linhas mais segmentadas para mídia e perfomance crossmedia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="banner-projetos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banners">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/img/imagem-projetos-especiais.jpg" alt="Sempre Jovem, Sempre Curitiba">
                                        <div class="slide-content">
                                            <div class="slide-text">
                                                <h2>Sempre Jovem, <br>Sempre Curitiba!</h2>
                                                <a href="#" class="btn-secondary">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
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
                        <div class="filtros-wrapper">
                            <div class="filtro">
                                <select name="regiao" id="regiao">
                                    <option value="" selected disabled>Região</option>
                                    <option value="curitiba">Curitiba</option>
                                    <option value="rmc">RMC</option>
                                    <option value="litoral">Litoral</option>
                                    <option value="interior">Interior</option>
                                </select>
                            </div>
                            <div class="filtro">
                                <select name="perfil" id="perfil">
                                    <option value="" selected disabled>Perfil</option>
                                    <option value="jovem">Jovem</option>
                                    <option value="adulto">Adulto</option>
                                    <option value="senior">Sênior</option>
                                </select>
                            </div>
                            <div class="filtro">
                                <select name="mes" id="mes">
                                    <option value="" selected disabled>Mês</option>
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select>
                            </div>
                            <div class="filtro">
                                <select name="plataforma" id="plataforma">
                                    <option value="" selected disabled>Plataforma</option>
                                    <option value="tv">TV</option>
                                    <option value="radio">Rádio</option>
                                    <option value="digital">Digital</option>
                                </select>
                            </div>
                            <button class="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </div>
                
                <div class="row projetos-grid">
                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Expoingá 2025">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Expoingá 2025</h3>
                                    <p>A Expoingá 2025 está chegando para mais uma grande edição, reunindo...</p>
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
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Projeto Vidas">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                    </div>
                                    <h3>Projeto Vidas</h3>
                                    <p>O Projeto VIDAS foi criado para destacar profissionais excepcionais e suas...</p>
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
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Círculo do Bem 2025">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Círculo do Bem 2025</h3>
                                    <p>O Círculo do Bem 2025, entra em cena mais uma vez para movimentar a solidariedade...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Paraná</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Círculo do Bem 2025">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Círculo do Bem 2025</h3>
                                    <p>O Círculo do Bem 2025, entra em cena mais uma vez para movimentar a solidariedade...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Paraná</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Círculo do Bem 2025">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Círculo do Bem 2025</h3>
                                    <p>O Círculo do Bem 2025, entra em cena mais uma vez para movimentar a solidariedade...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Paraná</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="projetos-especiais-inner.php" class="projeto-link">
                            <div class="projeto-box">
                                <div class="projeto-imagem">
                                    <img src="assets/img/img-projeto-especial.jpg" alt="Círculo do Bem 2025">
                                </div>
                                <div class="projeto-content">
                                    <div class="projeto-tags">
                                        <span class="tag topview">TOPVIEW</span>
                                        <span class="tag digital">Digital</span>
                                        <span class="tag radio">Rádio</span>
                                        <span class="tag tv">TV</span>
                                    </div>
                                    <h3>Círculo do Bem 2025</h3>
                                    <p>O Círculo do Bem 2025, entra em cena mais uma vez para movimentar a solidariedade...</p>
                                    <div class="projeto-location">
                                        <img src="assets/img/map.svg" alt="Localização">
                                        <span>Paraná</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="paginacao">
                            <button class="pagina active">1</button>
                            <button class="pagina">2</button>
                            <button class="pagina">3</button>
                            <button class="pagina">4</button>
                            <button class="pagina next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="divisor"></div>

        <?php include_once 'components/footer.php'; ?>
    </main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>