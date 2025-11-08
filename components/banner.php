<div class="banner-slider">
    <div class="swiper main-slider">
        <div class="swiper-wrapper">
            <?php if( have_rows('banners_lista') ): ?>
                <?php while( have_rows('banners_lista') ): the_row(); 
                    $banner_tipo = get_sub_field('banner_tipo');
                    $banner_imagem = get_sub_field('banner_imagem');
                    $banner_video = get_sub_field('banner_video');
                ?>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <!--<div class="container">
                                <div class="slide-text">
                                    // Adicione aqui campos ACF para textos se necessário
                                </div>
                            </div>-->
                        </div>
                        
                        <?php if( $banner_tipo == 'Imagem' && $banner_imagem ): ?>
                            <img src="<?php echo esc_url($banner_imagem); ?>" alt="Banner RIC">
                        <?php elseif( $banner_tipo == 'Video' && $banner_video ): ?>
                            <video autoplay muted loop playsinline>
                                <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4">
                                Seu navegador não suporta vídeos HTML5.
                            </video>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
        <div class="swiper-pagination-progress">
            <span class="swiper-pagination-progress-fill"></span>
        </div>
        
        <div class="slider-nav">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div> 