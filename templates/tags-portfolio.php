<div method="get" class="tag wow animate__fadeInRight" data-wow-duration="500ms">
    <?php
    $args = array(
        'taxonomy' => 'post_tag',
        'orderby' => 'id',
    );
    $tags = get_tags($args);
    foreach ($tags as $tag) {
        setup_postdata($tag);
    ?>
        <div class="tag__item">
            <a href="<?php echo '?' . 'slug=' . $tag->slug ?>" class="<?php
                                                                        if ($_GET['slug'] ==  $tag->slug) {
                                                                            echo 'hover';
                                                                        }
                                                                        ?>">
                <?= $tag->name; ?>
            </a>
        </div>
    <?php
    }
    wp_reset_postdata();
    ?>
</div>