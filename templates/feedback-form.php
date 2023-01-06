<?php
// check wp constant;
?>

<section>
    <div class="feedback-form" id="feedback-form">
        <div class="feedback-form__left wow animate__fadeInLeft" data-wow-duration="500ms">
            <div class="feedback-form__left-wrapper">
                <div class="feedback-form__top">
                    <h2>READY TO START YOUR PROJECT?</h2>
                    <div class="feedback-form__hint">
                        Leave your contact details. We will get back to you soon.
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
                    <a href="mailto:contact@wellore.com">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/mail.svg" alt="mail wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="https://www.facebook.com/wellore/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/facebook.svg" alt="facebook wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="https://www.instagram.com/wellore_com/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/instagram.svg" alt="instagram wellore.com">
                    </a>
                </div>
                <div class="socials-item">
                    <a href="https://ru.pinterest.com/wellore_com/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/pinterest.svg" alt="pinterest wellore.com">
                    </a>
                </div>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/wellorepromoscreen_caschar.png" alt="wellorepromoscreen_caschar">
        </div>
    </div>
</section>