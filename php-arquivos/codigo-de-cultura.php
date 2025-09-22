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
<body class="codigo">
    <?php include 'components/menu.php'; ?>
    
    <main class="content">
        <div class="banners">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/bg-codigo-cultura.jpg" alt="RIC TV">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1>Código de Cultura</h1>
                                        <p>
                                            #SouRIC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="codigo-content">
            <img src="assets/img/bg-souric.png" alt="Background SouRIC" class="bg-souric-image">
            <div class="container">
                <div class="row codigo-hero align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                        <img src="assets/img/logo-souric.png" alt="#SouRIC" class="img-fluid">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="codigo-hero-text">
                            <p class="codigo-hero-desc">
                                Imagine um <span> ecossistema de comunicação onde inovação, ética e resultados caminham juntos</span> em todos os níveis
                            </p>
                            <h2 class="codigo-hero-title">
                                É exatamente isso que construímos para nosso futuro.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="codigo-pdf">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="pdf-viewer" style="position: relative; display: flex; flex-direction: column; align-items: center; background: #222; border-radius: 16px; padding: 2rem;">
                            <!-- Controles no topo, agora dentro do viewer -->
                            <div id="pdf-controls-top" style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1.5rem;">
                                <button id="prev_page_top" style="background: #0066B3; color: #fff; border: none; border-radius: 8px; padding: 0.4rem 1.2rem; font-size: 1.3rem; cursor: pointer; min-width: 36px;">&#8592;</button>
                                <span style="color: #fff; font-size: 1.1rem;">Página</span>
                                <input type="number" id="page_num_top" value="1" min="1" style="width: 48px; border-radius: 4px; border: 1px solid #ccc; padding: 0.2rem 0.5rem; text-align: center; font-size: 1.1rem;">
                                <span id="page_count_top" style="color: #fff; font-size: 1.1rem;">/ 1</span>
                                <button id="next_page_top" style="background: #1B9B54; color: #fff; border: none; border-radius: 8px; padding: 0.4rem 1.2rem; font-size: 1.3rem; cursor: pointer; min-width: 36px;">&#8594;</button>
                            </div>
                            <!-- Seta esquerda -->
                            <button id="side-prev-page" class="pdf-side-arrow" style="display: none; position: absolute; left: 0; top: 50%; transform: translateY(-50%); background: rgba(0,102,179,0.85); color: #fff; border: none; border-radius: 50%; width: 36px; height: 36px; font-size: 1.5rem; cursor: pointer; z-index: 10;">
                                &#8592;
                            </button>
                            <canvas id="pdf-canvas" style="max-width: 100%; height: auto; border-radius: 8px;"></canvas>
                            <!-- Seta direita -->
                            <button id="side-next-page" class="pdf-side-arrow" style="display: none; position: absolute; right: 0; top: 50%; transform: translateY(-50%); background: rgba(27,155,84,0.85); color: #fff; border: none; border-radius: 50%; width: 36px; height: 36px; font-size: 1.5rem; cursor: pointer; z-index: 10;">
                                &#8594;
                            </button>
                            <div id="pdf-controls" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                                <button id="prev_page" style="background: #0066B3; color: #fff; border: none; border-radius: 6px; padding: 0.4rem 1rem; font-size: 1.2rem; cursor: pointer; min-width: 36px;">&#8592;</button>
                                <span style="color: #fff; font-size: 1rem;">Página</span>
                                <input type="number" id="page_num" value="1" min="1" style="width: 48px; border-radius: 4px; border: 1px solid #ccc; padding: 0.2rem 0.5rem; text-align: center; font-size: 1rem;">
                                <span id="page_count" style="color: #fff; font-size: 1rem;">/ 1</span>
                                <button id="next_page" style="background: #1B9B54; color: #fff; border: none; border-radius: 6px; padding: 0.4rem 1rem; font-size: 1.2rem; cursor: pointer; min-width: 36px;">&#8594;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="codigo-download-btn text-center">
            <a href="assets/lorem-ipsum.pdf" download class="btn-buscar">Baixe o Código de Cultura aqui</a>
        </div>

        <section class="codigo-bottom">
            <img src="assets/img/bg-souric-footer.png" alt="Background SouRIC" class="">
        </section>
        
        <?php include_once 'components/footer.php'; ?>
    </main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
    const url = 'assets/lorem-ipsum.pdf'; // PDF de exemplo
    let pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 1.2,
        canvas = document.getElementById('pdf-canvas'),
        ctx = canvas.getContext('2d');

    function renderPage(num) {
        pageRendering = true;
        pdfDoc.getPage(num).then(function(page) {
            let viewport = page.getViewport({ scale: scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            let renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };
            let renderTask = page.render(renderContext);
            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
            });
        });
        // Atualiza todos os controles
        document.getElementById('page_num').value = num;
        document.getElementById('page_num_top').value = num;
        document.getElementById('page_count').textContent = '/ ' + pdfDoc.numPages;
        document.getElementById('page_count_top').textContent = '/ ' + pdfDoc.numPages;
    }

    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    function onPrevPage() {
        if (pageNum <= 1) return;
        pageNum--;
        queueRenderPage(pageNum);
    }
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) return;
        pageNum++;
        queueRenderPage(pageNum);
    }

    // Setas laterais
    document.getElementById('side-prev-page').addEventListener('click', onPrevPage);
    document.getElementById('side-next-page').addEventListener('click', onNextPage);
    // Controles abaixo
    document.getElementById('prev_page').addEventListener('click', onPrevPage);
    document.getElementById('next_page').addEventListener('click', function() { onNextPage(); });
    document.getElementById('page_num').addEventListener('change', function(e) {
        let val = parseInt(e.target.value);
        if (val >= 1 && val <= pdfDoc.numPages) {
            pageNum = val;
            queueRenderPage(pageNum);
        }
    });
    // Controles do topo
    document.getElementById('prev_page_top').addEventListener('click', onPrevPage);
    document.getElementById('next_page_top').addEventListener('click', function() { onNextPage(); });
    document.getElementById('page_num_top').addEventListener('change', function(e) {
        let val = parseInt(e.target.value);
        if (val >= 1 && val <= pdfDoc.numPages) {
            pageNum = val;
            queueRenderPage(pageNum);
        }
    });

    // Mostrar/ocultar setas laterais conforme largura da tela
    function updateSideArrows() {
        const left = document.getElementById('side-prev-page');
        const right = document.getElementById('side-next-page');
        if(window.innerWidth >= 992) {
            left.style.display = 'flex';
            right.style.display = 'flex';
        } else {
            left.style.display = 'none';
            right.style.display = 'none';
        }
    }
    window.addEventListener('resize', updateSideArrows);
    updateSideArrows();

    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = '/ ' + pdfDoc.numPages;
        document.getElementById('page_count_top').textContent = '/ ' + pdfDoc.numPages;
        renderPage(pageNum);
    });
    </script>
</body>
</html>