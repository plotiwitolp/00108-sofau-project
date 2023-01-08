<?php
/*
 * Template Name: Шаблон Services S
 * Template Post Type: post
 */
get_header();
?>
<div class="section">

    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_s_title_h1'); ?></h1>
        </div>
    </section>

    <div class="services">

        <!-- tags -->
        <?php get_template_part('templates/tags-services'); ?>

        <!-- services-banner -->
        <div class="services-banner">
            <img class="desk_img" src="<?php the_field('services_s_top_banner_desk'); ?>" alt="services-top-banner-2">
            <img class="mob_img" src="<?php the_field('services_s_top_banner_mob'); ?>" alt="services-top-banner_mob">
        </div>

        <!-- Animation OUTSOURCING SERVICES-->
        <div class="services-4-blocks services-3-blocks_row">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_s_title_after_top_banner_h2'); ?></h2>
            <div class="services-4-blocks__wrap">
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic services-4-blocks__pic_s">
                        <img class="desk_img" src="<?php the_field('services_s_block_of_4_parts_desk_pic_1'); ?>" alt="services-4-anim-1">
                        <img class="mob_img" src="<?php the_field('services_s_block_of_4_parts_mob_pic_1'); ?>" alt="services-4-anim-1">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_s_block_of_4_parts_title_1'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_s_block_of_4_parts_text_1'); ?>
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInUp" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic services-4-blocks__pic_s">
                        <img class="desk_img" src="<?php the_field('services_s_block_of_4_parts_desk_pic_2'); ?>" alt="services-4-anim-2">
                        <img class="mob_img" src="<?php the_field('services_s_block_of_4_parts_mob_pic_2'); ?>" alt="services-4-anim-2">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_s_block_of_4_parts_title_2'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_s_block_of_4_parts_text_2'); ?>
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic services-4-blocks__pic_s">
                        <img class="desk_img" src="<?php the_field('services_s_block_of_4_parts_desk_pic_3'); ?>" alt="services-4-anim-3">
                        <img class="mob_img" src="<?php the_field('services_s_block_of_4_parts_mob_pic_3'); ?>" alt="services-4-anim-3">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_s_block_of_4_parts_title_3'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_s_block_of_4_parts_text_3'); ?>
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
            <h2><?php the_field('services_s_title_tech_h2'); ?></h2>
            <?php get_template_part('templates/technical-exp'); ?>
        </section>

        <!-- OUR WORKS -->
        <section class="our-works our-works_services">
            <div class="works-title">
                <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_s_title_h2'); ?></h2>
            </div>
            <div class="works-gallery">
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_s_block_of_4_img_pic_desk_1'); ?>" alt="our_works-1">
                    <img class="full_img" src="<?php the_field('services_s_full_img_1'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_s_block_of_4_img_pic_mob_1'); ?>" alt="our_works-1">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_s_block_of_4_img_pic_desk_2'); ?>" alt="our_works-2">
                    <img class="full_img" src="<?php the_field('services_s_full_img_2'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_s_block_of_4_img_pic_mob_2'); ?>" alt="our_works-2">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_s_block_of_4_img_pic_desk_3'); ?>" alt="our_works-3">
                    <img class="full_img" src="<?php the_field('services_s_full_img_3'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_s_block_of_4_img_pic_mob_3'); ?>" alt="our_works-3">
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <img class="desk_img full_for_img" src="<?php the_field('services_s_block_of_4_img_pic_desk_4'); ?>" alt="our_works-4">
                    <img class="full_img" src="<?php the_field('services_s_full_img_4'); ?>" alt="our_works-full">
                    <img class="mob_img" src="<?php the_field('services_s_block_of_4_img_pic_mob_4'); ?>" alt="our_works-4">
                </div>
            </div>
            <span class="see-more-arrow our-works_services-arrow">
                <a href="<?php the_field('services_s_block_of_4_link_btn'); ?>">
                    <span><?php the_field('services_s_block_of_4_text_btn'); ?></span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
                </a>
            </span>
        </section>

        <!-- Our animators are ready -->
        <div class="h2-info">
            <div class="h2-info__item h2-info__pdn wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="h2-info__body ">
                    <p>
                        <?php the_field('services_s_block_of_1_parts_text'); ?>
                    </p>
                </div>
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