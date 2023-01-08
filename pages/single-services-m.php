<?php
/*
 * Template Name: Шаблон Services M
 * Template Post Type: post
 */
get_header();
?>
<div class="section">

    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_m_title_h1'); ?></h1>
        </div>
    </section>

    <div class="services">

        <!-- tags -->
        <?php get_template_part('templates/tags-services'); ?>

        <!-- services-banner -->
        <div class="services-banner">
            <img class="desk_img" src="<?php the_field('services_m_top_banner_desk'); ?>" alt="services-top-banner-1">
            <img class="mob_img" src="<?php the_field('services_m_top_banner_mob'); ?>" alt="services-top-banner_mob">
        </div>

        <!-- Game development services -->
        <div class="services-4-blocks services-4-blocks_row">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_m_title_after_top_banner_h2'); ?></h2>
            <div class="services-4-blocks__wrap">
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_m_block_of_4_parts_desk_pic_1'); ?>" alt="services-4-blocks-1">
                        <img class="mob_img" src="<?php the_field('services_m_block_of_4_parts_mob_pic_1'); ?>" alt="services-4-blocks-1_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_m_block_of_4_parts_title_1'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_m_block_of_4_parts_text_1'); ?>
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_m_block_of_4_parts_desk_pic_2'); ?>" alt="services-4-blocks-2">
                        <img class="mob_img" src="<?php the_field('services_m_block_of_4_parts_mob_pic_2'); ?>" alt="services-4-blocks-2_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_m_block_of_4_parts_title_2'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_m_block_of_4_parts_text_2'); ?>
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_m_block_of_4_parts_desk_pic_3'); ?>" alt="services-4-blocks-3">
                        <img class="mob_img" src="<?php the_field('services_m_block_of_4_parts_mob_pic_3'); ?>" alt="services-4-blocks-3_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_m_block_of_4_parts_title_3'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_m_block_of_4_parts_text_3'); ?>
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_m_block_of_4_parts_desk_pic_4'); ?>" alt="services-4-blocks-4">
                        <img class="mob_img" src="<?php the_field('services_m_block_of_4_parts_mob_pic_4'); ?>" alt="services-4-blocks-4_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_m_block_of_4_parts_title_4'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_m_block_of_4_parts_text_4'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- bright-spot -->
        <div class="wrap">
            <div class="bright-spot bright-spot-services-left">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/services/bright-spot-services-left.svg" alt="bright-spot-services-left">
            </div>
        </div>

        <!-- TECHNICAL EXPERTISE -->
        <section class="technical-exp">
            <h2><?php the_field('services_m_title_tech_h2'); ?></h2>
            <?php get_template_part('templates/technical-exp'); ?>
        </section>

        <!-- OUR WORKS -->
        <section class="our-works our-works_services">
            <div class="works-title">
                <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">
                    <?php the_field('services_m_title_h2'); ?>
                </h2>
            </div>
            <div class="works-gallery">
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_m_block_of_4_img_pic_desk_1'); ?>" alt="our_works-1">
                    <img class="full_img" src="<?php the_field('services_m_full_img_1'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_img_pic_mob_1'); ?>" alt="our_works-1">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_m_block_of_4_img_pic_desk_2'); ?>" alt="our_works-2">
                    <img class="full_img" src="<?php the_field('services_m_full_img_2'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_img_pic_mob_2'); ?>" alt="our_works-2">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_m_block_of_4_img_pic_desk_3'); ?>" alt="our_works-3">
                    <img class="full_img" src="<?php the_field('services_m_full_img_3'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_img_pic_mob_3'); ?>" alt="our_works-3">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_m_block_of_4_img_pic_desk_4'); ?>" alt="our_works-4">
                    <img class="full_img" src="<?php the_field('services_m_full_img_4'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_img_pic_mob_4'); ?>" alt="our_works-4">
                </div>
            </div>
            <span class="see-more-arrow our-works_services-arrow">
                <a href="<?php the_field('services_m_block_of_4_link_btn'); ?>">
                    <span><?php the_field('services_m_block_of_4_text_btn'); ?></span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
                </a>
            </span>
        </section>

        <!-- Unity development -->
        <section class="h2-info">
            <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
                <h2><?php the_field('services_m_block_of_1_parts_title'); ?></h2>
                <div class="h2-info__body">
                    <p>
                        <?php the_field('services_m_block_of_1_parts_text'); ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- services-4-blocks-thumb -->
        <div class="services-4-blocks-thumb">
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_m_block_of_4_2_parts_row_desk_pic_1'); ?>" alt="services-4-blocks-thumb-1">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_2_parts_row_mob_pic_1'); ?>" alt="services-4-blocks-thumb-1_mob">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_m_block_of_4_2_parts_row_title_1'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_m_block_of_4_2_parts_row_text_1'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_m_block_of_4_2_parts_row_desk_pic_2'); ?>" alt="services-4-blocks-thumb-2">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_2_parts_row_mob_pic_2'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_m_block_of_4_2_parts_row_title_2'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_m_block_of_4_2_parts_row_text_2'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_m_block_of_4_2_parts_row_desk_pic_3'); ?>" alt="services-4-blocks-thumb-3">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_2_parts_row_mob_pic_3'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_m_block_of_4_2_parts_row_title_3'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_m_block_of_4_2_parts_row_text_3'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_m_block_of_4_2_parts_row_desk_pic_4'); ?>" alt="services-4-blocks-thumb-4">
                    <img class="mob_img" src="<?php the_field('services_m_block_of_4_2_parts_row_mob_pic_4'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_m_block_of_4_2_parts_row_title_4'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_m_block_of_4_2_parts_row_text_4'); ?>
                </div>
            </div>
        </div>

        <!-- bright-spot -->
        <div class="wrap">
            <div class="bright-spot bright-spot-services-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/services/bright-spot-services-center.svg" alt="bright-spot-services-center">
                <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/services/services-4-blocks-thumb-1.png" alt="services-4-blocks-thumb-1">
            </div>
        </div>

        <!-- banner-our-works -->
        <div class="banner-our-works banner-our-works_s_m">
            <div class="banner-our-works__pic wow animate__fadeInUp" data-wow-duration="500ms">
                <img class="desk_img" src="<?php the_field('services_m_bottom_banner_desk'); ?>" alt="about-us-banner-works">
                <img class="mob_img" src="<?php the_field('services_m_bottom_banner_mob'); ?>" alt="about-us-banner-works">
            </div>
        </div>

        <!--  team -->
        <?php get_template_part('templates/team'); ?>

    </div>
    <!--  feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>
</div>
<?php get_footer(); ?>