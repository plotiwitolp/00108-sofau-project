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
            <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/banner-about-us.png" alt="banner-about-us">
            <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/banner-about-us_mob.png" alt="banner-about-us">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">About us</h1>
        </div>
    </section>

    <!-- Our advantages -->
    <div class="wrap our-advantages_about-us">
        <?php get_template_part('templates/our-advantages'); ?>
        <div class="bright-spot bright-spot-about-us-1">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-about-us-1.svg" alt="bright-spot-about-us-1">
        </div>
    </div>

    <!-- h2-info-two -->
    <section class="h2-info">
        <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <h2>Client orientation</h2>
            <div class="h2-info__body">
                <p>
                    Wellore is a game and game graphics outsourcing studio that has been on the market for more than 12 years. Our main task is to create projects that will be appreciated by the players. We are looking for new ways to develop and visualize exciting game worlds and do our best to create memorable game designs and colorful graphic elements.';
                    $title2 = 'Professional team
                </p>
            </div>
        </div>
        <div class="h2-info__item wow animate__fadeInRight" data-wow-duration="500ms">
            <h2>Professional team</h2>
            <div class="h2-info__body">
                <p>
                    For the Vikings project, our studio has developed the main components of the game world: the environment and props. Our task was to create detailed and high-quality 3D models that could convey the atmosphere of medieval Scandinavia. The result of our work was the creation of a promotional video using realistic 3D graphics in the spirit of the Viking era.
                </p>
            </div>
        </div>
    </section>


    <!-- banner-our-works -->
    <div class="banner-our-works">
        <div class="banner-our-works__pic wow animate__fadeInUp" data-wow-duration="500ms">
            <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/about-us-banner-works.png" alt="about-us-banner-works">
            <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/about-us-banner-works_mob_img.png" alt="about-us-banner-works">
        </div>
        <span class="see-more-arrow banner-our-works__btn wow animate__headShake" data-wow-duration="500ms">
            <a href="#">
                <span>See more works</span>
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