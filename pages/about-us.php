<?php require_once '../header.php'; ?>
<div class="section about-us_wrap">
    <!-- top-banner -->
    <section>
        <div class="top-banner top-banner_about-us">
            <img class="desk_img" src="../assets/images/banner-about-us.png" alt="banner-about-us">
            <img class="mob_img" src="../assets/images/banner-about-us_mob.png" alt="banner-about-us">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">About us</h1>
        </div>
    </section>
    <!-- Our advantages -->
    <div class="wrap our-advantages_about-us">
        <?php require_once '../templates/our-advantages.php'; ?>
        <!-- h2-info-two -->
        <? {
            $title1 = 'Client orientation';
            $body1 = 'Wellore is a game and game graphics outsourcing studio that has been on the market for more than 12 years. Our main task is to create projects that will be appreciated by the players. We are looking for new ways to develop and visualize exciting game worlds and do our best to create memorable game designs and colorful graphic elements.';
            $title2 = 'Professional team';
            $body2 = 'For the Vikings project, our studio has developed the main components of the game world: the environment and props. Our task was to create detailed and high-quality 3D models that could convey the atmosphere of medieval Scandinavia. The result of our work was the creation of a promotional video using realistic 3D graphics in the spirit of the Viking era.';
        }
        ?>
        <div class="bright-spot bright-spot-about-us-1">
            <img src="../assets/images/bright-spot-about-us-1.svg" alt="bright-spot-about-us-1">
        </div>
    </div>
    <?php require_once '../templates/h2-info-two.php'; ?>

    <!-- banner-our-works -->
    <div class="banner-our-works">
        <div class="banner-our-works__pic wow animate__fadeInUp" data-wow-duration="500ms">
            <img class="desk_img" src="../assets/images/about-us-banner-works.png" alt="about-us-banner-works">
            <img class="mob_img" src="../assets/images/about-us-banner-works_mob_img.png" alt="about-us-banner-works">
        </div>
        <span class="see-more-arrow banner-our-works__btn wow animate__headShake" data-wow-duration="500ms">
            <a href="#">
                <span>See more works</span>
                <img src="../assets/images/see-more-arrow.svg" alt="see-more-arrow">
            </a>
        </span>
    </div>

    <!-- team -->
    <?php require_once '../templates/team.php'; ?>
    <!--  Feedback form -->
    <?php require_once '../templates/feedback-form.php'; ?>
</div>
<?php require_once '../footer.php'; ?>