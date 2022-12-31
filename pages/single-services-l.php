<?php
/*
 * Template Name: Шаблон Services L
 * Template Post Type: post
 */

get_header();
?>
<div class="section">

    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_l_title_h1'); ?></h1>
        </div>
    </section>

    <div class="services">

        <!-- tags -->
        <?php get_template_part('templates/tags-services'); ?>



        <!-- services-banner -->
        <div class="services-banner">
            <img class="desk_img" src="<?php the_field('services_l_top_banner_desk'); ?>" alt="services-top-banner-1">
            <img class="mob_img" src="<?php the_field('services_l_top_banner_mob'); ?>" alt="services-top-banner_mob">
        </div>


        <!-- 2D art OUTSOURCING SERVICES -->
        <div class="services-4-blocks">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('services_l_title_after_top_banner_h2'); ?></h2>
            <div class="services-4-blocks__wrap">

                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_desk_pic_1'); ?>" alt="services-4-blocks-1">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_mob_pic_1'); ?>" alt="services-4-blocks-1_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_l_block_of_4_parts_title_1'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_l_block_of_4_parts_text_1'); ?>
                    </div>
                </div>

                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_desk_pic_2'); ?>" alt="services-4-blocks-2">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_mob_pic_2'); ?>" alt="services-4-blocks-2_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_l_block_of_4_parts_title_2'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_l_block_of_4_parts_text_2'); ?>
                    </div>
                </div>

                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_desk_pic_3'); ?>" alt="services-4-blocks-3">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_mob_pic_3'); ?>" alt="services-4-blocks-3_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_l_block_of_4_parts_title_3'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_l_block_of_4_parts_text_3'); ?>
                    </div>
                </div>

                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_desk_pic_4'); ?>" alt="services-4-blocks-4">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_mob_pic_4'); ?>" alt="services-4-blocks-4_mob">
                    </div>
                    <div class="services-4-blocks__title">
                        <?php the_field('services_l_block_of_4_parts_title_4'); ?>
                    </div>
                    <div class="services-4-blocks__text">
                        <?php the_field('services_l_block_of_4_parts_text_4'); ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- bright-spot -->
        <div class="wrap">
            <div class="bright-spot bright-spot-services-left">
                <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/services/bright-spot-services-left.svg" alt="bright-spot-services-left">
                <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/services/bright-spot-services-left.svg" alt="bright-spot-services-left">
            </div>
        </div>


        <!-- TECHNICAL EXPERTISE -->
        <?php get_template_part('templates/technical-exp'); ?>


        <!-- services-4-blocks-thumb -->
        <div class="services-4-blocks-thumb">
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_row_desk_pic_1'); ?>" alt="services-4-blocks-thumb-1">
                    <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_row_mob_pic_1'); ?>" alt="services-4-blocks-thumb-1_mob">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_l_block_of_4_parts_row_title_1'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_l_block_of_4_parts_row_text_1'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_row_desk_pic_2'); ?>" alt="services-4-blocks-thumb-2">
                    <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_row_mob_pic_2'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_l_block_of_4_parts_row_title_2'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_l_block_of_4_parts_row_text_2'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_row_desk_pic_3'); ?>" alt="services-4-blocks-thumb-3">
                    <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_row_mob_pic_3'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_l_block_of_4_parts_row_title_3'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_l_block_of_4_parts_row_text_3'); ?>
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img class="desk_img" src="<?php the_field('services_l_block_of_4_parts_row_desk_pic_4'); ?>" alt="services-4-blocks-thumb-4">
                    <img class="mob_img" src="<?php the_field('services_l_block_of_4_parts_row_mob_pic_4'); ?>" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    <?php the_field('services_l_block_of_4_parts_row_title_4'); ?>
                </div>
                <div class="services-4-blocks-thumb__body">
                    <?php the_field('services_l_block_of_4_parts_row_text_4'); ?>
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


        <!-- Character design -->
        <section class="h2-info h2-info__marg">
            <div class="h2-info__item h2-info__wrap wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="h2-info__text">
                    <h2><?php the_field('services_l_block_of_1_part_title_1'); ?></h2>
                    <div class="h2-info__body">
                        <p>
                            <?php the_field('services_l_block_of_1_part_text_1'); ?>
                        </p>
                    </div>
                </div>
                <div class="h2-info__pic">
                    <div class="h2-info__pic_wrap">
                        <img src="<?php the_field('services_l_block_of_1_part_pic_1'); ?>" alt="h2-info__pic">
                    </div>
                </div>
            </div>
        </section>


        <!-- Game objects and icons -->
        <section class="h2-info h2-info__marg">
            <div class="h2-info__item h2-info__wrap wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="h2-info__text">
                    <h2><?php the_field('services_l_block_of_1_part_title_2'); ?></h2>
                    <div class="h2-info__body">
                        <p>
                            <?php the_field('services_l_block_of_1_part_text_2'); ?>
                        </p>
                    </div>
                </div>
                <div class="h2-info__pic">
                    <div class="h2-info__pic_wrap">
                        <img src="<?php the_field('services_l_block_of_1_part_pic_2'); ?>" alt="h2-info__pic">
                    </div>
                </div>
            </div>
        </section>



        <!-- OUR WORKS -->
        <section class="our-works our-works_services">
            <div class="works-title">
                <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">
                    <?php the_field('services_l_title_h2'); ?>
                </h2>
            </div>
            <div class="works-gallery">
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <a href="#">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_img_pic_desk_1'); ?>" alt="our_works-1">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_img_pic_mob_1'); ?>" alt="our_works-1">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <a href="#">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_img_pic_desk_2'); ?>" alt="our_works-2">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_img_pic_mob_2'); ?>" alt="our_works-2">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <a href="#">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_img_pic_desk_3'); ?>" alt="our_works-3">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_img_pic_mob_3'); ?>" alt="our_works-3">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <a href="#">
                        <img class="desk_img" src="<?php the_field('services_l_block_of_4_img_pic_desk_4'); ?>" alt="our_works-4">
                        <img class="mob_img" src="<?php the_field('services_l_block_of_4_img_pic_mob_4'); ?>" alt="our_works-4">
                    </a>
                </div>
            </div>
            <span class="see-more-arrow our-works_services-arrow">
                <a href="#">
                    <span>See more works</span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
                </a>
            </span>
        </section>


        <!--  team -->
        <?php get_template_part('templates/team'); ?>

    </div>


    <!--  feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

</div>

<?php get_footer(); ?>