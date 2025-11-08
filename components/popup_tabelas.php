<!-- Popup Mídia Kit -->
<div id="popup-tabelas-comerciais" class="popup-tabelas-overlay">
    <div class="popup-tabelas-container">
        <button class="popup-tabelas-close" aria-label="Fechar popup">&times;</button>
        <div class="popup-tabelas-content">
            <h2 class="popup-tabelas-title">Selecione os arquivos desejados</h2>

            <?php
            $tabelas_comerciais = get_field('tabelas_comerciais', 'option');

            if ($tabelas_comerciais) :
            ?>
                <div class="popup-tabelas-grid">
                    <?php foreach ($tabelas_comerciais as $tabela) :
                        $titulo = isset($tabela['tabela_titulo']) ? $tabela['tabela_titulo'] : '';
                        $arquivo = isset($tabela['tabela_arquivo']) ? $tabela['tabela_arquivo'] : '';

                        if (!$arquivo) {
                            continue;
                        }

                        $arquivo_url = esc_url($arquivo);
                        $arquivo_nome = $titulo ? esc_html($titulo) : 'Arquivo disponível';
                    ?>
                        <a href="<?php echo $arquivo_url; ?>" class="popup-tabelas-card" target="_blank" rel="noopener">
                            <div class="popup-tabelas-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                                </svg>
                            </div>
                            <div class="popup-tabelas-info">
                                <span class="popup-tabelas-name"><?php echo $arquivo_nome; ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p class="popup-tabelas-empty">Nenhum arquivo disponível no momento.</p>
            <?php endif; ?>
        </div>
    </div>
</div>