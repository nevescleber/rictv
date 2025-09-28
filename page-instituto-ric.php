<?php 
/*
Template Name: Instituto RIC
*/
?>

<?php get_header(); ?>

<div class="banners">
    <div class="banner-content">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instituto-ric-novo.png" alt="RIC TV">
        <?php endif; ?>
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="instituto-ric-content">
    <div class="container">
        <div class="row align-items-center instituto-ric-main">
            <div class="col-md-6 instituto-ric-texto">
                <h2 class="text-medium-big">O Grupo Ric tem uma <span class="azul">perspectiva profundamente humana e solidária</span> em relação a todo o Paraná!</h2>
                <p class="text-small">Somos uma equipe que desenvolve comunicação para pessoas e, além de investirmos em novas tecnologias, somos um Centro Integrado de Comunicação que realiza todo esse trabalho em prol da sociedade.</p>
                <p class="text-small">Para ampliar nossa atuação de forma estratégica, criamos o Instituto Ric – uma organização sem fins lucrativos, o coração social do Grupo Ric – que promove projetos, campanhas, ações e comunicados relacionados às áreas da saúde, desenvolvimento social, educação, inclusão, sustentabilidade, relacionamento com parceiros e comunidades, com atuação em todo o Paraná.</p>
            </div>
            <div class="col-md-6 instituto-ric-imagem">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-instituto-01.jpg" alt="Instituto Ric" class="img-fluid" />
            </div>
        </div>

        <div class="row instituto-ric-green align-items-center">
            <div class="col-md-4 col-left">
                <div class="img-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-acordo.png" alt="Instituto Ric Logo" class="instituto-ric-green-logo mb-3" />
                <p class="text-medium-big">
                    De acordo com sua essência, o Instituto Ric acredita que
                </p>
            </div>
            <div class="col-md-8 col-right">
                <div class="instituto-ric-green-quote">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png" alt="Instituto Ric Logo" class="img-fluid" />
                </div>
                <p class="text-medium-big"><strong>Informar, comunicar, promover campanhas e criar sinergia entre entidades afins podem ser formas relevantes de conscientizar a sociedade sobre as necessidades do terceiro setor e das comunidades.</strong></p>

                <div class="img-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/frame-01.png" alt="1987" class="timeline-image">
                </div>
            </div>
        </div>

        <p class="text-medium missao">
            Através das plataformas de comunicação do Grupo Ric, o <strong>Instituto Ric proporciona visibilidade</strong> e <strong>promove a compreensão dos valores dessa missão, inspirando mudanças e aproximando a sociedade das ações realizadas para a comunidade.</strong>
        </p>
    </div>
</section>

