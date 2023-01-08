<?php get_header(); ?>

<div class="section">
    <div class="single-post">
        <h1 style="color: white;"><?php single_post_title(); ?></h1>
        <div class="post_body">
            <?php the_content(); ?>
        </div>
    </div>
    <!--  feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>
</div>
<?php get_footer();   ?>