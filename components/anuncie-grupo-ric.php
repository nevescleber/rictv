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
                        <?php 
                        $opcao_grupo_ric_arquivo = get_field('opcao_grupo_ric_arquivo', 'option');
                        if ($opcao_grupo_ric_arquivo): 
                            $opcao_grupo_ric_arquivo = esc_url($opcao_grupo_ric_arquivo);
                        ?>
                            <button type="button" class="btn btn-success btn-lg px-4 py-3 anuncie-btn" onclick="event.preventDefault(); openPopupMidiaKit('<?php echo esc_js($opcao_grupo_ric_arquivo); ?>'); return false;">
                                Começar Agora
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ms-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/></svg>
                            </button>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once get_template_directory() . '/components/popup.php'; ?>