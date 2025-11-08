<?php 
/*
Template Name: Equipe Comercial
*/
?>

<?php get_header(); ?>

    <div class="banners">
        <div class="banner-content">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-equipe.png" alt="RIC TV">
            <?php endif; ?>
            <div class="banner-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-bigger">Equipe Comercial</h1>
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
                <div class="col-12">
                    <h2 class="text-big text-white">
                        Diretoria Geral
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe-comercial-diretoria">
        <div class="container">
            <div class="row">
                <?php if (have_rows('diretoria_pessoas')): ?>
                    <?php while (have_rows('diretoria_pessoas')): the_row(); ?>
                        <?php 
                        $imagem = get_sub_field('diretoria_imagem');
                        $nome = get_sub_field('diretoria_nome');
                        $funcao = get_sub_field('diretoria_funcao');
                        $descricao = get_sub_field('diretoria_descricao');
                        
                        // Se não tiver imagem, usa a imagem padrão
                        $imagem_url = $imagem ? esc_url($imagem) : get_template_directory_uri() . '/assets/img/sem-foto.png';
                        ?>
                        <div class="col-md-6">
                            <div class="equipe-comercial-diretoria-card">
                                <div class="card-image-container">
                                    <img src="<?php echo $imagem_url; ?>" alt="<?php echo esc_attr($nome); ?>">
                                    <div class="card-overlay">
                                        <?php if ($nome): ?>
                                            <h2 class="text-medium-big text-white">
                                                <?php echo str_replace(' ', '<br>', $nome); ?>
                                            </h2>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($funcao): ?>
                                        <div class="card-badge">
                                            <p class="text-small"><?php echo $funcao; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if ($descricao): ?>
                                    <div class="card-content">
                                        <p class="text-medium">
                                            <?php echo $descricao; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="equipe-comercial-nacional">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-big">
                        Diretoria Nacional
                    </h2>
                </div>
            </div>

            <div class="row">
                <?php if (have_rows('nacional_pessoas')): ?>
                    <?php while (have_rows('nacional_pessoas')): the_row(); ?>
                        <?php 
                        $imagem = get_sub_field('nacional_imagem');
                        $localidade = get_sub_field('nacional_localidade');
                        $nome = get_sub_field('nacional_nome');
                        $funcao = get_sub_field('nacional_funcao');
                        $telefone = get_sub_field('nacional_telefone');
                        $email = get_sub_field('nacional_email');
                        
                        // Se não tiver imagem, usa a imagem padrão
                        $imagem_url = $imagem ? esc_url($imagem) : get_template_directory_uri() . '/assets/img/sem-foto.png';
                        
                        // Verifica se tem telefone ou email para mostrar o botão
                        $has_contact = ($telefone || $email);
                        ?>
                        <div class="col-md-3">
                            <div class="equipe-comercial-nacional-card">
                                <?php if ($has_contact): ?>
                                    <button class="card-btn-more">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                <?php endif; ?>
                                <div class="card-image-wrapper">
                                    <img src="<?php echo $imagem_url; ?>" alt="<?php echo esc_attr($nome); ?>">
                                </div>
                                <div class="card-info">
                                    <?php if ($localidade): ?>
                                        <div class="card-tag"><?php echo esc_html($localidade); ?></div>
                                    <?php endif; ?>
                                    <?php if ($nome): ?>
                                        <h3 class="card-name"><?php echo esc_html($nome); ?></h3>
                                    <?php endif; ?>
                                    <?php if ($funcao): ?>
                                        <p class="card-position"><?php echo esc_html($funcao); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php if ($has_contact): ?>
                                    <div class="card-contact-info">
                                        <?php if ($telefone): ?>
                                            <div class="contact-item">
                                                <i class="fas fa-phone"></i>
                                                <span><?php echo esc_html($telefone); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($email): ?>
                                            <div class="contact-item">
                                                <i class="fas fa-envelope"></i>
                                                <span><?php echo esc_html($email); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if (have_rows('acionistas_pessoas')): ?>
        <section class="equipe-comercial-acionistas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-big">
                            Conselho de Acionistas
                        </h2>
                    </div>
                    <?php while (have_rows('acionistas_pessoas')): the_row(); ?>
                        <?php $acionista_nome = get_sub_field('acionistas_nome'); ?>
                        <?php if ($acionista_nome): ?>
                            <div class="col-md-6">
                                <p class="text-medium">
                                    <?php echo esc_html($acionista_nome); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <?php get_template_part('components/anuncie-grupo-ric'); ?>

<?php get_footer(); ?>