<section class="team">
    <h2 class="wow animate__fadeInLeft" data-wow-duration="500ms">team</h2>
    <div class="team__deck">
        <?php
        $posts = get_posts([
            'numberposts' => -1,
            'category' => 52,
            'order' => 'ASC',
            'post_type' => 'post',
            'suppress_filter' => true,
        ]);
        foreach ($posts as $post) {
            setup_postdata($post);
        ?>
            <div class="team__cart wow animate__fadeInUp" data-wow-duration="500ms">
                <div class="team__cart-photo">
                    <img class="desk_img" src="<?php the_field('team_photo_desk'); ?>" alt="guy">
                    <img class="mob_img" src="<?php the_field('team_photo_mob'); ?>" alt="guy_mob">
                </div>
                <div class="team__cart-name">
                    <?php the_field('team_name'); ?>
                </div>
                <div class="team__cart-profession">
                    <?php the_field('team_profession'); ?>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="bright-spot bright-spot-about-us-2">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/bright-spot-about-us-2.svg" alt="bright-spot-about-us-2">
    </div>
</section>