<section class="instituto-ric-diretoria">
    <div class="container">
        <h2 class="text-big text-white">Nossa Diretoria</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 col-12 mb-4">
                <div class="diretoria-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-diretoria-01.png" alt="Karla Petrelli" class="diretoria-foto">
                    <div class="diretoria-badge">
                        <p class="text-medium">Karla Petrelli</p>
                        <p class="text-small">Presidente</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 mb-4">
                <div class="diretoria-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-diretoria-02.png" alt="Mário Petrelli Neto" class="diretoria-foto">
                    <div class="diretoria-badge">
                        <p class="text-medium">Mário Petrelli Neto</p>
                        <p class="text-small">Vice Presidente</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 mb-4">
                <div class="diretoria-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-diretoria-03.png" alt="André Ferreira" class="diretoria-foto">
                    <div class="diretoria-badge">
                        <p class="text-medium">André Ferreira</p>
                        <p class="text-small">Diretor administrativo-financeiro</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 mb-4">
                <div class="diretoria-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-diretoria-04.png" alt="Kelcybel da Silva" class="diretoria-foto">
                    <div class="diretoria-badge">
                        <p class="text-medium">Kelcybel da Silva</p>
                        <p class="text-small">Coordenadora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-minuto">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <p class="instituto-ric-minuto-divisor"></p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-12 col-left instituto-ric-minuto-imagens">
                <div class="minuto-grid">
                    <div class="minuto-img minuto-img-grande">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-01.png" alt="Crianças felizes" />
                    </div>
                    <div class="minuto-img minuto-img-menor">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-02.png" alt="Mãos unidas" />
                    </div>
                    <div class="minuto-img minuto-img-menor ultima-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-03.png" alt="Logo Minuto do Bem" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-right">
                <h2 class="text-medium-big"><span class="azul">Minuto do Bem:</span>
                    <br>Vozes que Transformam Vidas
                </h2>
                <p class="text-small"><strong>O projeto Minuto do Bem</strong> destaca o trabalho de organizações sociais, constituindo-se como uma ferramenta poderosa para ampliar a visibilidade e o impacto dessas entidades. Ao documentar e compartilhar suas atividades e conquistas, informamos sobre questões sociais importantes e demonstramos o impacto tangível do trabalho dessas organizações.</p>
                <p class="text-small">Esses vídeos têm o potencial de inspirar outras pessoas a se envolverem e apoiarem as iniciativas das organizações sociais, promovendo uma maior compreensão e empatia em relação às comunidades atendidas, e incentivando a colaboração e a mudança positiva na sociedade.</p>
                <p class="text-small">Além disso, ao serem traduzidos para Libras, reforçam nosso compromisso com a inclusão, igualdade e respeito pela diversidade. Esse aspecto é fundamental para a construção de uma sociedade mais justa e acessível para todos, onde cada indivíduo, independentemente de suas habilidades auditivas, possa participar plenamente e contribuir para o bem comum.</p>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-participar-do-minuto">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-left">
                <p class="text-medium">
                    Se a sua instituição deseja participar do projeto, entre em contato conosco pelo email
                </p>
            </div>
            <div class="col-md-6 col-right text-center">
                <a href="mailto:institutoric@gruporic.com.br" class="text-medium-big">institutoric@gruporic.com.br</a>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-projetos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-big">Juntos nós podemos conquistar</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="objetivos-lista">
                    <!-- Box 1 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">1</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-01.png" alt="Erradicação da pobreza" /></div>
                    <div class="objetivo-titulo text-medium">Erradicação da <br>pobreza</div>
                    </div>
                    <!-- Box 2 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">2</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-02.png" alt="Fome zero e agricultura sustentável" /></div>
                    <div class="objetivo-titulo text-medium">Fome zero e <br>agricultura <br>sustentável</div>
                    </div>
                    <!-- Box 3 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">3</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-03.png" alt="Saúde e bem-estar" /></div>
                    <div class="objetivo-titulo text-medium">Saúde e <br>bem-estar</div>
                    </div>
                    <!-- Box 4 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">4</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-04.png" alt="Educação de Qualidade" /></div>
                    <div class="objetivo-titulo text-medium">Educação <br>de Qualidade</div>
                    </div>
                    <!-- Box 5 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">5</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-05.png" alt="Igualdade de gênero" /></div>
                    <div class="objetivo-titulo text-medium">Igualdade <br>de gênero</div>
                    </div>
                    <!-- Box 6 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">6</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-06.png" alt="Água potável e saneamento" /></div>
                    <div class="objetivo-titulo text-medium">Água potável e <br>saneamento</div>
                    </div>
                    <!-- Box 7 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">7</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-07.png" alt="Energia limpa e acessível" /></div>
                    <div class="objetivo-titulo text-medium">Energia limpa e <br>acessível</div>
                    </div>
                    <!-- Box 8 -->
                    <div class="objetivo-box">
                    <div class="objetivo-numero">8</div>
                    <div class="objetivo-icone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-08.png" alt="Trabalho decente e crescimento econômico" /></div>
                    <div class="objetivo-titulo text-medium">Trabalho decente <br>e crescimento <br>econômico</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-recicla">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-stretch flex-wrap">
            <div class="col-md-6 d-none d-md-block ricicla-img-col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-recicla.jpg" alt="RICcicla" class="ricicla-img" />
            </div>
            <div class="col-md-6 col-12 d-flex flex-column justify-content-center align-items-start py-5 px-4 ricicla-text-col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-recicla.png" alt="RICcicla" class="logo-recicla" />
                <p class="text-medium">
                    O projeto RICicla reflete um compromisso substancial com a sustentabilidade e a preservação ambiental. Ao adotarmos práticas de reciclagem e gestão adequada de resíduos, estamos reduzindo nossa pegada de carbono e contribuindo para a conservação dos recursos naturais. Além disso, essa iniciativa tem um impacto positivo na comunidade, ao fomentar a consciência ambiental entre nossos colaboradores e parceiros.
                </p>
                <p class="text-medium bold">
                    Junte-se a nós na busca por um futuro inovador e mais humano para inúmeras vidas!
                </p>
            </div>
        </div>
    </div>
</section>

<div class="divisor"></div>


<?php get_footer(); ?>