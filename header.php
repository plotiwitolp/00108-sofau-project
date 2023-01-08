<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?>: <?php bloginfo('description'); ?></title>
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body oncontextmenu="return true;">
    <div class="page-wrap">
        <header>
            <div class="section">
                <div class="header">
                    <div class="header-left-top">
                        <div class="header__logo">
                            <?php the_custom_logo($blog_id); ?>
                        </div>
                        <nav class="header__desk-wrap">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main_desk_menu',
                                'container'       => 'ul',
                                'menu_class'      => 'header__desk',
                                'walker' => new My_Walker_Nav_Menu()
                            )); ?>
                        </nav>
                        <div class="nav-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="header-right-bottom">
                        <div class="header-right-bottom-wrap">
                            <nav class="header__mob-wrap">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'main_mob_menu',
                                    'container'       => 'ul',
                                    'menu_class'      => 'header__mob',

                                )); ?>
                            </nav>
                            <div class="button-wrapper">
                                <div class="button header__contact-us">
                                    <a class="feedback-form-link" href="#feedback-form">Contact Us</a>
                                </div>
                            </div>

                            <div class="header__socials">
                                <div class="socials">
                                    <div class="socials-item">
                                        <a href="mailto:<?php the_field('socials_mail', 1226); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/mail.svg" alt="mail wellore.com">
                                        </a>
                                    </div>
                                    <div class="socials-item">
                                        <a href="<?php the_field('socials_facebook', 1226); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/facebook.svg" alt="facebook wellore.com">
                                        </a>
                                    </div>
                                    <div class="socials-item">
                                        <a href="<?php the_field('socials_instagram', 1226); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/instagram.svg" alt="instagram wellore.com">
                                        </a>
                                    </div>
                                    <div class="socials-item">
                                        <a href="<?php the_field('socials_pinterest', 1226); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/socials/pinterest.svg" alt="pinterest wellore.com">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>