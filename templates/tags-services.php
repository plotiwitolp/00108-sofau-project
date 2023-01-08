<div class="tag wow animate__fadeInRight" data-wow-duration="500ms">
    <?php
    $current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());
    $slug = $current_page->post_name;

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
        <div class="tag__item">
            <a href="<?php the_permalink(); ?>" class="<?php
                                                        if ($slug ==  $post->post_name) {
                                                            echo 'hover';
                                                        }
                                                        ?>">
                <?php the_title(); ?>
                <?= $postItem->post_name; ?>
            </a>
        </div>
    <?php
    }
    wp_reset_postdata();
    ?>
</div>