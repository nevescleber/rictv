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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook">
                            </a>
                            <a href="<?php echo esc_url($linkedin_share); ?>" title="Compartilhar no LinkedIn" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="LinkedIn">
                            </a>
                            <a href="<?php echo esc_url($twitter_share); ?>" title="Compartilhar no X" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/x.svg" alt="X">
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
                <a href="<?php echo home_url('/'); ?>" class="text-medium btn btn-outline-primary related-btn">Mais Notícias</a>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagem-blog-01.png" alt="<?php the_title(); ?>">
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