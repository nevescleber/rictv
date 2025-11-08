<?php 
/*
Template Name: Principios Editoriais
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-principios.png" alt="RIC TV">
            <?php endif; ?>
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

    <section class="principios">
        <div class="principios-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ric-fundo.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-big text-white">
                        <?php 
                        $conteudo_texto_esquerdo = get_field('conteudo_texto_esquerdo');
                        if ($conteudo_texto_esquerdo): 
                        ?>
                            <?php echo $conteudo_texto_esquerdo; ?>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="col-md-6">
                    <div class="content text-medium text-white">
                        <?php 
                        $conteudo_descricao_direita = get_field('conteudo_descricao_direita');
                        if ($conteudo_descricao_direita): 
                        ?>
                            <?php echo $conteudo_descricao_direita; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="conteudos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    $conteudo_imagem = get_field('conteudo_imagem');
                    if ($conteudo_imagem): 
                    ?>
                        <img src="<?php echo esc_url($conteudo_imagem); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="content text-medium">
                        <?php 
                        $conteudo_descricao_imagem = get_field('conteudo_descricao_imagem');
                        if ($conteudo_descricao_imagem): 
                        ?>
                            <?php echo $conteudo_descricao_imagem; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>