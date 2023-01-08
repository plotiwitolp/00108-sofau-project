<section class="our-advantages">
    <div class="our-advantages-wrap">
        <div class="our-advantages__h2-wrap wow animate__fadeInLeft" data-wow-duration="500ms">
            <h2 class="our-advantages__h2 "><?php the_field('our_advantages_title_h2', 8); ?></h2>
        </div>
        <div class="advantages wow animate__slideInRight" data-wow-duration="500ms">
            <div class="advantages__item">
                <div class="advantages__icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dawn.svg" alt="dawn">
                </div>
                <div class="advantages__body">
                    <span><?php the_field('our_advantages_title_1', 8); ?></span>
                    <p>
                        <?php the_field('our_advantages_text_1', 8); ?>
                    </p>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dawn.svg" alt="dawn">
                </div>
                <div class="advantages__body">
                    <span><?php the_field('our_advantages_title_2', 8); ?></span>
                    <p>
                        <?php the_field('our_advantages_text_2', 8); ?>
                    </p>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dawn.svg" alt="dawn">
                </div>
                <div class="advantages__body">
                    <span><?php the_field('our_advantages_title_3', 8); ?></span>
                    <p>
                        <?php the_field('our_advantages_text_3', 8); ?>
                    </p>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__icon">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dawn.svg" alt="dawn">
                </div>
                <div class="advantages__body">
                    <span><?php the_field('our_advantages_title_4', 8); ?></span>
                    <p>
                        <?php the_field('our_advantages_text_4', 8); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates/technical-exp'); ?>
</section>