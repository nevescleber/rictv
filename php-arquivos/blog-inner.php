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
<body class="blog-inner">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="banner-static">
                <img src="assets/img/Banner.jpg" alt="RIC TV">
                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tag-institucional">Institucional</div>
                                <div class="titulo">
                                    Grupo RIC E Leonardo Petrelli Se Destacam Em Evento Internacional Sobre Desenvolvimento Regional
                                </div>
                                <div class="meta">
                                    <span class="data">14 Maio 2025</span> |
                                    <span class="autor">Por Danielle Dos Santos Soppa Terres</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog-inner-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-row">
                            <div class="share-icons">
                                <a href="#" title="Compartilhar no Facebook" target="_blank"><img src="assets/img/facebook.svg" alt="Facebook"></a>
                                <a href="#" title="Compartilhar no LinkedIn" target="_blank"><img src="assets/img/linkedin.svg" alt="LinkedIn"></a>
                                <a href="#" title="Compartilhar no X" target="_blank"><img src="assets/img/x.svg" alt="X"></a>
                            </div>
                            <div class="content-description">
                                <p>O Grupo RIC, referência em comunicação regional no Paraná, foi destaque na 2ª edição do Brazilian Regional Markets (BRM), realizado em Nova Iorque, nos Estados Unidos. O evento, promovido pela ApexBrasil, reuniu políticos, empresários e investidores para debater o fortalecimento de mercados fora do eixo Rio-São Paulo.</p>
                                <p>Representando o Grupo RIC, o presidente Leonardo Petrelli participou do painel "BRM: Construindo Pontes para Alavancar o Desenvolvimento Regional". Ao lado de nomes como Fernando Cinelli (presidente da ApexBrasil), Tallis Gomes (fundador do G4 Educação) e Americo Buaz Neto (Rede Vitória - ES), Petrelli defendeu o papel estratégico da comunicação regional na geração de oportunidades econômicas e sociais.</p>
                                <img src="assets/img/slider/slide2.jpg" alt="Evento Grupo RIC">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-inner-related">
            <div class="container">
                <div class="related-header" style="display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
                    <h2 class="related-title" style="margin-bottom: 0;">Veja Também</h2>
                    <a href="blog.php" class="btn btn-outline-primary related-btn">Mais Notícias</a>
                </div>
                <div class="row blog-posts-grid">
                    <a href="blog-inner.php" class="blog-post-card">
                        <div class="blog-post-image">
                            <img src="assets/img/slider/chef-medicos.jpg" alt="Rádio Banda B apresenta nova frequência 89,7 FM ao mercado">
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tags">
                                <span class="blog-post-tag institucional">Institucional</span>
                            </div>
                            <h3 class="blog-post-title">Rádio Banda B apresenta nova frequência 89,7 FM ao mercado</h3>
                            <span class="blog-post-date">8 Maio 2025</span>
                        </div>
                    </a>
                    <a href="blog-inner.php" class="blog-post-card">
                        <div class="blog-post-image">
                            <img src="assets/img/slider/slide2.jpg" alt="Grupo Ric anuncia organização estratégica com novos diretores e desafios de crescimento">
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
                            <img src="assets/img/slider/slide3.jpg" alt="TV Conectada impulsiona debate no Retail Media Show 2025">
                        </div>
                        <div class="blog-post-content">
                            <span class="blog-post-tag audiencia">Audiência e Alcance</span>
                            <h3 class="blog-post-title">TV Conectada impulsiona debate no Retail Media Show 2025</h3>
                            <span class="blog-post-date">24 Abril 2025</span>
                        </div>
                    </a>
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