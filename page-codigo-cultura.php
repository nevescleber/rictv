<?php 
/*
Template Name: Código de Cultura
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-codigo-cultura.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Código de Cultura</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="proposito">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">
                        Vivemos <br /> 
                        nosso propósito <br /> 
                        todos os dias
                    </h2>
                    <p class="text-medium">
                        O Grupo RIC vive diariamente o seu propósito de gerar impacto positivo e duradouro no desenvolvimento do Paraná. 
                        Cada ação, individual ou coletiva, é realizada com o 
                        <b>compromisso de transformar a realidade do estado, promovendo crescimento social, econômico e cultural para a população.</b>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-medium">
                        A empresa atua como um ecossistema de comunicação acolhedor e transparente, sendo ponte entre vozes e soluções. 
                        Com ética, credibilidade e responsabilidade, defende os direitos da sociedade, estimula o debate construtivo e 
                        dá voz às diferentes perspectivas dos paranaenses. Além disso, <b>aposta em sustentabilidade, governança ética e 
                        impacto social como pilares para construir um Paraná mais equilibrado e próspero.</b>
                        O Grupo RIC também investe no desenvolvimento de pessoas, colaboradores, parceiros e comunidades, 
                        incentivando a liderança humanizada com criatividade, empatia e inovação. Por meio de seus produtos e serviços 
                        multiplataforma, a empresa transforma vidas, inspira mudanças e entrega resultados mensuráveis para a sociedade e 
                        para os anunciantes que confiam na força da marca.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="proposito-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-proposito">
                        <h3>Um ecossistema de oportunidades</h3>
                        <p class="text-medium">
                            Estamos em todas as telas, canais e plataformas, <strong>conectando pessoas, negócios e ideias!</strong> Do Paraná para o mundo, criando valor para clientes, colaboradores e parceiros.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-proposito">
                        <h3>Um time apaixonado e sempre em movimento</h3>
                        <p class="text-medium">
                            Estamos em todas as telas, canais e plataformas, <strong>conectando pessoas, negócios e ideias!</strong> Do Paraná para o mundo, criando valor para clientes, colaboradores e parceiros.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4">
                    <div class="text-only-section">
                        <h3>Nosso futuro em 2030</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-proposito">
                        <h3>Excelência, ética e reconhecimento</h3>
                        <p class="text-medium">
                            Fazemos bem feito, com <strong>propósito e transparência.</strong> O nosso compromisso com a qualidade e a ética nos torna referência nacional — da produção de conteúdo ao atendimento impecável!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-proposito">
                        <h3>Vivendo o digital</h3>
                        <p class="text-medium">
                            Vivemos a inovação, <strong>liderando a transformação da comunicação</strong> no Paraná e explorando cada nova tecnologia que surge.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4">
                    <div class="card-proposito">
                        <h3>Compromisso com ESG</h3>
                        <p class="text-medium">
                            Crescemos de forma responsável, colocando em prática <strong>iniciativas ambientais, sociais e de governança</strong> que realmente fazem a diferença para o nosso entorno.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="futuro">
        <div class="futuro-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="Background Futuro">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-big text-white">
                        O nosso futuro já está acontecendo, <br />
                        <span>e ele é incrível!</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-futuro">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="conteudo">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-01.png" alt="Conteúdo e Jornalismo">
                        </div>
                        <div class="card-content">
                            <h3>Conteúdo<br>e Jornalismo</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Conteúdo<br>e Jornalismo</h3>
                                <p class="text-medium">
                                    Somos referência em jornalismo e produção de  conteúdo, unindo credibilidade, inovação e criatividade.  Conectamos o Paraná ao mundo e mostramos a  grandeza do nosso estado. O nosso compromisso  é liderar a audiência com conteúdos que informam,  transformam e geram impacto social. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="comercial">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-02.png" alt="Comercial">
                        </div>
                        <div class="card-content">
                            <h3>Comercial</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Comercial</h3>
                                <p class="text-medium">
                                    Cada uma das nossas regionais é essencial para a nossa força e relevância. Somos a escolha de profissionais  e anunciantes, reconhecidos pelo impacto que  geramos na audiência e no mercado! Operamos com  alta performance, inovação e tecnologia, sempre  valorizando as particularidades de cada região do  Paraná. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="marketing">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-03.png" alt="Marketing">
                        </div>
                        <div class="card-content">
                            <h3>Marketing</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Marketing</h3>
                                <p class="text-medium">
                                    Aqui está o coração do Grupo Ric. Somos geradores de  negócios e experiências, criando conexões autênticas  que engajam e constroem comunidades. A nossa  marca é a inovação, o uso estratégico de dados e uma  comunicação criativa e disruptiva. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="recursos-humanos">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-04.png" alt="Recursos Humanos">
                        </div>
                        <div class="card-content">
                            <h3>Recursos<br>Humanos</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Recursos<br>Humanos</h3>
                                <p class="text-medium">Operamos com alta performance, inovação e tecnologia, sempre valorizando as particularidades de cada região do Paraná.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="tecnologia">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-05.png" alt="Tecnologia">
                        </div>
                        <div class="card-content">
                            <h3>Tecnologia</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Tecnologia</h3>
                                <p class="text-medium">Cada uma das nossas regionais é essencial para a nossa força e relevância. Somos a escolha de profissionais e anunciantes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-futuro" data-bg="institucional">
                        <div class="card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/futuro-06.png" alt="Institucional">
                        </div>
                        <div class="card-content">
                            <h3>Institucional</h3>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Institucional</h3>
                                <p class="text-medium">Operamos com alta performance, inovação e tecnologia, sempre valorizando as particularidades de cada região do Paraná.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visao">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-big">Nossa visão em ação</h2>
                    <p class="text-medium">
                        Conectando excelência, ética, inovação e propósito, o Grupo Ric <b>lidera a comunicação no Paraná</b>, abrindo
                        caminhos para um futuro de crescimento, impacto e transformação. Mais do que construir um legado,
                        estamos criando um <b>movimento que inspira e transcende gerações.</b>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visao-imagem.png" alt="Nossa visão em ação">
                </div>
            </div>
        </div>
    </section>

    <section class="juntos">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-left">
                        <h2 class="text-bigger">
                            Juntos <br> 
                            fazemos <br> 
                            acontecer!
                        </h2>

                        <p class="text-medium">
                            Nossos princípios são o alicerce
                            da nossa cultura  organizacional 
                        </p>
                    </div>
                    <div class="img-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                    </div>
                    <div class="col-md-6 col-right">
                        <div class="img-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ativo-ric.png" alt="1987" class="timeline-image">
                        </div>
                        <p class="text-medium">
                            Eles guiam as nossas ações, decisões e
                            comportamentos, unindo toda a equipe em torno de um  propósito comum e impulsionando o nosso crescimento  sustentável. 
                            <br><br>
                            Divididos em quatro pilares — desenvolvimento,  resultados, pessoas e transformação — esses princípios  refletem o que acreditamos e a visão que temos para o  futuro.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="principios">
        <div class="azul">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-01.png" alt="Desenvolvimento">
                        <h2 class="text-big">Desenvolvimento</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="text-medium">
                            Acreditamos que o desenvolvimento econômico,  social e cultural do Paraná está diretamente ligado ao  nosso papel como agentes transformadores. 
                            Somos motores do crescimento do estado,  promovendo riqueza e prosperidade com responsabilidade. 
                            Valorizamos a força do regionalismo e a diversidade como fontes de inovação, crescimento e  desenvolvimento. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="verde">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-02.png" alt="Desenvolvimento">
                        <h2 class="text-big">Resultados</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="text-medium">
                            Resultados extraordinários são fruto de ações consistentes e bem direcionadas. 
                            Cada um de nós é responsável por gerar impacto positivo em todos os níveis, sempre com ética e  transparência. 
                            Pequenas ações diárias, realizadas com constância,  constroem grandes conquistas. 
                            Decisões baseadas em dados, fatos e evidências  garantem resultados sólidos e sustentáveis. 
                            Pessoas felizes, engajadas e conectadas a um  propósito forte produzem resultados excepcionais. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="laranja">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-03.png" alt="Desenvolvimento">
                        <h2 class="text-big">Pessoas</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="text-medium">
                            Acreditamos que as pessoas são o coração do nosso negócio, e o sucesso nasce da valorização de cada indivíduo.Nossa força está na diversidade e na interdependência, que ampliam talentos e aceleram o aprendizado.
                            Evoluímos continuamente como profissionais e como organização.
                            Temos um compromisso genuíno com a sustentabilidade, cuidando do ambiente, da sociedade e da economia.Somos uma empresa humana e consciente, que protege direitos e faz do Grupo Ric o melhor lugar do mundo para se trabalhar.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="azul-claro">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-04.png" alt="Desenvolvimento">
                        <h2 class="text-big">Transformação</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="text-medium">
                            Acreditamos que a transformação é constante e  essencial para o crescimento. 
                            Estamos sempre um passo à frente, antecipando  mudanças e abraçando o novo. 
                            A evolução individual é responsabilidade de cada um,  mas juntos aceleramos esse processo. 
                            Somos protagonistas na transformação do Grupo Ric,  conduzindo a empresa rumo à nossa visão de futuro. 
                            O conhecimento é o motor da mudança, e buscamos  aprendê-lo continuamente para impulsionar nosso  crescimento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenca">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-diferenca.png" alt="A nossa diferença">    
                </div>
                <div class="col-md-6 col-right">
                    <h2 class="text-medium-big">
                        Fazer a diferença no Paraná com uma comunicação que informa, conecta e transforma
                    </h2>

                    <p class="text-medium">
                        Damos voz à sociedade, impulsionamos o protagonismo do estado e, acima de tudo, agimos com ética em tudo o que fazemos!
                        <br><br>
                        E quem está com a gente nessa?
                        <br><br>
                        A nossa missão só faz sentido quando é compartilhada. Por isso, buscamos pessoas que acreditem nos nossos valores e que estejam dispostas a construir algo grande  com a gente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="missao">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 missao-left">
                    <div class="missao-content">
                        <h2 class="text-bigger">Nossos parceiros de missão</h2>
                    </div>
                    
                    <div class="missao-swiper-container">
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev-custom">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next-custom">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="swiper missao-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">1</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Encaram desafios de frente com resiliência, flexibilidade e determinação.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">2</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Acreditam em nosso sonho e se conectam à nossa visão de futuro.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">3</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Adaptam-se com agilidade navegando por mudanças e novos cenários.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">4</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Têm um olhar otimista confiando em um Brasil melhor e no crescimento sustentável da nossa empresa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">5</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Sabem que crescimento e ética andam juntos pavimentando o caminho para a nossa liderança.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">6</div>
                                        <div class="slide-text">
                                            <p class="text-medium">São versáteis para atuar em diferentes cenários e desafios.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">7</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Abraçam a transformação, evoluindo junto com o mercado e com a nossa organização.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">8</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Transformam ideias em ação, aceitando desafios com energia e comprometimento.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">9</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Entregam resultados com excelência, sempre com alegria e brilho nos olhos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-content">
                                        <div class="slide-number">10</div>
                                        <div class="slide-text">
                                            <p class="text-medium">Amam bater metas e superar limites, celebrando conquistas e indo além do esperado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none missao-right">
                    <!-- Área direita vazia -->
                </div>
            </div>
        </div>
    </section>

    <section class="video">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-bigger">
                        No Grupo Ric, há valores que não abrimos mão!
                    </h2>
                </div>
                <div class="col-md-6">
                    <p class="text-medium">
                        São princípios que orientam a nossa conduta no  dia a dia e garantem que cada ação reflita o nosso  compromisso com a ética, responsabilidade e impacto  positivo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="lideranca">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">A nossa liderança
                    segue princípios sólidos.</h2>
                    <p class="text-medium">
                        Para garantir que cada escolha seja ética, responsável e  eficaz. Esses pilares nos guiam no dia a dia: movem o mundo! 
                        <br><br>
                        Celebramos a diversidade, a inovação e a coragem de  fazer diferente. 
                        Valorizamos cada história, cada região, cada voz. 
                        <br><br>
                        Aqui, a ética é inegociável, a verdade é sagrada e o  cliente está sempre no centro. 
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-medium-big">A nossa liderança
                    segue princípios sólidos.</h2>
                    <p class="text-medium">
                        Eles não se limitam a números — estão nas vidas que  tocamos, nas parcerias que construímos, nos sonhos  que ajudamos a 
                        realizar. 
                        <br><br>
                        Somos agentes do desenvolvimento sustentável,  respeitando o meio ambiente e fortalecendo a  sociedade.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium-big">A nossa cultura
                    é a nossa força!</h2>
                    <p class="text-medium">
                        Cuidamos das pessoas, acreditamos no aprendizado  constante e nunca paramos de evoluir. 
                        <br><br>
                        Somos apaixonados pelo Paraná e comprometidos em  levar sua grandeza ao mundo. 
                    </p>
                </div>
                <div class="col-md-6">
                    slider
                </div>
            </div>
        </div>
    </section>


    <div class="divisor"></div>


<?php get_footer(); ?>