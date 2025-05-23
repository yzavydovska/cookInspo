<?php
function mytheme_register_menus() {
  register_nav_menus(array(
    'main-menu' => 'Główne Menu'
  ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

add_theme_support('post-thumbnails');

add_theme_support('title-tag');
function mytheme_register_sidebar() {
    register_sidebar(array(
        'name' => 'Główny pasek boczny',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'mytheme_register_sidebar');
function mytheme_enqueue_scripts() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


?>