<?php
/*
Template Name: Шаблон страницы Portfolio
*/

get_header();
?>
<div class="section">
    <!-- top-banner -->
    <section>
        <div class="top-banner">
            <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">Design Portfolio</h1>
        </div>
    </section>
    <section class="portfolio">
        <!-- tags -->
        <form method="get">
            <?php
            $tags = get_terms(['taxanomy' => 'post_tag']);

            ?>
            <?php

            ?>
        </form>

        <div class="tag wow animate__fadeInRight" data-wow-duration="500ms">
            <div class="tag__item">
                <a href="#">3D art</a>
            </div>
            <div class="tag__item">
                <a href="#">2D art</a>
            </div>
            <div class="tag__item">
                <a href="#">Animation</a>
            </div>
            <div class="tag__item">
                <a href="#">Game development</a>
            </div>
            <div class="tag__item">
                <a href="#">Marketing</a>
            </div>
            <div class="tag__item">
                <a href="#">Cinematics</a>
            </div>
        </div>

        <!-- project-preview -->
        <div class="project-preview">

            <?php
            $posts = get_posts([
                'numberposts' => -1,
                'category' => 5,
                // 'orderby' => 'title',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filter' => true,
            ]);
            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="project-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">

                    <a href="<?php the_permalink(); ?>">
                        <div class="project-preview__thumb">
                            <img class="desk_img" src="<?php the_field('portfolio_thumb_img_desc'); ?>" alt="project-preview-thumb-1">
                            <img class="mob_img" src="<?php the_field('portfolio_thumb_img_mob'); ?>" alt="project-preview-thumb-1_mob">
                        </div>
                    </a>
                    <div class="project-preview__desc-wrap">
                        <div class="project-preview__desc">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="project-preview__tag-wrap">

                                <?php if ($post_tags = wp_get_post_tags($post->ID)) {
                                    foreach ($post_tags as $post_tag) {
                                        echo '<span class="project-preview__tag-item">' . $post_tag->name  . '</span>';
                                    }
                                }
                                ?>


                                <!-- <span class="project-preview__tag-item">Game</span>
                                <span class="project-preview__tag-item">3D Art</span>
                                <span class="project-preview__tag-item">Trailer</span> -->
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            wp_reset_postdata();
            ?>
            <!-- <div class="project-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">

                <a href="../pages/portfolio-tmpl-l.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-1.png" alt="project-preview-thumb-1">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-1_mob.png" alt="project-preview-thumb-1_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-l.php">
                            <h3>Viking - game trailer</h3>
                        </a>
                        <div class="project-preview__tag-wrap">
                            <span class="project-preview__tag-item">Game</span>
                            <span class="project-preview__tag-item">3D Art</span>
                            <span class="project-preview__tag-item">Trailer</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- // -->







            <!-- // -->
            <!-- <div class="project-preview__item wow animate__fadeInUp" data-wow-duration="500ms">
                <a href="../pages/portfolio-tmpl-m.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-7.png" alt="project-preview-thumb-7">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-2_mob.png" alt="project-preview-thumb-2_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-m.php">
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
                <a href="../pages/portfolio-tmpl-s.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-3.png" alt="project-preview-thumb-3">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-3_mob.png" alt="project-preview-thumb-3_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-s.php">
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
            <div class="project-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">
                <a href="../pages/portfolio-tmpl-xs.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-4.png" alt="project-preview-thumb-4">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-4_mob.png" alt="project-preview-thumb-4_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-xs.php">
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
                <a href="../pages/portfolio-tmpl-l.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-5.png" alt="project-preview-thumb-5">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-5_mob.png" alt="project-preview-thumb-5_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-l.php">
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
                <a href="../pages/portfolio-tmpl-m.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-6.png" alt="project-preview-thumb-6">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-6_mob.png" alt="project-preview-thumb-6_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-m.php">
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
            <div class="project-preview__item wow animate__fadeInLeft" data-wow-duration="500ms">
                <a href="../pages/portfolio-tmpl-s.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-7.png" alt="project-preview-thumb-7">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-1_mob.png" alt="project-preview-thumb-1_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-s.php">
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
                <a href="../pages/portfolio-tmpl-xs.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-8.png" alt="project-preview-thumb-8">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-2_mob.png" alt="project-preview-thumb-2_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-xs.php">
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
                <a href="../pages/portfolio-tmpl-l.php">
                    <div class="project-preview__thumb">
                        <img class="desk_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-9.png" alt="project-preview-thumb-9">
                        <img class="mob_img" src="<?php bloginfo('template_url'); ?>/assets/images/portfolio/project-preview-thumb-3_mob.png" alt="project-preview-thumb-3_mob">
                    </div>
                </a>
                <div class="project-preview__desc-wrap">
                    <div class="project-preview__desc">
                        <a href="../pages/portfolio-tmpl-l.php">
                            <h3>Viking - game trailer</h3>
                        </a>
                        <div class="project-preview__tag-wrap">
                            <span class="project-preview__tag-item">Game</span>
                            <span class="project-preview__tag-item">3D Art</span>
                            <span class="project-preview__tag-item">Trailer</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- bright-spot -->
        <div class="wrap">
            <div class="bright-spot bright-spot-blog-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-blog-1.svg" alt="bright-spot-blog-1">
            </div>
        </div>



        <!-- pagination -->
        <?php get_template_part('templates/pagination'); ?>

    </section>
    <div class="feedback-form__portfolio">
        <!--  feedback form -->
        <?php get_template_part('templates/feedback-form'); ?>

    </div>
    <div class="wrap">
        <div class="bright-spot bright-spot-blog-bottom">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spots/bright-spot-portfolio-top.svg" alt="bright-spot-portfolio-top">
        </div>
    </div>
</div>
<?php get_footer(); ?>