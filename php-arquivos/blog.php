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
<body class="blog">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-blog.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="text-big">Ric Talks</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="feature-blog">
            <div class="container">
                <div class="blog-card">
                    <div class="image-container">
                        <img src="assets/img/imagem-blog.png" alt="Grupo RIC e Leonardo Petrelli">
                    </div>
                    <div class="content">
                        <div class="tags">
                            <span class="tag new-post">Novo Post</span>
                            <span class="tag institutional">Institucional</span>
                        </div>
                        <h2 class="title">Grupo RIC e Leonardo Petrelli se destacam em evento internacional sobre desenvolvimento regional</h2>
                        <p class="description">O Grupo RIC, referência em comunicação regional no Paraná, foi destaque na 2ª edição do Brazilian Regional Markets (BRM)</p>
                        <div class="meta">
                            <div class="date">
                                <i class="far fa-calendar"></i>
                                14 Maio 2023
                            </div>
                            <div class="author">
                                <i class="far fa-user"></i>
                                Danielle Dos Santos Soppa Terres
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-categories-section">
            <div class="container">
                <div class="blog-categories-swiper-wrapper">
                    <button class="blog-categories-arrow blog-categories-arrow-prev" disabled>
                        <span>&larr;</span>
                    </button>
                    <div class="swiper blog-categories-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><button class="category active">Todas</button></div>
                            <div class="swiper-slide"><button class="category">Audiência E Alcance</button></div>
                            <div class="swiper-slide"><button class="category">Novidades</button></div>
                            <div class="swiper-slide"><button class="category">Institucional</button></div>
                            <div class="swiper-slide"><button class="category">Jovem Pan</button></div>
                            <div class="swiper-slide"><button class="category">Jovem Pan 2</button></div>
                        </div>
                    </div>
                    <button class="blog-categories-arrow blog-categories-arrow-next">
                        <span>&rarr;</span>
                    </button>
                </div>
                <div class="blog-categories-divider"></div>
            </div>
        </section>

        <section class="blog-posts-section">
            <div class="container">
                <div class="row blog-posts-grid">
                    <a href="blog-inner.php" class="blog-post-card">
                        <div class="blog-post-image">
                            <img src="assets/img/imagem-blog-01.png" alt="Rádio Banda B apresenta nova frequência 89,7 FM ao mercado">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tags">
                                <span class="blog-post-tag institucional">Institucional</span>
                                <span class="blog-post-tag institucional">Institucional</span>
                            </div>
                            <h3 class="blog-post-title">Rádio Banda B apresenta nova frequência 89,7 FM ao mercado</h3>
                            <span class="blog-post-date">8 Maio 2025</span>
                        </div>
                    </a>
                    <a href="blog-inner.php" class="blog-post-card">
                        <div class="blog-post-image">
                             <img src="assets/img/imagem-blog-01.png" alt="Rádio Banda B apresenta nova frequência 89,7 FM ao mercado">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tags">
                                <span class="blog-post-tag institucional">Institucional</span>
                            </div>
                            <h3 class="blog-post-title">Grupo Ric anuncia organização estratégica com novos diretores e desafios de crescimento</h3>
                            <span class="blog-post-date">25 Abril 2025</span>
                        </div>
                    </a>
                    <a href="blog-inner.php" class="blog-post-card">
                        <div class="blog-post-image">
                            <img src="assets/img/imagem-blog-01.png" alt="TV Conectada impulsiona debate no Retail Media Show 2025">
                        </div>
                        <div class="blog-post-content">
                            <span class="blog-post-tag audiencia">Audiência e Alcance</span>
                            <h3 class="blog-post-title">TV Conectada impulsiona debate no Retail Media Show 2025</h3>
                            <span class="blog-post-date">24 Abril 2025</span>
                        </div>
                    </a>
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