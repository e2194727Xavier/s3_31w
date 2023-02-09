<?php

// Enfiler la feuille de style
function ajouter_styles()
{
    wp_enqueue_style(
        '31w-style-principal', //id de la feuille de style
        get_template_directory_uri() . '/style.css', //add url de la feuille de style
        array(), //dependance avec les autres feuilles de style 
        filemtime(get_template_directory() . '/style.css') // la version de la dernière feuille de style
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');
//add filter retourne une valeur add action comme addeventlistener

/*------------------------------------------- add theme support */
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    )
);

/** add costum logo */
add_theme_support('custom-logo');
