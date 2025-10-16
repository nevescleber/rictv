<?php get_header(); ?>

    <div class="banners">
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-blog.jpg" alt="RIC TV">
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-big">Ric Talks</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="feature-blog">
        <div class="container">
            <?php
            // Buscar o último post publicado
            $latest_post = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            
            if ($latest_post->have_posts()) :
                while ($latest_post->have_posts()) : $latest_post->the_post();
                    // Pegar categorias do post
                    $post_categories = get_the_category();
                    $category_names = array();
                    
                    foreach ($post_categories as $cat) {
                        if ($cat->cat_ID != 1) { // Exclui categoria "Uncategorized"
                            $category_names[] = $cat->name;
                        }
                    }
            ?>
            <a href="<?php the_permalink(); ?>" class="blog-card">
                <div class="image-container">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-blog.png" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <div class="content">
                    <div class="tags">
                        <span class="text-medium tag new-post">Novo Post</span>
                        <?php foreach ($category_names as $cat_name) : ?>
                            <span class="text-medium tag <?php echo esc_attr(strtolower(str_replace(' ', '-', $cat_name))); ?>">
                                <?php echo esc_html($cat_name); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <h2 class="text-medium-big title"><?php the_title(); ?></h2>
                    <p class="description"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <div class="meta">
                        <div class="date">
                            <i class="far fa-calendar"></i>
                            <?php echo get_the_date('j \d\e F \d\e Y'); ?>
                        </div>
                        <div class="author">
                            <i class="far fa-user"></i>
                            <p class="text-small"><?php echo get_the_author(); ?></p>
                        </div>
                    </div>
                </div>
            </a>
            <?php 
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>

    <section class="blog-categories-section">
        <div class="container">
            <div class="blog-categories-swiper-wrapper">
                <button class="blog-categories-arrow blog-categories-arrow-prev" disabled>
                    <span>&larr;</span>
                </button>
                <div class="swiper blog-categories-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><button class="category active" data-category="all">Todas</button></div>
                        <?php
                        $categories = get_categories(array(
                            'hide_empty' => false,
                            'exclude' => array(1) // Exclui categoria "Uncategorized"
                        ));
                        
                        foreach ($categories as $category) :
                        ?>
                        <div class="swiper-slide">
                            <button class="category" data-category="<?php echo esc_attr($category->slug); ?>">
                                <?php echo esc_html($category->name); ?>
                            </button>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="blog-categories-arrow blog-categories-arrow-next">
                    <span>&rarr;</span>
                </button>
            </div>
            <div class="blog-categories-divider"></div>
        </div>
    </section>

    <section class="blog-posts-section">
        <div class="container">
            <div class="row blog-posts-grid">
                <?php
                // Query para buscar posts
                $posts_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'post_status' => 'publish',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                ));
                
                if ($posts_query->have_posts()) :
                    while ($posts_query->have_posts()) : $posts_query->the_post();
                        $post_categories = get_the_category();
                        $category_slugs = array();
                        $category_names = array();
                        
                        foreach ($post_categories as $cat) {
                            if ($cat->cat_ID != 1) { // Exclui categoria "Uncategorized"
                                $category_slugs[] = $cat->slug;
                                $category_names[] = $cat->name;
                            }
                        }
                ?>
                <a href="<?php the_permalink(); ?>" class="blog-post-card" data-categories="<?php echo esc_attr(implode(' ', $category_slugs)); ?>">
                    <div class="blog-post-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-blog-01.png" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="blog-post-content">
                        <?php if (!empty($category_names)) : ?>
                        <div class="blog-post-tags">
                            <?php foreach ($category_names as $cat_name) : ?>
                                <span class="blog-post-tag <?php echo esc_attr(strtolower(str_replace(' ', '-', $cat_name))); ?>"><?php echo esc_html($cat_name); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <h3 class="blog-post-title"><?php the_title(); ?></h3>
                        <span class="blog-post-date"><?php echo get_the_date('j \d\e F \d\e Y'); ?></span>
                    </div>
                </a>
                <?php 
                    endwhile;
                else :
                ?>
                <div class="col-12">
                    <p>Nenhum post encontrado.</p>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($posts_query->max_num_pages > 1) : ?>
            <div class="row">
                <div class="col-12">
                    <div class="paginacao">
                        <?php
                        $current_page = max(1, get_query_var('paged'));
                        $total_pages = $posts_query->max_num_pages;
                        
                        // Página anterior
                        if ($current_page > 1) :
                        ?>
                            <a href="<?php echo get_pagenum_link($current_page - 1); ?>" class="pagina">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 1L1.5 6L6.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php
                        // Páginas numeradas
                        for ($i = 1; $i <= $total_pages; $i++) :
                            if ($i == $current_page) :
                        ?>
                            <button class="pagina active"><?php echo $i; ?></button>
                        <?php else : ?>
                            <a href="<?php echo get_pagenum_link($i); ?>" class="pagina"><?php echo $i; ?></a>
                        <?php 
                            endif;
                        endfor;
                        
                        // Próxima página
                        if ($current_page < $total_pages) :
                        ?>
                            <a href="<?php echo get_pagenum_link($current_page + 1); ?>" class="pagina next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1L6.5 6L1.5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>