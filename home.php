<?php
/*
Template Name: Шаблон страницы Home
*/
get_header();
?>

<div class="section">
    <!-- MAIN TOP -->
    <section class="main-top">
        <div class="main-pic ">
            <img src="<?php the_field('home_top_banner_front'); ?>" alt="baner-1">
            <img class="main-pic__bg " src="<?php the_field('home_top_banner_bg'); ?>" alt="baner-1-bg">
        </div>
        <div class="main-title">
            <h1>
                <span class="title-accent animate__animated animate__fadeInDown"><?php the_field('home_top_banner_h1_part_1'); ?></span>
                <span class="animate__animated animate__fadeInLeft"><?php the_field('home_top_banner_h1_part_2'); ?></span>
                <span class="title-accent animate__animated animate__fadeInDown"><?php the_field('home_top_banner_h1_part_3'); ?></span>
                <span class="animate__animated animate__fadeInLeft"><?php the_field('home_top_banner_h1_part_4'); ?></span>
            </h1>
            <div class="description animate__animated animate__fadeInUp">
                <?php the_field('home_top_banner_text'); ?>
            </div>
            <div class="button-wrapper">
                <div class="main-title__contact-us animate__animated animate__fadeInUp">
                    <a class="button feedback-form-link" href="#feedback-form">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SERVIСES -->
    <section class="our-services">
        <div class="our-services__h2">
            <h2><?= get_category(6, ARRAY_A)['name'] ?></h2>
        </div>
        <div class="job-preview">
            <?php
            $posts = get_posts([
                'numberposts' => -1,
                'category' => 6,
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filter' => true,
            ]);
            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="job-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
                    <div class="job-preview__thumb">
                        <img class="desk_img" src="<?php the_field('our_services_thumb_img_desc'); ?>" alt="our_services-3d_art">
                        <img class="mob_img" src="<?php the_field('our_services_thumb_img_mob'); ?>" alt="our_services-3d_art_mob">
                    </div>
                    <div class="job-preview__desc-wrap">
                        <div class="job-preview__desc">
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?php the_field('our_services_thumb_text'); ?>
                            </p>
                            <span class="button see-more-btn"><a href="<?php the_permalink(); ?>">See more</a></span>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="bright-spot bright-spot-1">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-1.svg" alt="bright-spot-1">
        </div>
        <div class="bright-spot bright-spot-2">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-2.svg" alt="bright-spot-2">
        </div>
    </section>
    <!-- Our advantages -->

    <?php get_template_part('templates/our-advantages'); ?>

    <!-- OUR WORKS -->
    <section class="our-works">
        <div class="works-title">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php the_field('home_our_works_title_h2'); ?></h2>
            <span class="see-more-arrow ">
                <a href="<?php the_field('home_our_works_link_btn'); ?>">
                    <span><?php the_field('home_our_works_text_btn'); ?></span>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
                </a>
            </span>
        </div>
        <div class="works-gallery">
            <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_1_desk'); ?>" alt="our_works-1">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_1'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_1_mob'); ?>" alt="our_works-1">
            </div>
            <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_2_desk'); ?>" alt="our_works-2">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_2'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_2_mob'); ?>" alt="our_works-2">
            </div>
            <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_3_desk'); ?>" alt="our_works-3">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_3'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_3_mob'); ?>" alt="our_works-3">
            </div>
            <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_4_desk'); ?>" alt="our_works-4">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_4'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_4_mob'); ?>" alt="our_works-4">
            </div>
            <div class="works-gallery__item wow animate__fadeInBottomLeft" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_5_desk'); ?>" alt="our_works-5">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_5'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_5_mob'); ?>" alt="our_works-1_mob">
            </div>
            <div class="works-gallery__item wow animate__fadeInUp" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_6_desk'); ?>" alt="our_works-6">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_6'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_6_mob'); ?>" alt="our_works-2_mob">
            </div>
            <div class="works-gallery__item wow animate__fadeInBottomRight" data-wow-duration="500ms">
                <img class="desk_img full_for_img" src="<?php the_field('home_our_works_img_7_desk'); ?>" alt="our_works-7">
                <img class="full_img" src="<?php the_field('home_our_works_full_img_7'); ?>" alt="our_works-full">
                <img class="mob_img" src="<?php the_field('home_our_works_img_7_mob'); ?>" alt="our_works-3_mob">
            </div>
        </div>
    </section>

    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-3.svg" alt="bright-spot-3">
        </div>
    </div>

    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>
</div>
<?php get_footer(); ?>