<?php 
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-contato.jpg" alt="RIC TV">
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-big">Fale Conosco</h1>
                                    <!--<p>
                                        Tem dúvidas sobre como sua campanha pode performar em nossos canais? 
                                        <br>
                                        Fale agora mesmo com nosso time de executivos e entenda.
                                    </p>-->
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-contato.png" alt="Mulher usando notebook" class="img-fluid rounded">
            </div>
            <div class="col-md-6 contato-info">
                <h2 class="text-big">Estamos aqui<br>para atender você!</h2>
                <p class="text-medium">Tem dúvidas sobre como sua campanha pode performar em nossos canais? Fale agora mesmo com nosso time de executivos e entenda.</p>
                <p class="text-medium">Caso seu interesse seja em vagas de emprego dentro do Grupo Ric, favor enviar email com currículo para:</p>
                <a href="mailto:vagas@gruporic.com.br" class="contato-link text-medium">vagas@gruporic.com.br</a>
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
                                Aceito receber informações por e-mail e WhatsApp sobre promoções, notícias e mais. Confira nossos 
                                <a href="/ric-wp/termos-de-uso">Termos de Uso</a> e 
                                <a href="/ric-wp/politica-de-privacidade">Política de Privacidade</a>.
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
                        <button type="submit" class="btn-buscar w-100 mt-2 text-medium">Enviar</button>
                    </div>
                </div>
            </form>
            <div class="contato-privacidade mt-2 text-center">
                <small class="text-medium">A nossa empresa está comprometida a proteger e respeitar sua privacidade, seus dados são usados apenas para fins de marketing.</small>
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

<?php get_footer(); ?>