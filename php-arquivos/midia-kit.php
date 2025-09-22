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
<body class="midia-kit">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/bg-midia-kit.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Midia Kits</h1>
                                        <p>
                                            Visualize e baixe nossos Midia Kits.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="midia-kit-busca">
            <div class="container">
                <div class="midia-kit-header">
                    <div class="midia-kit-header-titulo">
                        Confira nossos Mídia Kits
                    </div>
                    <div class="midia-kit-filtros">
                        <span class="filtro-label">Filtrar por</span>
                        <div class="filtros-container">
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
                                <select name="plataforma" id="plataforma">
                                    <option value="" selected disabled>Plataforma</option>
                                    <option value="tv">TV</option>
                                    <option value="radio">Rádio</option>
                                    <option value="digital">Digital</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="midia-kit-divisor">
                <div class="row midia-kit-grid">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 2">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 2">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                         <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 4">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 2">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 2">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                         <a href="/ric/midia-kit-inner.php" class="midia-kit-link">
                            <div class="midia-kit-box">
                                <img src="assets/img/01_Midia.jpg" alt="Mídia Kit 4">
                            </div>
                        </a>
                    </div>
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