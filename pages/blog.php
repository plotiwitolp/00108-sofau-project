<?php
/*
Template Name: Шаблон страницы Blog
*/
get_header();
?>
<div class="section blog">
    <div class="top-banner">
        <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('blog_title_h1'); ?></h1>
    </div>

    <div class="post-preview">
        <?php
        $post_per_page = get_field('blog_posts_per_page');
        $current_page = !empty($_GET['w_page']) ? $_GET['w_page'] : 1;
        $query = new WP_Query(array(
            'posts_per_page' =>  $post_per_page,
            'cat' => 3,
            'paged' => $current_page,
            'order' => 'ASC'
        ));
        $blogs = get_posts($query);

        if ($blogs) {
            while ($query->have_posts()) : $query->the_post();
                setup_postdata($post); ?>
                <div class="post-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
                    <div class="post-preview__item-pic">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('blog_thumb_img'); ?>" alt="thumbnails-post">
                        </a>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-preview__item-h2"> <?= get_the_title(); ?></h2>
                    </a>
                    <div class="post-preview__item-date"><?= get_the_date(); ?></div>
                </div>
        <?php
            endwhile;
        }
        ?>
    </div>

    <div class="pagination">
        <div class="pagination-wrap">
            <?
            echo paginate_links(array(
                'base' => site_url() . '/blog\/' . '%_%',
                'format' => '?w_page=%#%',
                'total' => $query->max_num_pages,
                'current' => $current_page,
                'prev_text'    => __('<div class="pagination__prev"></div>'),
                'next_text'    => __('<div class="pagination__next"></div>'),
                'before_page_number' => __('<div class="pagination__page-item"><span>'),
                'after_page_number' => __('</span></div>'),
            ));
            wp_reset_postdata(); ?>
        </div>
    </div>

    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-blog-1">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-1.svg" alt="bright-spot-blog-1">
        </div>
    </div>

    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

    <!-- bright-spot -->
    <div class="bright-spot bright-spot-blog-2">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-2.svg" alt="bright-spot-blog-2">
    </div>
</div>
<?php get_footer(); ?>