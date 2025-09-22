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
<body class="cases">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/bg-cases.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Cases</h1>
                                        <p>
                                            Transformando as melhores experiências em resultados. Confira alguns dos nossos cases de sucesso<br>
                                            e saiba porque o Grupo RIC tem os melhores canais para a sua marca.
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
                                        <img src="assets/img/image-cases.jpg" alt="Sempre Jovem, Sempre Curitiba">
                                        <div class="slide-content">
                                            <div class="slide-text">
                                                <h2>Mês da Mulher <br>Hiperfarma!</h2>
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
                                <select name="veiculo" id="veiculo">
                                    <option value="" selected disabled>Veículo</option>
                                    <option value="tv">TV</option>
                                    <option value="radio">Rádio</option>
                                    <option value="digital">Digital</option>
                                </select>
                            </div>
                            <div class="filtro">
                                <label class="checkbox-container">
                                    <input type="checkbox" name="crossmedia" id="crossmedia">
                                    <span>Mostrar Somente projetos crossmedia</span>
                                </label>
                            </div>
                            <button class="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="lista-cases">
                            <a href="cases-inner.php" class="case-item">
                                <div class="crossmedia-tag">Crossmedia</div>
                                <img src="assets/img/img-cases-mulher.jpg" alt="Mês da Mulher Hiperfarma">
                                <div class="case-title">
                                    <h3>Mês da Mulher Hiperfarma</h3>
                                </div>
                            </a>

                            <a href="cases-inner.php" class="case-item">
                                <img src="assets/img/img-cases-mulher.jpg" alt="Orgulho da Terra 2022">
                                <div class="case-title">
                                    <h3>Orgulho da Terra 2022</h3>
                                </div>
                            </a>

                            <a href="cases-inner.php" class="case-item">
                                <div class="crossmedia-tag">Crossmedia</div>
                                <img src="assets/img/img-cases-mulher.jpg" alt="O Maior Verão JP">
                                <div class="case-title">
                                    <h3>O Maior Verão JP</h3>
                                </div>
                            </a>
                        </div>

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