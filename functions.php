<?php
function my_go_project_enqueue_styles() {
    // Подключение основного стиля темы
    wp_enqueue_style('my-go-project-style', get_stylesheet_uri());

    // Подключение Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'my_go_project_enqueue_styles');
?>