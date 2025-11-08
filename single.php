<?php get_header(); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Pegar categorias do post
            $post_categories = get_the_category();
            $category_names = array();
            
            foreach ($post_categories as $cat) {
                if ($cat->cat_ID != 1) { // Exclui categoria "Uncategorized"
                    $category_names[] = $cat->name;
                }
            }
            
            // URLs para compartilhamento
            $post_url = urlencode(get_permalink());
            $post_title = urlencode(get_the_title());
            
            // Links de compartilhamento
            $facebook_share = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
            $linkedin_share = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $post_url;
            $twitter_share = 'https://twitter.com/intent/tweet?url=' . $post_url . '&text=' . $post_title;
    ?>

    <div class="banners">
        <div class="banner-static">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-ric.jpg" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php if (!empty($category_names)) : ?>
                                <?php foreach ($category_names as $cat_name) : ?>
                                    <div class="tag-<?php echo esc_attr(strtolower(str_replace(' ', '-', $cat_name))); ?> text-medium">
                                        <?php echo esc_html($cat_name); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="titulo text-medium-big">
                                <?php the_title(); ?>
                            </div>
                            <div class="meta">
                                <span class="data text-medium"><?php echo get_the_date('j \d\e F \d\e Y'); ?></span> |
                                <span class="autor text-medium">Por <?php echo get_the_author(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-inner-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-row">
                        <div class="share-icons">
                            <a href="<?php echo esc_url($facebook_share); ?>" title="Compartilhar no Facebook" target="_blank" rel="noopener noreferrer">
                                <span class="share-icon-circle">
                                    <svg width="20" height="20" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                                    </svg>
                                </span>
                            </a>
                            <a href="<?php echo esc_url($linkedin_share); ?>" title="Compartilhar no LinkedIn" target="_blank" rel="noopener noreferrer">
                                <span class="share-icon-circle">
                                    <svg width="20" height="20" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z"/>
                                    </svg>
                                </span>
                            </a>
                            <a href="<?php echo esc_url($twitter_share); ?>" title="Compartilhar no X" target="_blank" rel="noopener noreferrer">
                                <span class="share-icon-circle">
                                    <svg width="20" height="20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="content-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        endwhile;
    endif;
    ?>

    <section class="blog-inner-related">
        <div class="container">
            <div class="related-header" style="display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
                <h2 class="related-title text-big" style="margin-bottom: 0;">Veja Também</h2>
                <a href="<?php echo home_url('/blog'); ?>" class="text-medium btn btn-outline-primary related-btn">Mais Notícias</a>
            </div>
            <div class="row blog-posts-grid">
                <?php
                // Query para buscar 3 posts relacionados, excluindo o post atual
                $current_post_id = get_the_ID();
                $related_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post__not_in' => array($current_post_id), // Exclui o post atual
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($related_posts->have_posts()) :
                    while ($related_posts->have_posts()) : $related_posts->the_post();
                        // Pegar categorias do post
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-inner.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="blog-post-content">
                        <?php if (!empty($category_names)) : ?>
                        <div class="blog-post-tags">
                            <?php foreach ($category_names as $cat_name) : ?>
                                <span class="blog-post-tag <?php echo esc_attr(strtolower(str_replace(' ', '-', $cat_name))); ?> text-medium">
                                    <?php echo esc_html($cat_name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <h3 class="blog-post-title text-medium-big"><?php the_title(); ?></h3>
                        <span class="blog-post-date text-medium"><?php echo get_the_date('j \d\e F \d\e Y'); ?></span>
                    </div>
                </a>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <div class="divisor"></div>

<?php get_footer(); ?>