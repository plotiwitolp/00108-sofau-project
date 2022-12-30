<?php
/*
Template Name: Шаблон страницы Contacts
*/

get_header();
?>
<div class="section contacts">
    <section>
        <h1 class="wow animate__fadeInLeft" data-wow-duration="500ms">Contacts</h1>
        <div class="contacts_body">
            <p>
                Email: test@test.com
            </p>
            <p>
                Phone: +1 234 567 89
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, earum voluptatibus ratione quam illum laudantium tempora officiis at animi optio omnis nihil, corporis iusto voluptates expedita. Nesciunt saepe fuga temporibus.
            </p>
            <img style="width: 100%" src="<?php bloginfo('template_url'); ?>/assets/images/old_map.png" alt="old_map">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, earum voluptatibus ratione quam illum laudantium tempora officiis at animi optio omnis nihil, corporis iusto voluptates expedita. Nesciunt saepe fuga temporibus.
            </p>
        </div>
    </section>
    <!--  feedback form -->
    <?php get_template_part('templates/feedback-form'); ?>

</div>

<?php get_footer(); ?>