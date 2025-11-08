<?php /* Template Name: Termos e Condições */ ?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-termos.jpg" alt="Termos e Condições">
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="termos-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    <div class="content-inner">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="divisor"></div>

<?php get_footer(); ?>