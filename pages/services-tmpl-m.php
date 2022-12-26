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
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/tags.php'; ?>

        <div class="services-banner">
            <img src="<?php __FILE__; ?>/assets/images/services/services-top-banner-2.png" alt="services-top-banner-2">
        </div>

        <!-- Game development services -->
        <div class="services-4-blocks services-4-blocks_row">
            <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">2D art OUTSOURCING SERVICES</h2>
            <div class="services-4-blocks__wrap">
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-1.png" alt="services-4-blocks-1">
                    </div>
                    <div class="services-4-blocks__title">
                        Complete design and development cycle
                    </div>
                    <div class="services-4-blocks__text">
                        Tell us your idea for the game and we will handle the rest. Specifications, visual design, prototyping, game design, development, and testing will be done by our specialists with speed and efficiency. You can watch your game become a reality and be in control on every stage with our transparent pipeline.
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-2.png" alt="services-4-blocks-2">
                    </div>
                    <div class="services-4-blocks__title">
                        Game design
                    </div>
                    <div class="services-4-blocks__text">
                        We use our vast experience and follow the latest trends to create exciting gameplay, balanced levels, clever puzzles, and monetization schemes to keep players engaged.
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInLeft" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-3.png" alt="services-4-blocks-3">
                    </div>
                    <div class="services-4-blocks__title">
                        Game development
                    </div>
                    <div class="services-4-blocks__text">
                        Our development team is full of talented people who can solve every problem and deliver a high-quality product.
                    </div>
                </div>
                <div class="services-4-blocks__item wow animate__fadeInRight" data-wow-duration="500ms">
                    <div class="services-4-blocks__pic">
                        <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-4.png" alt="services-4-blocks-4">
                    </div>
                    <div class="services-4-blocks__title">
                        QA and testing
                    </div>
                    <div class="services-4-blocks__text">
                        The QA team will make sure that the user experience is as smooth and robust as possible.
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
        </section>

        <!-- Unity development -->
        <?php {
            $title = 'Unity development';
            $body = 'Our engine of choice is Unity, as it provides the right mix of features, performance, and stability. If necessary, our development team has enough skills and experience to work with any other major engine.';
        }
        ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/h2-info-single.php'; ?>

        <!-- services-4-blocks-thumb -->
        <div class="services-4-blocks-thumb">
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-thumb-1.png" alt="services-4-blocks-thumb-1">
                </div>
                <div class="services-4-blocks-thumb__title">
                    Casual games
                </div>
                <div class="services-4-blocks-thumb__body">
                    We combine fabulous graphics, an engrossing story, and fascinating gameplay to make our casual games stand out on the market.
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInLeft" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-thumb-2.png" alt="services-4-blocks-thumb-2">
                </div>
                <div class="services-4-blocks-thumb__title">
                    Mobile games
                </div>
                <div class="services-4-blocks-thumb__body">
                    A successful hypercasual game needs addicting gameplay, attractive graphics, and a solid monetization scheme. We can provide all this
                    with ease.
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-thumb-3.png" alt="services-4-blocks-thumb-3">
                </div>
                <div class="services-4-blocks-thumb__title">
                    Casual games
                </div>
                <div class="services-4-blocks-thumb__body">
                    We can make your game look and feel great on a vast range of mobile devices, ensure stable performance and visual integrity and implement in-app purchases, ads, and social media integrations.
                </div>
            </div>
            <div class="services-4-blocks-thumb__item  wow animate__fadeInRight" data-wow-duration="500ms">
                <div class="services-4-blocks-thumb__pic">
                    <img src="<?php __FILE__; ?>/assets/images/services/services-4-blocks-thumb-4.png" alt="services-4-blocks-thumb-4">
                </div>
                <div class="services-4-blocks-thumb__title">
                    AR/VR
                </div>
                <div class="services-4-blocks-thumb__body">
                    Our designers and developers work together to create the best virtual experience to fit your needs.
                </div>
            </div>
            <div class="bright-spot bright-spot-services-center">
                <img src="<?php __FILE__; ?>/assets/images/services/bright-spot-services-center.svg" alt="bright-spot-services-center">
            </div>
        </div>

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