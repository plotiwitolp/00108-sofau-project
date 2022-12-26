<?php
$title;
$body;
$img;
?>
<section class="h2-info h2-info__marg">
    <div class="h2-info__item h2-info__wrap wow animate__fadeInLeft" data-wow-duration="500ms">
        <div class="h2-info__text">
            <h2><?= $title; ?></h2>
            <div class="h2-info__body">
                <p>
                    <?= $body; ?>
                </p>
            </div>
        </div>
        <div class="h2-info__pic">
            <img src="<?= $img ?>" alt="h2-info__pic">
        </div>
    </div>
</section>