<?php require_once '../header.php'; ?>
<div class="section portfolio-tmpl-s">
    <!-- top-banner -->
    <section>
        <div class="top-banner-info">
            <img class="desk_img" src="../assets/images/The-snow-fable.png" alt="The-snow-fable">
            <img class="mob_img" src="../assets/images/The-snow-fable_mob.png" alt="The-snow-fable_mob">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">Chronicles of the Withes and Warlocks</h1>
            <div class="top-banner-info__wrap">
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title">Idustry:</span>
                    <span class="top-banner-info__body">Game</span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title">Client:</span>
                    <span class="top-banner-info__body">Flying Whale</span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title">Idustry:</span>
                    <span class="top-banner-info__body">Game</span>
                </div>
                <div class="top-banner-info__item">
                    <span class="top-banner-info__title">Client:</span>
                    <span class="top-banner-info__body">Flying Whale</span>
                </div>
            </div>
        </div>
    </section>
    <div class="portfolio-banner">
        <div class="portfolio-banner_img-wrap">
            <img src="../assets/images/banner-car.png" alt="banner-car">
        </div>
        <div class="wrap">
            <div class="bright-spot bright-spot-portfolio-top">
                <img src="../assets/images/portfolio/bright-spot-portfolio-top.svg" alt="bright-spot-portfolio-top">
            </div>
        </div>
    </div>

    <!-- h2-info-two Task & Level design & interface -->
    <?php {
        $title1 = 'Task';
        $title2 = 'Level design & interface';
        $body1 = 'Our studio has completed the full development cycle of the Match-3 genre game “The snow fable". The project was carried out jointly with the publisher Alawar. This is a fairy tale about a little girl who has a big journey ahead of her to save her best friend. The process of creating the game consisted of concept development, game design, 2D graphics and animation.';
        $body2 = 'Games of the Match-3 genre are very popular among users because of the simplicity of the gameplay and the fascination of the levels. Players must match tiles of the same type to score points. Additional bonuses encourage users to go further to get access to unique game materials. The interface is intuitive and presented in the form of a fairy tale book.';
    }
    ?>
    <?php require_once '../templates/h2-info-two.php'; ?>

    <!-- works-gallery Task & Level design & interface -->
    <div class="works-gallery gallery_1">
        <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-1.png" alt="portfolio-our-works-1">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-1_mob.png" alt="portfolio-our-works-1_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInTopLeft" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-2.png" alt="portfolio-our-works-2">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-2_mob.png" alt="portfolio-our-works-2_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInTopRight" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-3.png" alt="portfolio-our-works-3">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-3_mob.png" alt="portfolio-our-works-3_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomLeft" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-4.png" alt="portfolio-our-works-4">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-4_mob.png" alt="portfolio-our-works-4_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomLeft" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-5.png" alt="portfolio-our-works-5">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-1_mob.png" alt="portfolio-our-works-1_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInUp" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-6.png" alt="portfolio-our-works-6">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-2_mob.png" alt="portfolio-our-works-2_mob">
            </a>
        </div>
        <div class="works-gallery__item wow animate__fadeInBottomRight" data-wow-duration="500ms">
            <a href="#">
                <img class="desk_img" src="../assets/images/portfolio/portfolio-our-works-7.png" alt="portfolio-our-works-7">
                <img class="mob_img" src="../assets/images/portfolio/portfolio-our-works-3_mob.png" alt="portfolio-our-works-3_mob">
            </a>
        </div>
    </div>

    <!-- Similar projects -->
    <?php require '../templates/similar-projects.php'; ?>

    <!--  Feedback form -->
    <?php require_once '../templates/feedback-form.php'; ?>
</div>
<?php require_once '../footer.php'; ?>