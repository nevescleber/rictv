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
<body class="error">
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
                                        <h1>Erro 404</h1>
                                        <p>
                                            Nossos repórteres estão investigando para onde foi essa página desaparecida.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="error-content">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-6 text-center">
                        <img src="assets/img/1.png" alt="Página não encontrada" style="max-width: 100%; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07);">
                   </div>
                   <div class="col-md-6">
                        <h2 style="font-weight:700; font-size:2rem; margin-bottom:0.5rem;">Oops!<br>Parece que você se perdeu.</h2>
                        <p style="margin-bottom:1.5rem; color:#444;">Parece que essa página foi dar uma volta em Curitiba ou em algum lugar do Paraná, ou se perdeu no meio de uma reportagem da RICtv.<br><br>Mas calma, nós vamos te ajudar:</p>
                        <a href="/" class="btn-saiba-mais" style="background: linear-gradient(90deg,#06c 0,#0c6 100%); color: #fff; padding: 1rem 2.5rem; border-radius: 6px; font-weight: 600; font-size: 1.1rem; text-decoration: none; display: inline-block; transition: background .2s, box-shadow .2s; box-shadow: none;">Voltar para a página inicial</a>
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