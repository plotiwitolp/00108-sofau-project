<?php
$title1;
$title2;
$body1;
$body2;
?>
<section class="h2-info">
    <div class="h2-info__item wow animate__fadeInLeft" data-wow-duration="500ms">
        <h2><?= $title1; ?></h2>
        <div class="h2-info__body">
            <p>
                <?= $body1; ?>
            </p>
        </div>
    </div>
    <div class="h2-info__item wow animate__fadeInRight" data-wow-duration="500ms">
        <h2><?= $title2; ?></h2>
        <div class="h2-info__body">
            <p>
                <?= $body2; ?>
            </p>
        </div>
    </div>
</section>