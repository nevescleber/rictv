<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ric TV</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/framework.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="historia">
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
                                        <h1>A História</h1>
                                        <p>
                                            35 anos de história lado a lado com o Paraná.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <section class="historia-timeline bg-blue">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="timeline-header text-white">
                            <h2 class="timeline-title-main">NOSSA TRAJETÓRIA</h2>
                            <div class="timeline-subtitle">De onde viemos:<br>Uma Jornada em Destaque</div>
                            <div class="timeline-arrows mt-4 d-flex">
                                <button class="timeline-prev"><span>&larr;</span></button>
                                <button class="timeline-next"><span>&rarr;</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="timeline-bar">
                            <div class="timeline-years">
                                <button class="timeline-year-btn active" data-slide="0">1987</button>
                                <button class="timeline-year-btn" data-slide="1">1989</button>
                                <button class="timeline-year-btn" data-slide="2">1994</button>
                                <button class="timeline-year-btn" data-slide="3">1999</button>
                                <button class="timeline-year-btn" data-slide="4">2007</button>
                            </div>
                        </div>
                        <div class="swiper historia-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="timeline-card">
                                        <div class="timeline-title">TV Vanguarda Londrina<br>e Curitiba Rádio104 e Rádio Independência.</div>
                                        <div class="timeline-desc">O ano é marcado pela aquisição da TV Vanguarda em Londrina e Curitiba, afiliada à Rede Manchete, além da consolidação no rádio com a 104 FM e a Rádio Independência, diversificando nossa presença midiática e fortalecendo o alcance regional.</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="timeline-card">
                                        <div class="timeline-title">Título de 1989</div>
                                        <div class="timeline-desc">Descrição do marco de 1989.</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="timeline-card">
                                        <div class="timeline-title">Título de 1994</div>
                                        <div class="timeline-desc">Descrição do marco de 1994.</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="timeline-card">
                                        <div class="timeline-title">Título de 1999</div>
                                        <div class="timeline-desc">Descrição do marco de 1999.</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="timeline-card">
                                        <div class="timeline-title">Título de 2007</div>
                                        <div class="timeline-desc">Descrição do marco de 2007.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="historia-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
                        <div class="historia-img-box" style="background:#f5f5f5; border-radius:16px; padding:16px;">
                            <img src="assets/img/historia-foto-antiga.jpg" alt="1980, Mário Petrelli é cumprimentado pelo então senador Lomanto Jr. na presença do ministro das comunicações, Adolfo Matos." style="width:100%; border-radius:8px;">
                            <div class="historia-legenda mt-2" style="font-size:12px; color:#888;">
                                1980, Mário Petrelli é cumprimentado pelo então senador Lomanto Jr. na presença do ministro das comunicações, Adolfo Matos.
                            </div>
                            <div class="historia-selo" style="position:absolute; left:16px; bottom:32px; background:#009e6d; color:#fff; border-radius:24px 24px 0 24px; padding:12px 24px; font-weight:600; font-size:18px;">
                                O Paraná é o <span style="font-weight:700;">nosso negócio!</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h2 style="font-weight:700; font-size:2rem;">Nossa história como Rede Independência de Comunicação <span style="color:#2a7de1; font-weight:700;">começou há 35 anos.</span></h2>
                        <p style="margin-top:16px; font-size:1.1rem; color:#444;">Em pouco mais de três décadas, conquistamos o status de maior Grupo de Comunicação do Sul do país.<br>
                        Nossa filosofia está na propagação da informação regional. Somos os maiores produtores de conteúdo regional do país, com mais de 700 horas por mês, programação ao vivo e cobertura estadual.<br>
                        Diariamente, produzimos conteúdos que alcançam 12 milhões de paranaenses por mês.</p>
                        <p style="font-weight:600; color:#222;">Seguimos crescendo, mas algo permanece imutável: nossa paixão incondicional pelo Paraná.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="institucional-citacao-content">
            <div class="container">
                <div class="row align-items-center institucional-citacao-main" style="background: linear-gradient(90deg, #2176d2 0%, #2bb673 100%); border-radius: 20px; padding: 2.5rem 2rem;">
                    <div class="col-md-7 institucional-citacao-texto text-white">
                        <div class="institucional-citacao-aspas" style="font-size:2.5rem; opacity:0.25; margin-bottom:0.5rem;">&#10077;</div>
                        <h2 style="font-size:1.7rem; font-weight:700; margin-bottom:1rem; color:#fff;">Grupo RIC,<br>do Paraná para o mundo.</h2>
                        <p style="font-size:1.1rem; color:#eaf6fa; margin-bottom:1.5rem;">A evolução constante faz parte de quem nós somos. Porque nós somos assim. Em nossa conduta. Em nossa rotina. Em nossos resultados. Investimos constantemente em conteúdo de informação, em entretenimento e em tecnologia para estarmos cada vez mais próximos da nossa audiência, acompanhando suas mudanças de hábitos e consumo a fim de gerarmos a melhor experiência para nossas marcas e anunciantes.</p>
                        <div style="font-weight:700; color:#fff; font-size:1.1rem;">Leonardo Petrelli <span style="font-weight:400; color:#d0f0e0;">CEO GrupoRIC</span></div>
                    </div>
                    <div class="col-md-5 institucional-citacao-foto text-center">
                        <img src="assets/img/leonardo-petrelli.jpg" alt="Leonardo Petrelli CEO GrupoRIC" class="img-fluid" style="max-width:320px; border-radius:18px; box-shadow:0 2px 16px rgba(0,0,0,0.10);">
                    </div>
                </div>
            </div>
        </section>

        <section class="historia-blue">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="historia-blue-titulo">HOMENAGEM AO FUNDADOR</div>
                        <blockquote class="historia-blue-citacao">
                            "Sempre imaginei a comunicação como arma da sociedade, como defesa da cidadania, como defesa dos poderes, do empresariado, do povo, numa organização sadia."
                        </blockquote>
                        <div class="historia-blue-autor">Mário Petrelli</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="historia-textos">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="historia-textos-img-box" style="background: linear-gradient(90deg, #2176d2 0%, #2bb673 100%); border-radius: 18px; padding: 8px; max-width: 600px; margin: 0 auto;">
                            <img src="assets/img/mario-petrelli.jpg" alt="Dr. Mário Petrelli" class="img-fluid" style="border-radius: 14px; width:100%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <p>Natural de Florianópolis, Dr. Mário Petrelli mudou-se aos 15 anos de idade para Curitiba, onde se formou bacharel em Direito pela UFPR (Universidade Federal do Paraná), em 1959.<br>
                        Com um temperamento comunicativo, social e criativo, cultivou desde jovem um grande interesse pela política, pela história e pelo desenvolvimento social.<br>
                        Antes mesmo de encerrar a graduação, iniciou sua carreira em comunicação como repórter de política dos jornais "O Dia"</p>
                    </div>
                    <div class="col-md-6">
                        <p>e "A Tarde", de Curitiba. Tornou-se executivo de uma empresa de seguros, ramo em que também foi muito bem-sucedido. Anos mais tarde viria a tornar-se empresário de rádio, televisão e jornal, consagrando-se como um ativo empreendedor do ramo, no Paraná e em Santa Catarina.<br>
                        Respeitado por políticos, empresários e cidadãos de todo o país, Mário Petrelli era um defensor ferrenho da comunicação. E de fato, com sua vasta trajetória, deixou um legado para todos nós.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="historia-video">
            <div class="historia-video-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap historia-video-content">
                        <div class="historia-video-logo me-md-4 mb-3 mb-md-0">
                            <img src="assets/img/ric-logo-white.svg" alt="Grupo Ric">
                        </div>
                        <div class="historia-video-text text-white">
                            Por meio de todos os nossos produtos distribuídos em diversos canais somos <strong>o grupo de comunicação que mais impacta</strong> diferentes perfis de público no Paraná.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="historico-logos">
            <div class="historico-logos-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="historico-logos-list d-flex justify-content-center align-items-center flex-wrap">
                                <img src="assets/img/logos/ric-tv.png" alt="RIC TV" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/record.png" alt="Record" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/jpfm.png" alt="JP FM" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/jpnews.png" alt="JP News" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/ric-com-br.png" alt="RIC.com.br" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/topview.png" alt="TopView" class="historico-logo mx-3 my-2">
                                <img src="assets/img/logos/instituto-ric.png" alt="Instituto RIC" class="historico-logo mx-3 my-2">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <a href="/ric/assets/lorem-ipsum.pdf" class="btn btn-download d-inline-flex align-items-center" data-fancybox data-type="iframe">
                                Veja Nossa Apresentação Institucional
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ms-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sessão Ric Talks/Insights -->
        <?php include_once 'components/blog.php'; ?>
        
        <div class="divisor"></div>

        <?php include_once 'components/footer.php'; ?>
    </main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    
    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>
</html>