<?php

/**
 *  Wellore Theme functions and definitions
 * 
 */

add_action('wp_enqueue_scripts', function () {
    // подключение styles
    wp_enqueue_style('main', get_stylesheet_uri(), array(), '7.0');
    wp_enqueue_style('font', get_template_directory_uri() . '/assets/fonts/Lato/stylesheet.css', array(), '7.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate/animate.min.css', array(), '7.0');
    wp_enqueue_style('primary', get_template_directory_uri() . '/assets/styles/style.css', array(), '7.0');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/styles/responsive.css', array(), '7.0');


    // отключение стандартного jquery
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');

    // подключение scripts
    // wp_register_script('jquery-3.6.0', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
    wp_register_script('jquery-3.6.0', get_template_directory_uri() . '/assets/scripts/jquery-3.6.0.min.js', '3.6.0', true);
    wp_enqueue_script('jquery-3.6.0');
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery-3.6.0'), '1.2.2', true);
    wp_enqueue_script('primary', get_template_directory_uri() . '/assets/scripts/script.js', array('jquery-3.6.0'), '7.0', true);
});



// add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');




// регистрация меню
add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'main_desk_menu' => __('Primary desktop menu', 'area'),
        'main_mob_menu' => __('Primary mobile menu', 'area'),
        'footer_menu' => __('Footer menu', 'area'),
    ));
});


// расширение класса Меню
class My_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"header__desk-sub-wrap\"><ul class=\"header__desk-sub\">\n";
    }
}


// Добавление SVG в список разрешенных для загрузки файлов.
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/**
 * Добавляет ссылку на дублирование поста в админку
 */
// Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
function true_duplicate_post_as_draft()
{
    if (empty($_GET['post'])) {
        wp_die('Нечего дублировать!');
    }
    if (!isset($_GET['true_duplicate_nonce']) || !wp_verify_nonce($_GET['true_duplicate_nonce'], basename(__FILE__))) {
        return;
    }
    $post_id = absint($_GET['post']);
    $post = get_post($post_id);
    $current_user = wp_get_current_user();
    $new_post_author = $current_user->ID;

    if ($post) {
        $args = array(
            'comment_status' => $post->comment_status,
            'ping_status'    => $post->ping_status,
            'post_author'    => $new_post_author,
            'post_content'   => $post->post_content,
            'post_excerpt'   => $post->post_excerpt,
            'post_parent'    => $post->post_parent,
            'post_name'      => $post->post_name,
            'post_password'  => $post->post_password,
            'post_status'    => 'draft',
            'post_title'     => $post->post_title,
            'post_type'      => $post->post_type,
            'to_ping'        => $post->to_ping,
            'menu_order'     => $post->menu_order
        );
        $new_post_id = wp_insert_post($args);
        $taxonomies = get_object_taxonomies($post->post_type);
        foreach ($taxonomies as $taxonomy) {
            $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
            wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
        }
        $post_meta = get_post_meta($post_id);
        if ($post_meta) {
            foreach ($post_meta as $meta_key => $meta_values) {
                if ('_wp_old_slug' == $meta_key) {
                    continue;
                }
                foreach ($meta_values as $meta_value) {
                    add_post_meta($new_post_id, $meta_key, $meta_value);
                }
            }
        }
        wp_safe_redirect(add_query_arg(array('action' => 'edit', 'post' => $new_post_id), admin_url('post.php')));
        exit;
    } else {
        wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
    }
}
add_action('admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft');
add_filter('post_row_actions', 'true_duplicate_post_link', 10, 2);
function true_duplicate_post_link($actions, $post)
{
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url(add_query_arg(array('action' => 'true_duplicate_post_as_draft', 'post' => $post->ID), 'admin.php'), basename(__FILE__), 'true_duplicate_nonce') . '">Дублировать</a>';
    }
    return $actions;
}
