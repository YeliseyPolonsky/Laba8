<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Изучение Go Lang: особенности языка программирования, его функциональные возможности, горутины и каналы, а также ресурсы для обучения и сообщество разработчиков. Пошаговые уроки и полезные материалы.">
    <meta name="keywords" content="Go Lang, язык программирования Go, изучение Go, Go для начинающих, Go горутины, Go каналы, Go Lang обучение, Go особенности, Go сообщество, Go уроки, Go для серверных технологий">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Go_Logo_Blue.svg" alt="Go Logo">
            <h1>Проект на Go Lang</h1>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#start">Особенности</a></li>
            <li><a href="#features">Начало работы</a></li>
            <li><a href="#tutorials">Уроки</a></li>
            <li><a href="#community">Сообщество</a></li>
            <li><a href="#resources">Ресурсы</a></li>
        </ul>
    </nav>