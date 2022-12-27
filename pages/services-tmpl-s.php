<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
<div class="section">
    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">Game Art Design Services</h1>
        </div>
    </section>
    <div class="services">
        <!-- tags -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/tags-services.php'; ?>

        <!-- services-banner -->
        <div class="services-banner">
            <img src="<?php __FILE__; ?>/assets/images/services/services-top-banner-3.png" alt="services-top-banner-3">
        </div>

        <!-- Animation OUTSOURCING SERVICES-->
        <div class="services-4-blocks services-3-blocks_row">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">Animation OUTSOURCING SERVICES</h2>
            <div class="services-4-blocks__wrap">
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-anim-1.png" alt="services-4-anim-1">
                    </div>
                    <div class="services-4-blocks__title">
                        Complete design and development cycle
                    </div>
                    <div class="services-4-blocks__text">
                        Tell us your idea for the game and we will handle the rest. Specifications, visual design, prototyping, game design, development, and testing will be done by our specialists with speed and efficiency. You can watch your game become a reality and be in control on every stage with our transparent pipeline.
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInUp" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-anim-2.png" alt="services-4-anim-2">
                    </div>
                    <div class="services-4-blocks__title">
                        Game design
                    </div>
                    <div class="services-4-blocks__text">
                        We use our vast experience and follow the latest trends to create exciting gameplay, balanced levels, clever puzzles, and monetization schemes to keep players engaged.
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-anim-3.png" alt="services-4-anim-3">
                    </div>
                    <div class="services-4-blocks__title">
                        Game development
                    </div>
                    <div class="services-4-blocks__text">
                        Our development team is full of talented people who can solve every problem and deliver a high-quality product.
                    </div>
                </div>
                <div class="wrap">
                    <div class="bright-spot bright-spot-services-left">
                        <img src="<?php __FILE__; ?>/assets/images/services/bright-spot-services-left.svg" alt="bright-spot-services-left">
                    </div>
                </div>
            </div>
        </div>

        <!-- TECHNICAL EXPERTISE -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/technical-exp.php'; ?>

        <!-- OUR WORKS -->
        <section class="our-works our-works_services">
            <div class="works-title">
                <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">OUR WORKS</h2>
            </div>
            <div class="works-gallery">
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <a href="#">
                        <img src="<?php __FILE__; ?>/assets/images/our_works-1.png" alt="our_works-1">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
                    <a href="#">
                        <img src="<?php __FILE__; ?>/assets/images/our_works-2.png" alt="our_works-2">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <a href="#">
                        <img src="<?php __FILE__; ?>/assets/images/our_works-3.png" alt="our_works-3">
                    </a>
                </div>
                <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
                    <a href="#">
                        <img src="<?php __FILE__; ?>/assets/images/our_works-4.png" alt="our_works-4">
                    </a>
                </div>
            </div>
            <span class="see-more-arrow our-works_services-arrow">
                <a href="#">
                    <span>See more works</span>
                    <img src="<?php __FILE__; ?>/assets/images/see-more-arrow.svg" alt="see-more-arrow">
                </a>
            </span>
            <div class="bright-spot bright-spot-services-center_up">
                <img src="<?php __FILE__; ?>/assets/images/services/bright-spot-services-center.svg" alt="bright-spot-services-center">
            </div>
        </section>

        <!-- Our animators are ready -->
        <section class="h2-info">
            <div class="h2-info__item h2-info__pdn wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="h2-info__body ">
                    <p>
                        Our animators are ready to take care of the complex animation of your game project, which will allow you not to worry about finding specialists for various types of animation.
                    </p>
                </div>
            </div>
        </section>

        <!-- banner-our-works -->
        <div class="banner-our-works">
            <div class="banner-our-works__pic wow animate__fadeInUp" data-wow-duration="500ms">
                <img src="<?php __FILE__; ?>/assets/images/about-us-banner-works.png" alt="about-us-banner-works">
            </div>
        </div>


        <!--  team -->
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/team.php'; ?>

    </div>

    <!--  feedback form -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/feedback-form.php'; ?>

</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>