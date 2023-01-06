<?php get_header(); ?>
<div class="section index">
    <section>
        <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms"><?php single_post_title(); ?></h1>
        <div class="contacts_body">
            <?php the_content(); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>