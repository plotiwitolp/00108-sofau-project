<?php
/*
Template Name: Шаблон страницы About Us
*/
get_header();
?>
<div class="section about-us_wrap">
    <!-- top-banner -->
    <section>
        <div class="top-banner top-banner_about-us">
            <img class="desk_img" src="<?php the_field('about_us_top_banner_desk'); ?>" alt="banner-about-us">
            <img class="mob_img" src="<?php the_field('about_us_top_banner_mob'); ?>" alt="banner-about-us">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php single_post_title(); ?></h1>
        </div>
    </section>

    <!-- Our advantages -->
    <div class="wrap our-advantages_about-us">
        <?php get_template_part('templates/our-advantages'); ?>
    </div>

    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-about-us-1">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-about-us-1.svg" alt="bright-spot-about-us-1">
        </div>
    </div>

    <!-- h2-info-two -->
    <section class="h2-info">
        <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <h2><?php the_field('about_us_block_of_2_title_1'); ?></h2>
            <div class="h2-info__body">
                <p>
                    <?php the_field('about_us_block_of_2_text_1'); ?>
                </p>
            </div>
        </div>
        <div class="h2-info__item wow animate__fadeInRight" data-wow-duration="500ms">
            <h2><?php the_field('about_us_block_of_2_title_2'); ?></h2>
            <div class="h2-info__body">
                <p>
                    <?php the_field('about_us_block_of_2_text_2'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- banner-our-works -->
    <div class="banner-our-works">
        <div class="banner-our-works__pic wow animate__fadeInUp" data-wow-duration="500ms">
            <img class="desk_img" src="<?php the_field('about_us_block_of_1_pic_desk'); ?>" alt="about-us-banner-works">
            <img class="mob_img" src="<?php the_field('about_us_block_of_1_pic_mob'); ?>" alt="about-us-banner-works">
        </div>
        <span class="see-more-arrow banner-our-works__btn wow animate__headShake" data-wow-duration="500ms">
            <a href="<?php the_field('about_us_block_of_1_link_btn'); ?>">
                <span><?php the_field('about_us_block_of_1_text_btn'); ?></span>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
            </a>
        </span>
    </div>

    <!-- team -->
    <?php get_template_part('templates/team'); ?>

    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>
</div>
<?php get_footer(); ?>