<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" >
    
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="main-menu  main-menu--opaque">
            <div class="container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="СИПКомфорт логотип">
                </a>

                <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => 'main-menu__list',
                        'link_before' => '<span class="main-menu__link">',
                        'link_after' => '</span>'
                    );

                    wp_nav_menu($args);
                ?>

                <img class="menu-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-button.svg" alt="menu button">
            </div>
        </nav>
    </header>