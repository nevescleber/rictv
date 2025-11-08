<section class="partners-slider">
    <div class="container container--big">
        <div class="row">
            <div class="col-12">
                <div class="swiper partners-swiper">
                    <div class="swiper-wrapper">
                        <?php if( have_rows('parceiros_lista') ): ?>
                            <?php while( have_rows('parceiros_lista') ): the_row(); 
                                $parceiro_imagem = get_sub_field('parceiro_imagem');
                            ?>
                                <?php if( $parceiro_imagem ): ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($parceiro_imagem); ?>" alt="Parceiro RIC">
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Navigation arrows - only visible on mobile -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>