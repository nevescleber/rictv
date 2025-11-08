<!-- Popup Mídia Kit -->
<div id="popup-midia-kit" class="popup-overlay">
    <div class="popup-container">
        <button class="popup-close" aria-label="Fechar popup">&times;</button>
        
        <div class="popup-content">
            <!-- Lado Esquerdo - Imagem -->
            <div class="popup-image">
                <!--<div class="popup-logos">
                    <div class="logo-ric">
                        <span class="ric-tv">RIC tv</span>
                        <span class="ric-regiao">LONDRINA E REGIÃO | CANAL 9.1</span>
                    </div>
                    <div class="logo-record">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-record.svg" alt="Record">
                    </div>
                </div>
                <h2 class="popup-title">MÍDIA KIT</h2>
                <div class="popup-year">2025</div>-->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01_Midia.jpg" alt="Mídia Kit" class="popup-bg-image">
            </div>

            <!-- Lado Direito - Formulário -->
            <div class="popup-form">
                <h3 class="form-title">Preencha o formulário abaixo para ter acesso ao Mídia Kit</h3>
                
                <!-- Contact Form 7 - Substitua pelo ID do seu formulário -->
                <div class="midia-kit-form">
                    <?php 
                    // Você precisará criar um formulário no Contact Form 7 e usar o ID dele aqui
                    echo do_shortcode('[contact-form-7 id="1ec395f" title="Formulário Popup Midia Kit"]'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Variável global para armazenar a URL do PDF
let midiaKitPdfUrl = '';

// Abrir popup
function openPopupMidiaKit(pdfUrl) {
    console.log('openPopupMidiaKit chamado com URL:', pdfUrl);
    
    // Armazena a URL do PDF
    if (pdfUrl) {
        midiaKitPdfUrl = pdfUrl;
    }
    
    const popup = document.getElementById('popup-midia-kit');
    if (popup) {
        popup.classList.add('active');
        document.body.style.overflow = 'hidden';
        console.log('Popup aberto com sucesso');
    } else {
        console.error('Elemento popup-midia-kit não encontrado!');
    }
}

// Fechar popup
function closePopupMidiaKit() {
    document.getElementById('popup-midia-kit').classList.remove('active');
    document.body.style.overflow = '';
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    const popup = document.getElementById('popup-midia-kit');
    const closeBtn = popup.querySelector('.popup-close');
    const overlay = popup;

    // Fechar ao clicar no X
    closeBtn.addEventListener('click', closePopupMidiaKit);

    // Fechar ao clicar fora do popup
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            closePopupMidiaKit();
        }
    });

    // Fechar com ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && popup.classList.contains('active')) {
            closePopupMidiaKit();
        }
    });

    // Contact Form 7 - Evento de envio bem-sucedido
    document.addEventListener('wpcf7mailsent', function(event) {
        // Verifica se é o formulário do popup
        if (event.detail.contactFormId && midiaKitPdfUrl) {
            // Aguarda 1 segundo para mostrar a mensagem de sucesso
            setTimeout(function() {
                // Faz o download do PDF
                const link = document.createElement('a');
                link.href = midiaKitPdfUrl;
                link.target = '_blank';
                link.download = 'midia-kit.pdf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                // Fecha o popup após mais 1 segundo
                setTimeout(function() {
                    closePopupMidiaKit();
                    // Limpa a URL do PDF
                    midiaKitPdfUrl = '';
                }, 1000);
            }, 1000);
        }
    }, false);

    // Contact Form 7 - Evento de erro
    document.addEventListener('wpcf7invalid', function(event) {
        console.log('Formulário com erros de validação');
    }, false);

    // Contact Form 7 - Evento de falha no envio
    document.addEventListener('wpcf7mailfailed', function(event) {
        console.log('Falha ao enviar o formulário');
    }, false);
});
</script>
