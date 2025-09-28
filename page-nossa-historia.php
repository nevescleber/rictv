<?php 
/*
Template Name: Nossa História
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-historia.png" alt="RIC TV">
                    <?php endif; ?>
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-bigger"><?php echo get_the_title(); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="nossa-historia">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">
                        Prazer, <br>
                        somos o maior grupo<br>
                        multiplataforma do Paraná.
                    </h2>

                    <p class="text-small desc">
                        A nossa história começa com um nome que se tornou sinônimo de comunicação e inovação no sul do Brasil:
                        <br><br>
                        <strong>Mário José Gonzaga Petrelli.</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-small">
                        Nascido em 31 de maio de 1935, em Florianópolis (SC), Mário se formou em Direito pela UFPR, mas a sua trajetória foi muito além dos tribunais! Ainda nos anos 1950, ingressou no setor de seguros.
                        <br><br>
                        Mas a sua verdadeira paixão sempre foi a comunicação! Em 1956, ele deu os primeiros passos no Jornalismo, atuando como repórter de política nos jornais O Dia e A Tarde, em Curitiba.
                        <br><br>
                        Filho do engenheiro Leonardo Petrelli e da servidora pública Alice Guilhon Gonzaga Petrelli, Mário construiu a sua família ao lado de Dircea Corrêa Petrelli, com quem teve cinco filhos — incluindo Leonardo Petrelli Neto, que mais tarde seguiria os seus passos na comunicação.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre-mario">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mario-gonzaga.png" alt="Mário Petrelli" class="img-fluid">
                </div>
                <div class="col-md-6">
                   <h2 class="text-medium-big">
                        O começo de um império<br> da comunicação no Paraná
                   </h2>
                   <p class="text-small">
                        A grande virada aconteceu em 1976, quando Mário fundou a sua primeira rádio, a Floresta Negra, em  Joinville. No mesmo período, conquistou a concessão  da TV Cultura, em Chapecó, a primeira emissora  de TV da cidade. Era o começo de um império da  comunicação, que rapidamente se tornaria referência no jornalismo regional. 
                        <br><br>
                        Enquanto expandia a sua atuação em Santa Catarina,  Mário enxergou novas oportunidades no Paraná. Ainda  em 1976, inaugurou a Rádio Curitibana, seguida pela  TV Vanguarda em Curitiba e Londrina, então afiliada à  Rede Manchete. 
                        <br><br>
                        Foi em 1988 que Leonardo Petrelli Neto passou a atuar  ao lado do pai, consolidando a Rede Independência de  Comunicação, o Grupo Ric. 
                        <br><br>
                        O espírito inovador de Mário Petrelli não parou por aí…
                   </p>
                </div>
            </div>
        </div>
    </section>

    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">Uma comunicação forte, <br>
                    regional e conectada às pessoas</h2>
                    <p class="text-small">
                        Em 2006, o grupo ampliou a sua presença no mercado  impresso com o lançamento do jornal Notícias do  Dia (hoje conhecido como ND) em Santa Catarina.  
                        <br><br>
                        Já em 2007, veio um grande marco: a unificação  das operações no Paraná e em Santa Catarina,  transformando o Grupo Ric no maior conglomerado de  comunicação do sul do Brasil. 
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-small">
                    O braço catarinense, que era afiliado ao SBT, passou  a integrar a Rede Record, assim como já acontecia no  Paraná desde 1999. 
                        <br><br>
                        Com a chegada do digital, o Grupo Ric seguiu inovando!  Em 2012, lançou o portal RIC Mais, que mais tarde foi  regionalizado, dando origem ao ND+ em Santa Catarina  e ao RIC.com.br em Curitiba. 
                        <br><br>
                        Após 38 anos à frente dos negócios, em 2013, Mário Petrelli reestruturou o grupo, passando a  presidência para seus filhos: Leonardo Petrelli, no  Paraná, e Marcello Petrelli, em Santa Catarina. Em 2019, veio uma nova reestruturação que resultou no  Grupo ND, focado no mercado catarinense.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-timeline">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <!-- Timeline Swiper -->
                    <div class="timeline-container">
                        <div class="timeline-line"></div>
                        
                        <div class="swiper historia-timeline-swiper">
                            <div class="swiper-wrapper">
                                <!-- 1987 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">1987</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="1987" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 1989 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">1989</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="1989" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 1994 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">1994</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="1994" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 1999 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">1999</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="1999" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 2006 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">2006</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="2006" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 2013 -->
                                <div class="swiper-slide">
                                    <div class="timeline-item">
                                        <div class="timeline-year">2013</div>
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-timeline.png" alt="2013" class="timeline-image">
                                            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a iaculis augue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation arrows -->
                        <div class="timeline-nav">
                            <button class="timeline-prev">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="timeline-next">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box">

                        <div class="img-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                        </div>

                        <p class="text-small">
                            visão, inovação e proximidade
                        </p>

                        <p class="text-medium">
                            A história do Grupo Ric é feita de <b>visão, inovação e proximidade</b>.
                        </p>

                        <p class="text-medium-big">
                            Mais do que um conglomerado de comunicação,
                            somos um time que acredita no poder da informação para transformar vidas e comunidades.
                        </p>

                        <div class="img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-grande.png" alt="1987" class="timeline-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="historia-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">Multiplataforma, <br>
                    multiconteúdo e multiconexão </h2>

                    <p class="text-small">
                        A Rede Independência de Comunicação, <b>sob o comando de Leonardo Petrelli</b>, 
                        consolidou-se como o <b>maior grupo multiplataforma do Paraná</b>. 
                        Com emissoras em Curitiba, Londrina, Maringá e Cascavel, a <b>RICtv é a maior afiliada da RECORD no estado!</b>
                    </p>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-historia.png" alt="Multiplataforma, multiconteúdo e multiconexão" class="img-fluid">

                </div>

                <div class="col-md-6">
                    <div class="historia-faq-container">
                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Dezembro de 2024 nós expandimos</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Principais sites no Digital</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Realities Shows Regionais</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Já no agronegócio nós temos a solução</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Inovação e Empreendedorismo</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Impacto Social</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Eventos: Shows e Convenções</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                <h4>Publicidade Out of Home</h4>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-content">
                                <div class="faq-content-inner">
                                    <p class="text-small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>	

    <section class="historia-video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        Esse é o Grupo Ric: o maior grupo de comunicação
                        multiplataforma do Paraná e um dos maiores do país, sempre inovando e conectando pessoas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="logos">
        <div class="logos-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="Grupo RIC" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logos-list">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-white.png" alt="Grupo RIC" class="img-fluid">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-JP-FM---TODAS-PRAÇAS(WHITE).png" alt="Grupo RIC" class="img-fluid">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-JP-FM---TODAS-PRAÇAS(WHITE)2.png" alt="Grupo RIC" class="img-fluid">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-grupo-ric.png" alt="Grupo RIC" class="img-fluid">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-TOPVIEW-BRANCA.png" alt="Grupo RIC" class="img-fluid">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-INSTITUTO RIC-BRANCA-HORIZONTAL1.png" alt="Grupo RIC" class="img-fluid">
                    </div>
                </div>

                <div class="col-12">
                    <a href="#" class="btn-saiba-mais text-medium">Veja Nossa Apresentação Institucional</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>