<?php get_header(); ?>
<div class="section post">
    <section>
        <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php single_post_title(); ?></h1>
        <div class="post_body">
            <?php the_content(); ?>
        </div>
    </section>
    <!--  feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>
</div>

<?php get_footer(); ?>