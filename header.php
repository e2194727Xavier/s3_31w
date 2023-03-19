<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>31W-Maryline Carrier</title>
    <?php wp_head(); ?>
</head>

<body class="site <?= (is_front_page() ? "no-aside" : "");  ?> ">
    <header class="site__entete">
        <section class="logomenu">
            <?php the_custom_logo(); ?>
            <div class="logomenu-container">
                <div class="menusearch">
                    <?= get_search_form(); ?>
                </div>
                <div class="menu-container">
                    <label for="chkBurger" class="burger">
                        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu" width="32" height="32">
                    </label>
                    <input type="checkbox" id="chkBurger">
                    <?php wp_nav_menu(array(
                        'menu' => 'entete',
                        'container' => 'nav'
                    )); ?>
                </div>
            </div>
        </section>

        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </header>
    <?php
    if (is_front_page() == false) {
        get_template_part("template-parts/aside");
    }
    ?>