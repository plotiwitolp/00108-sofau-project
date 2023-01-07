</main>
<footer>
    <div class="footer-section">
        <div class="section">
            <nav class="footer-nav">
                <ul>
                    <?php
                    $posts = get_posts([
                        'numberposts' => -1,
                        'category' => 6,
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filter' => true,
                    ]);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <li class="footer-nav__item">
                            <a href="<?php the_permalink(); ?>">
                                <?= $post->post_title; ?>
                            </a>
                        </li>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section">
        <div class="footer-bottom__mail">
            <a href="mailto:<?php the_field('socials_mail', 1226); ?>"><?php the_field('socials_mail', 1226); ?></a>
        </div>
    </div>
    <div class="section">
        <div class="footer-bottom__socials">
            <div class="footer-bottom__socials__item">
                <a href="<?php the_field('socials_youtube', 1226); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/youtube.svg" alt="youtube">
                </a>
            </div>
            <div class="footer-bottom__socials__item">
                <a href="<?php the_field('socials_twitter', 1226); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/twitter.svg" alt="twitter">
                </a>
            </div>
            <div class="footer-bottom__socials__item">
                <a href="<?php the_field('socials_facebook', 1226); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/facebook-footer.svg" alt="facebook">
                </a>
            </div>
            <div class="footer-bottom__socials__item">
                <a href="<?php the_field('socials_google_plus', 1226); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/google-plus.svg" alt="google-plus">
                </a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="copyright">
            <?php the_field('footer_copyright', 1226); ?>
        </div>
        <div class="bright-spot bright-spot-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-4.svg" alt="bright-spot-4">
        </div>
    </div>
</footer>
<div class="full_background">
    <span class="full_background-close">x</span>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>