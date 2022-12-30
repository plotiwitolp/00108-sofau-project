<?php
/*
 * Template Name: Шаблон Portfolio XS
 * Template Post Type: post
 */

get_header();
?>
<div class="section portfolio-tmpl-xs">

    <!-- top-banner -->
    <section>
        <div class="top-banner-info">
            <img src="../assets/images/default-top-banner.svg" alt="The-snow-fable">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">wellore-studio cakes</h1>
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


    <!-- portfolio-banner -->
    <div class="portfolio-banner">
        <div class="portfolio-banner_img-wrap">
            <img src="../assets/images/portfolio/banner-portfolio-xs.png" alt="banner-portfolio-xs">
        </div>
    </div>


    <!-- h2-info-two Task & Level design & interface -->
    <section class="h2-info">
        <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <h2>Task</h2>
            <div class="h2-info__body">
                <p>
                    Our studio has completed the full development cycle of the Match-3 genre game “The snow fable". The project was carried out jointly with the publisher Alawar. This is a fairy tale about a little girl who has a big journey ahead of her to save her best friend. The process of creating the game consisted of concept development, game design, 2D graphics and animation.
                </p>
            </div>
        </div>
        <div class="h2-info__item wow animate__fadeInRight" data-wow-duration="500ms">
            <h2>Level design & interface</h2>
            <div class="h2-info__body">
                <p>
                    Games of the Match-3 genre are very popular among users because of the simplicity of the gameplay and the fascination of the levels. Players must match tiles of the same type to score points. Additional bonuses encourage users to go further to get access to unique game materials. The interface is intuitive and presented in the form of a fairy tale book.
                </p>
            </div>
        </div>
    </section>


    <!-- bright-spot -->
    <div class="wrap">
        <div class="bright-spot bright-spot-portfolio-xs-left">
            <img src="../assets/images/bright-spots/bright-spot-portfolio-xs-left.svg" alt="bright-spot-portfolio-xs-left">
        </div>
    </div>


    <!-- Similar projects -->
    <section class="similar-projects">
        <h2>Similar projects</h2>
        <div class="project-preview">
            <div class="project-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">
                <a href="#">
                    <div class="project-preview__thumb">
                        <img src="../assets/images/portfolio/similar-projects-xs-1.png" alt="similar-projects-xs-1">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="#">
                            <h3>Viking - game trailer</h3>
                        </a>
                        <div class="project-preview__tag-wrap">
                            <span class="project-preview__tag-item">Game</span>
                            <span class="project-preview__tag-item">3D Art</span>
                            <span class="project-preview__tag-item">Trailer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
                <a href="#">
                    <div class="project-preview__thumb">
                        <img src="../assets/images/portfolio/project-preview-thumb-7.png" alt="project-preview-thumb-7">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="#">
                            <h3>Viking - game trailer</h3>
                        </a>
                        <div class="project-preview__tag-wrap">
                            <span class="project-preview__tag-item">Game</span>
                            <span class="project-preview__tag-item">3D Art</span>
                            <span class="project-preview__tag-item">Trailer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-preview__item wow animate__slideInRight" data-wow-duration="500ms">
                <a href="#">
                    <div class="project-preview__thumb">
                        <img src="../assets/images/portfolio/similar-projects-xs-2.png" alt="similar-projects-xs-2">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="#">
                            <h3>Viking - game trailer</h3>
                        </a>
                        <div class="project-preview__tag-wrap">
                            <span class="project-preview__tag-item">Game</span>
                            <span class="project-preview__tag-item">3D Art</span>
                            <span class="project-preview__tag-item">Trailer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

</div>

<?php get_footer(); ?>