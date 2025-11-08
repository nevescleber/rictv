<?php 
/*
Template Name: Instituto RIC
*/
?>

<?php get_header(); ?>

<div class="banners">
    <div class="banner-content">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instituto-ric-novo.png" alt="RIC TV">
        <?php endif; ?>
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--<h1 class="text-bigger"><?php echo get_the_title(); ?></h1>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="instituto-ric-content">
    <div class="container">
        <div class="row align-items-center instituto-ric-main">
            <div class="col-md-6 instituto-ric-texto">
                <?php 
                $secao_1_titulo = get_field('secao_1_titulo');
                $secao_1_descricao = get_field('secao_1_descricao');
                if( $secao_1_titulo || $secao_1_descricao ): ?>
                    <div class="content">
                        <?php if( $secao_1_titulo ): ?>
                            <h2 class="text-medium-big"><?php echo $secao_1_titulo; ?></h2>
                        <?php endif; ?>
                        <?php if( $secao_1_descricao ): 
                            ?>
                            <p class="text-medium"><?php echo $secao_1_descricao; ?></p>
                        <?php 
                        endif; ?>
                    </div>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 instituto-ric-imagem">
                <?php 
                $secao_1_imagem = get_field('secao_1_imagem');
                if( $secao_1_imagem ): ?>
                    <img src="<?php echo esc_url($secao_1_imagem); ?>" alt="Instituto Ric" class="img-fluid" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-instituto-01.jpg" alt="Instituto Ric" class="img-fluid" />
                <?php endif; ?>
            </div>
        </div>

        <div class="row instituto-ric-green align-items-center">
            <div class="col-md-4 col-left">
                <div class="img-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-elemento-azul-pequeno.png" alt="1987" class="timeline-image">
                </div>

                <?php 
                $secao_2_imagem = get_field('secao_2_imagem');
                if( $secao_2_imagem ): ?>
                    <img src="<?php echo esc_url($secao_2_imagem); ?>" alt="Instituto Ric Logo" class="instituto-ric-green-logo mb-3" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-acordo.png" alt="Instituto Ric Logo" class="instituto-ric-green-logo mb-3" />
                <?php endif; ?>
                
                <?php 
                $secao_2_texto = get_field('secao_2_texto');
                if( $secao_2_texto ): ?>
                    <p class="text-medium-big">
                        <?php echo $secao_2_texto; ?>
                    </p>
                <?php else: ?>
                    <p class="text-medium-big">
                        De acordo com sua essência, o Instituto Ric acredita que
                    </p>
                <?php endif; ?>
            </div>
            <div class="col-md-8 col-right">
                <div class="instituto-ric-green-quote">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png" alt="Instituto Ric Logo" class="img-fluid" />
                </div>
                
                <?php 
                $secao_2_descricao = get_field('secao_2_descricao');
                if( $secao_2_descricao ): ?>
                    <p class="text-medium-big"><strong><?php echo $secao_2_descricao; ?></strong></p>
                <?php else: ?>
                    <p class="text-medium-big"><strong>Informar, comunicar, promover campanhas e criar sinergia entre entidades afins podem ser formas relevantes de conscientizar a sociedade sobre as necessidades do terceiro setor e das comunidades.</strong></p>
                <?php endif; ?>

                <div class="img-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/frame-01.png" alt="1987" class="timeline-image">
                </div>
            </div>
        </div>

        <?php 
        $secao_2_texto_2 = get_field('secao_2_texto_2');
        if( $secao_2_texto_2 ): ?>
            <p class="text-medium missao">
                <?php echo $secao_2_texto_2; ?>
            </p>
        <?php else: ?>
            <p class="text-medium missao">
                Através das plataformas de comunicação do Grupo Ric, o <strong>Instituto Ric proporciona visibilidade</strong> e <strong>promove a compreensão dos valores dessa missão, inspirando mudanças e aproximando a sociedade das ações realizadas para a comunidade.</strong>
            </p>
        <?php endif; ?>
    </div>
</section>

