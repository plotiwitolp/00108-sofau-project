<?php
/*
 * Template Name: Шаблон Portfolio S
 * Template Post Type: post
 */

get_header();
?>
<div class="section portfolio-tmpl-s">

    <!-- top-banner -->
    <section>
        <div class="top-banner-info">
            <img class="desk_img" src="<?php the_field('portfolio_s_top_banner_desk'); ?>" alt="The-snow-fable">
            <img class="mob_img" src="<?php the_field('portfolio_s_top_banner_mob'); ?>" alt="The-snow-fable_mob">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php single_post_title(); ?></h1>
            <div class="top-banner-info__wrap">
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title"><?php the_field('portfolio_s_block_on_banner_title_1'); ?></span>
                    <span class="top-banner-info__body"><?php the_field('portfolio_s_block_on_banner_text_1'); ?></span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title"><?php the_field('portfolio_s_block_on_banner_title_2'); ?></span>
                    <span class="top-banner-info__body"><?php the_field('portfolio_s_block_on_banner_text_2'); ?></span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title"><?php the_field('portfolio_s_block_on_banner_title_3'); ?></span>
                    <span class="top-banner-info__body"><?php the_field('portfolio_s_block_on_banner_text_3'); ?></span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title"><?php the_field('portfolio_s_block_on_banner_title_4'); ?></span>
                    <span class="top-banner-info__body"><?php the_field('portfolio_s_block_on_banner_text_4'); ?> </span>
                </div>
            </div>
        </div>
    </section>


    <!-- portfolio-banner -->
    <div class="portfolio-banner">
        <div class="portfolio-banner_img-wrap">
            <img src="<?php the_field('portfolio_s_main_banner'); ?>" alt="main_banner">
        </div>
    </div>


    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-portfolio-top">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/bright-spot-portfolio-top.svg" alt="bright-spot-portfolio-top">
        </div>
    </div>


    <!-- h2-info-two Task & Level design & interface -->
    <section class="h2-info">
        <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <h2><?php the_field('portfolio_s_block_of_two_first_title_1'); ?></h2>
            <div class="h2-info__body">
                <p>
                    <?php the_field('portfolio_s_block_of_two_first_text_1'); ?>
                </p>
            </div>
        </div>
        <div class="h2-info__item wow animate__fadeInRight" data-wow-duration="500ms">
            <h2><?php the_field('portfolio_s_block_of_two_first_title_2'); ?></h2>
            <div class="h2-info__body">
                <p>
                    <?php the_field('portfolio_s_block_of_two_first_text_2'); ?>
                </p>
            </div>
        </div>
    </section>


    <!-- works-gallery Task & Level design & interface -->
    <div class="works-gallery gallery_1">
        <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_1'); ?>" alt="portfolio-our-works-1">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_1'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_1'); ?>" alt="portfolio-our-works-1_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_2'); ?>" alt="portfolio-our-works-2">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_2'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_2'); ?>" alt="portfolio-our-works-2_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_3'); ?>" alt="portfolio-our-works-3">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_3'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_3'); ?>" alt="portfolio-our-works-3_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomLeft" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_4'); ?>" alt="portfolio-our-works-4">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_4'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_4'); ?>" alt="portfolio-our-works-4_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomLeft" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_5'); ?>" alt="portfolio-our-works-5">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_5'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_5'); ?>" alt="portfolio-our-works-1_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInUp" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_6'); ?>" alt="portfolio-our-works-6">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_6'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_6'); ?>" alt="portfolio-our-works-2_mob">
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomRight" data-wow-duration="500ms">
            <img class="desk_img full_for_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_desk_7'); ?>" alt="portfolio-our-works-7">
            <img class="full_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_full_7'); ?>" alt="portfolio-our-works-full">
            <img class="mob_img" src="<?php the_field('portfolio_s_gallery_first_of_seven_picture_mob_7'); ?>" alt="portfolio-our-works-3_mob">
        </div>
    </div>


    <!-- Similar projects -->
    <section class="similar-projects">
        <h2><?php the_field('portfolio_s_title_of_similar_projects'); ?></h2>
        <div class="project-preview">
            <?php
            global $post;
            $tags = wp_get_post_tags($post->ID);
            $tag_ids = array();
            foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args = array(
                'tag__in' => $tag_ids,
                'orderby' => 'rand', // случайный подбор
                'ignore_sticky_posts' => 1,
                'post__not_in' => array($post->ID),
                'showposts' => 3,
                'post_type' => 'any'
            );
            $my_query = new wp_query($args);
            $portfolio = get_posts($my_query);

            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
            <?php
                endwhile;
            }
            ?>
        </div>
    </section>


    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

</div>

<?php get_footer(); ?>