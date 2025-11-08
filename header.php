<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    if (is_front_page() || is_home()) {
        $page_title = 'Conheça e Anuncie no Grupo RIC | Mídias Kits, Projetos e mais';
    } else {
        $document_title = wp_get_document_title();
        $site_name = get_bloginfo('name');

        if ($site_name !== '') {
            $document_title = preg_replace(
                '/\s*[-|–—]\s*' . preg_quote($site_name, '/') . '$/u',
                '',
                $document_title
            );
        }

        $page_title = trim($document_title);

        if ($page_title === '') {
            $page_title = get_bloginfo('name');
        }
    }

    echo esc_html($page_title . ' - GRUPO RIC');
    ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/framework.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <?php
    $opcoes_pixels = get_field('opcoes_pixels', 'option');
    if (!empty($opcoes_pixels)) {
        echo $opcoes_pixels;
    }
    ?>

    <?php wp_head(); ?>

    <?php
    $opcoes_pixels_body = get_field('opcoes_pixels_body', 'option');
    if (!empty($opcoes_pixels_body)) {
        echo $opcoes_pixels_body;
    }
    ?>

    <style>
        html{
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<?php include 'components/menu.php'; ?>
    
    <main class="content">