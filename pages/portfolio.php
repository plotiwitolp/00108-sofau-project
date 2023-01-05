<?php
/*
Template Name: Шаблон страницы Portfolio
*/

get_header();
?>
<div class="section">
    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('portfolio_tittle_h1'); ?></h1>
        </div>
    </section>


    <section class="portfolio">
        <!-- tags -->
        <?php get_template_part('templates/tags-portfolio'); ?>

        <!-- project-preview -->
        <div class="project-preview">
            <?php
            global $post;
            $porfolio_post_per_page = get_field('porfolio_post_per_page');
            $current_page = !empty($_GET['w_page']) ? $_GET['w_page'] : 1;
            $query = new WP_Query(array(
                'posts_per_page' => $porfolio_post_per_page,
                'cat' => 5,
                'paged' => $current_page,
                'tag' => $_GET['slug'],
                'order' => 'ASC'
            ));

            $portfolio = get_posts($query);

            if ($portfolio) {
                while ($query->have_posts()) : $query->the_post();
                    setup_postdata($post); ?>
                    <?php
                    if (has_tag($query->query['tag'])) { ?>
                        <div class="project-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
                            <a href="<?php the_permalink(); ?>">
                                <div class="project-preview__thumb">
                                    <img class="desk_img" src="<?php the_field('portfolio_thumb_img_desc'); ?>" alt="project-preview-thumb-1">
                                    <img class="mob_img" src="<?php the_field('portfolio_thumb_img_mob'); ?>" alt="project-preview-thumb-1_mob">
                                </div>
                            </a>
                            <div class="project-preview__desc-wrap">
                                <div class="project-preview__desc">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="project-preview__tag-wrap">
                                        <?php if ($post_tags = wp_get_post_tags($post->ID)) {
                                            foreach ($post_tags as $post_tag) {
                                                echo '<span class="project-preview__tag-item">' . $post_tag->name  . '</span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php
                endwhile;
            }
            ?>
        </div>

        <!-- pagination -->
        <div class="pagination">
            <div class="pagination-wrap">
                <?
                echo paginate_links(array(
                    'base' => site_url() . '/portfolio\/' . '%_%',
                    'format' => '?w_page=%#%',
                    'total' => $query->max_num_pages,
                    'current' => $current_page,
                    'prev_text'    => __('<div class="pagination__prev"></div>'),
                    'next_text'    => __('<div class="pagination__next"></div>'),
                    'before_page_number' => __('<div class="pagination__page-item"><span>'),
                    'after_page_number' => __('</span></div>'),
                ));
                ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <!-- bright-spot -->
        <div class="wrap">
            <div class="bright-spot bright-spot-blog-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-1.svg" alt="bright-spot-blog-1">
            </div>
        </div>
    </section>

    <!--  feedback form -->
    <div class="feedback-form__portfolio">
        <?php get_template_part('templates/feedback-form'); ?>
    </div>

    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-blog-bottom">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spots/bright-spot-portfolio-top.svg" alt="bright-spot-portfolio-top">
        </div>
    </div>

</div>
<?php get_footer(); ?>