<section class="instituto-ric-diretoria">
    <div class="container">
        <h2 class="text-big text-white">Nossa Diretoria</h2>
        <div class="row justify-content-center">
            <?php if( have_rows('diretoria') ): ?>
                <?php while( have_rows('diretoria') ): the_row(); 
                    $diretoria_imagem = get_sub_field('diretoria_imagem');
                    $diretoria_nome = get_sub_field('diretoria_nome');
                    $diretoria_funcao = get_sub_field('diretoria_funcao');
                ?>
                    <div class="col-md-3 col-12 mb-4">
                        <div class="diretoria-card">
                            <?php if( $diretoria_imagem ): ?>
                                <img src="<?php echo esc_url($diretoria_imagem); ?>" alt="<?php echo esc_attr($diretoria_nome); ?>" class="diretoria-foto">
                            <?php endif; ?>
                            <div class="diretoria-badge">
                                <?php if( $diretoria_nome ): ?>
                                    <p class="text-medium"><?php echo esc_html($diretoria_nome); ?></p>
                                <?php endif; ?>
                                <?php if( $diretoria_funcao ): ?>
                                    <p class="text-small"><?php echo esc_html($diretoria_funcao); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="instituto-ric-minuto">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <p class="instituto-ric-minuto-divisor"></p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-12 col-left instituto-ric-minuto-imagens">
                <div class="minuto-grid">
                    <div class="minuto-img minuto-img-grande">
                        <?php 
                        $secao_4_imagem_esquerda = get_field('secao_4_imagem_esquerda');
                        if( $secao_4_imagem_esquerda ): ?>
                            <img src="<?php echo esc_url($secao_4_imagem_esquerda); ?>" alt="Minuto do Bem" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-01.png" alt="Crianças felizes" />
                        <?php endif; ?>
                    </div>
                    <div class="minuto-img minuto-img-menor">
                        <?php 
                        $secao_4_imagem_topo = get_field('secao_4_imagem_topo');
                        if( $secao_4_imagem_topo ): ?>
                            <img src="<?php echo esc_url($secao_4_imagem_topo); ?>" alt="Minuto do Bem" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-02.png" alt="Mãos unidas" />
                        <?php endif; ?>
                    </div>
                    <div class="minuto-img minuto-img-menor ultima-img">
                        <?php 
                        $secao_4_imagem_rodape = get_field('secao_4_imagem_rodape');
                        if( $secao_4_imagem_rodape ): ?>
                            <img src="<?php echo esc_url($secao_4_imagem_rodape); ?>" alt="Minuto do Bem" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-minuto-03.png" alt="Logo Minuto do Bem" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-right">
                <?php 
                $secao_4_titulo = get_field('secao_4_titulo');
                if( $secao_4_titulo ): ?>
                    <h2 class="text-medium-big"><?php echo $secao_4_titulo; ?></h2>
                <?php else: ?>
                    <h2 class="text-medium-big"><span class="azul">Minuto do Bem:</span>
                        <br>Vozes que Transformam Vidas
                    </h2>
                <?php endif; ?>
                
                <?php 
                $secao_4_descricao = get_field('secao_4_descricao');
                if( $secao_4_descricao ): 
                    ?>
                    <div class="content">
                        <?php echo $secao_4_descricao; ?>
                    </div>
                    <?php 
                else: ?>
                    <p class="text-small"><strong>O projeto Minuto do Bem</strong> destaca o trabalho de organizações sociais, constituindo-se como uma ferramenta poderosa para ampliar a visibilidade e o impacto dessas entidades. Ao documentar e compartilhar suas atividades e conquistas, informamos sobre questões sociais importantes e demonstramos o impacto tangível do trabalho dessas organizações.</p>
                    <p class="text-small">Esses vídeos têm o potencial de inspirar outras pessoas a se envolverem e apoiarem as iniciativas das organizações sociais, promovendo uma maior compreensão e empatia em relação às comunidades atendidas, e incentivando a colaboração e a mudança positiva na sociedade.</p>
                    <p class="text-small">Além disso, ao serem traduzidos para Libras, reforçam nosso compromisso com a inclusão, igualdade e respeito pela diversidade. Esse aspecto é fundamental para a construção de uma sociedade mais justa e acessível para todos, onde cada indivíduo, independentemente de suas habilidades auditivas, possa participar plenamente e contribuir para o bem comum.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-participar-do-minuto">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-left">
                <?php 
                $secao_5_texto = get_field('secao_5_texto');
                if( $secao_5_texto ): ?>
                    <p class="text-medium"><?php echo $secao_5_texto; ?></p>
                <?php else: ?>
                    <p class="text-medium">
                        Se a sua instituição deseja participar do projeto, entre em contato conosco pelo email
                    </p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-right text-center">
                <?php 
                $secao_5_email = get_field('secao_5_email');
                if( $secao_5_email ): ?>
                    <a href="mailto:<?php echo $secao_5_email; ?>" class="text-medium-big"><?php echo $secao_5_email; ?></a>
                <?php else: ?>
                    <a href="mailto:institutoric@gruporic.com.br" class="text-medium-big">institutoric@gruporic.com.br</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-projetos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                $secao_6_titulo = get_field('secao_6_titulo');
                if( $secao_6_titulo ): ?>
                    <h2 class="text-big"><?php echo $secao_6_titulo; ?></h2>
                <?php else: ?>
                    <h2 class="text-big">Juntos nós podemos conquistar</h2>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="objetivos-lista">
                    <?php if( have_rows('secao_6_conquista') ): ?>
                        <?php 
                        $numero = 1;
                        while( have_rows('secao_6_conquista') ): the_row(); 
                            $conquista_icone = get_sub_field('conquista_icone');
                            $conquista_titulo = get_sub_field('conquista_titulo');
                        ?>
                            <div class="objetivo-box">
                                <div class="objetivo-numero"><?php echo $numero; ?></div>
                                <?php if( $conquista_icone ): ?>
                                    <div class="objetivo-icone"><img src="<?php echo esc_url($conquista_icone); ?>" alt="<?php echo esc_attr($conquista_titulo); ?>" /></div>
                                <?php endif; ?>
                                <?php if( $conquista_titulo ): ?>
                                    <div class="objetivo-titulo text-medium"><?php echo $conquista_titulo; ?></div>
                                <?php endif; ?>
                            </div>
                        <?php 
                        $numero++;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instituto-ric-recicla">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-stretch flex-wrap">
            <div class="col-md-6 d-none d-md-block ricicla-img-col">
                <?php 
                $secao_7_imagem_esquerda = get_field('secao_7_imagem_esquerda');
                if( $secao_7_imagem_esquerda ): ?>
                    <img src="<?php echo esc_url($secao_7_imagem_esquerda); ?>" alt="RICcicla" class="ricicla-img" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-recicla.jpg" alt="RICcicla" class="ricicla-img" />
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-12 d-flex flex-column justify-content-center align-items-start py-5 px-4 ricicla-text-col">
                <?php 
                $secao_7_logotipo = get_field('secao_7_logotipo');
                if( $secao_7_logotipo ): ?>
                    <img src="<?php echo esc_url($secao_7_logotipo); ?>" alt="RICcicla" class="logo-recicla" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-recicla.png" alt="RICcicla" class="logo-recicla" />
                <?php endif; ?>
                <?php 
                $secao_7_descricao = get_field('secao_7_descricao');
                if( $secao_7_descricao ): ?>
                    <p class="text-medium"><?php echo $secao_7_descricao; ?></p>
                <?php else: ?>
                    <p class="text-medium">
                    O projeto RICicla reflete um compromisso substancial com a sustentabilidade e a preservação ambiental. Ao adotarmos práticas de reciclagem e gestão adequada de resíduos, estamos reduzindo nossa pegada de carbono e contribuindo para a conservação dos recursos naturais. Além disso, essa iniciativa tem um impacto positivo na comunidade, ao fomentar a consciência ambiental entre nossos colaboradores e parceiros.
                <?php endif; ?>
                <p class="text-medium bold">
                    Junte-se a nós na busca por um futuro inovador e mais humano para inúmeras vidas!
                </p>
            </div>
        </div>
    </div>
</section>

<div class="divisor"></div>


<?php get_footer(); ?>