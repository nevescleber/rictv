<?php /* Template Name: Termos e Condições */ ?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-contato.jpg" alt="Fale Conosco">
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Erro 404</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="termos-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-inner">
                        <p>Parece que essa página foi dar uma volta em Curitiba ou em algum lugar do Paraná, ou se perdeu no meio de uma reportagem da RICtv.<br><br>Mas calma, nós vamos te ajudar:</p>
                        <a href="<?php echo home_url(); ?>" class="btn-saiba-mais" style="background: linear-gradient(90deg,#06c 0,#0c6 100%); color: #fff; padding: 1rem 2.5rem; border-radius: 6px; font-weight: 600; font-size: 1.1rem; text-decoration: none; display: inline-block; transition: background .2s, box-shadow .2s; box-shadow: none;">Voltar para a página inicial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="divisor"></div>

<?php get_footer(); ?>