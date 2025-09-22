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
<body class="contato">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/bg-contato.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Fale Conosco</h1>
                                        <p>
                                           Tem dúvidas sobre como sua campanha pode performar em nossos canais? 
                                           <br>
                                           Fale agora mesmo com nosso time de executivos e entenda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <section class="contato-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 contato-img">
                        <img src="assets/img/imagem-contato.png" alt="Mulher usando notebook" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6 contato-info">
                        <h2>Estamos aqui<br>para atender você!</h2>
                        <p>Tem dúvidas sobre como sua campanha pode performar em nossos canais? Fale agora mesmo com nosso time de executivos e entenda.</p>
                        <p>Caso seu interesse seja em vagas de emprego dentro do Grupo Ric, favor enviar email com currículo para:</p>
                        <a href="mailto:vagas@gruporic.com.br" class="contato-link">vagas@gruporic.com.br</a>
                    </div>
                </div>
            </div>
         </section>

        <section class="contato-formulario">
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nome">
                            <select class="form-control" placeholder="Cidade">
                                <option value="">Cidade</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Empresa">
                            <select class="form-control" placeholder="Qual sua área de atuação">
                                <option value="">Qual sua área de atuação</option>
                            </select>
                            <select class="form-control" placeholder="Qual tamanho da sua empresa?">
                                <option value="">Qual tamanho da sua empresa?</option>
                            </select>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="aceito-informacoes">
                                <label class="form-check-label" for="aceito-informacoes">
                                    Aceito receber informações por e-mail e WhatsApp sobre promoções, notícias e mais. Confira nossos <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a>.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="text" class="form-control" placeholder="Telefone">
                            <input type="text" class="form-control" placeholder="Cargo">
                            <select class="form-control" placeholder="Sua Empresa investe em mídia?">
                                <option value="">Sua Empresa investe em mídia?</option>
                            </select>
                            <select class="form-control" placeholder="Região de Interesse">
                                <option value="">Região de Interesse</option>
                            </select>
                            <button type="submit" class="btn-buscar w-100 mt-2">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="contato-privacidade mt-2 text-center">
                    <small>A nossa empresa está comprometida a proteger e respeitar sua privacidade, seus dados são usados apenas para fins de marketing.</small>
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
        
        <?php include_once 'components/footer.php'; ?>
    </main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>