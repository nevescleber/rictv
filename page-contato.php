<?php 
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-contato.jpg" alt="Fale Conosco">
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Fale Conosco</h1>
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

    <section class="contato-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contato-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-contato.png" alt="Mulher usando notebook" class="img-fluid rounded">
            </div>
            <div class="col-md-6 contato-info">
                <h2 class="text-big">Estamos aqui<br>para atender você!</h2>
                <p class="text-medium">Tem dúvidas sobre como sua campanha pode performar em nossos canais ou sobre como sua campanha pode performar em nossos canais?</p>
                <p class="text-medium">Fale agora mesmo com nosso time de executivos e entenda.</p>
                <!--<a href="mailto:vagas@gruporic.com.br" class="contato-link text-medium">vagas@gruporic.com.br</a>-->   
            </div>
        </div>
    </div>
    </section>

    <section class="contato-formulario">
        <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="7a072fd" title="Formulário de Contato"]'); ?>
            <div class="contato-privacidade mt-2 text-center">
                <small class="text-small">A nossa empresa está comprometida a proteger e respeitar sua privacidade, seus dados são usados apenas para fins de marketing.</small>
            </div>
        </div>
    </section>

    <?php include 'components/anuncie-grupo-ric.php'; ?>
    
<?php get_footer(); ?>