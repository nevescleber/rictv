<?php 
/*
Template Name: Principios Editoriais
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-principios.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Principios Editoriais</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="principios">
        <div class="principios-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-big text-white">
                        O Grupo RIC Paraná, é composto por veículos de rádio, televisão e plataformas digitais.
                    </h2>
                </div>
                <div class="col-md-6">
                    <p class="text-medium text-white">
                        Nas plataformas digitais RIC.com.br e Banda B, a atuação jornalística é guiada por um <b>compromisso inegociável</b>
                        com a verdade, a ética e o interesse público.

                        <br>
                        <br>
                        <b>Nosso valor editorial</b> tem como fundamento o jornalismo independente, responsável e plural,
                        que respeita a diversidade de opniões, assegura o contraditório e prioriza a veracidade dos fatos. Atuamos
                        com imparcialidade, sempre atentos ao propósito de informar e contribuir para o desenvolvimento de uma sociedade mais bem informada e consiente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="conteudos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/principios-imagem.png" alt="RIC TV">
                </div>
                <div class="col-md-6">
                    <p class="text-medium">
                        Nossos conteúdos são pautados por critérios técnicos de relevância, atualidade, confiabilidade e interesse público, com o objetivo de oferecer informação verdadeira de qualidade e promover uma comunicação transparente com nossos públicos. Seja por meio da televisão, do rádio ou dos portais de notícias, buscamos refletir a realidade regional com profundidade, contexto e responsabilidade social.
                        <br>
                        <br>
                        O Grupo RIC Paraná valoriza o jornalismo como instrumento essencial da democracia e reafirma seu compromisso diário com a integridade editorial, a inovação nos formatos e a proximidade com a população que confia em nossos veículos como fontes seguras de informação. 
                        <br>
                        <br>
                        Ao promover a convergência entre TV, rádio e plataformas digitais, o Grupo Ric Paraná reafirma sua missão de ser referência em informação de qualidade, mantendo um vínculo sólido com seu público  e com os princípios que regem o bom jornalismo.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>