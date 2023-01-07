<section>
    <div class="feedback-form" id="feedback-form">
        <div class="feedback-form__left wow animate__fadeInLeft" data-wow-duration="500ms">
            <div class="feedback-form__left-wrapper">
                <div class="feedback-form__top">
                    <h2><?php the_field('title_of_feedback_form', 1226); ?></h2>
                    <div class="feedback-form__hint">
                        <?php the_field('text_next_to_title_of_feedback_form', 1226); ?>
                    </div>
                </div>
                <div class="feedback-form__form">
                    <?= do_shortcode('[contact-form-7 id="1223" title="feedback-form"]') ?>
                </div>
            </div>
        </div>
        <div class="feedback-form__right wow animate__fadeInRight" data-wow-duration="500ms">
            <div class="socials feedback-form_socials">
                <div class="socials-item">
                    <a href="mailto:<?php the_field('socials_mail', 1226); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/mail.svg" alt="mail wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="<?php the_field('socials_facebook', 1226); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/facebook.svg" alt="facebook wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="<?php the_field('socials_instagram', 1226); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/instagram.svg" alt="instagram wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="<?php the_field('socials_pinterest', 1226); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/pinterest.svg" alt="pinterest wellore.com">
                    </a>
                </div>
            </div>
            <img src="<?php the_field('picture_next_to_feedback_form', 1226); ?>" alt="wellorepromoscreen_caschar">
        </div>
    </div>
</section>