<?php
/*
Template Name: Шаблон страницы Blog
*/

get_header();
?>

<div class="section blog">
    <div class="top-banner">
        <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">GAME ART OUTSOURCING STUDIO BLOG</h1>
    </div>
    <div class="post-preview">
        <div class="post-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-1.png" alt="thumbnails-post-1">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2"> HOW MUCH DOES IT COST TO DEVELOP A GAME</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="post-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-2.png" alt="thumbnails-post-2">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2">TOP MATCH 3 GAMES. WHAT MAKES THEM SO ADDICTIVE?</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="post-preview__item wow animate__slideInRight" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-3.png" alt="thumbnails-post-3">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2">MOBILE GAMING TRENDS ANALYSIS</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="post-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-1.png" alt="thumbnails-post-1">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2"> HOW MUCH DOES IT COST TO DEVELOP A GAME</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="post-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-2.png" alt="thumbnails-post-2">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2">TOP MATCH 3 GAMES. WHAT MAKES THEM SO ADDICTIVE?</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="post-preview__item wow animate__slideInRight" data-wow-duration="500ms">
            <div class="post-preview__item-pic">
                <a href="../pages/post.php">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thumbnails_post/thumbnails-post-3.png" alt="thumbnails-post-3">
                </a>
            </div>
            <a href="../pages/post.php">
                <h2 class="post-preview__item-h2">MOBILE GAMING TRENDS ANALYSIS</h2>
            </a>
            <div class="post-preview__item-date">June 28, 2022</div>
        </div>
        <div class="bright-spot bright-spot-blog-1">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-1.svg" alt="bright-spot-blog-1">
        </div>
    </div>
    <!-- pagination -->
    <?php get_template_part('templates/pagination'); ?>

    <!--  Feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

    <div class="bright-spot bright-spot-blog-2">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-2.svg" alt="bright-spot-blog-2">
    </div>
</div>
<?php get_footer(); ?>