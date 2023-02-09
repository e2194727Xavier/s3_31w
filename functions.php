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

/**-------------------------------------------add costum logo */
add_theme_support('title-tag');

add_theme_support(
    'custom-logo',
    array(
        'height' => 150,
        'width'  => 150,
    )
);


/*-------------------------------------------add menu 
enregistre les deux classes css pour le menu_entete et menu_footer */

function enregistrement_des_menus()
{
    register_nav_menus(array(
        'menu_entete' => 'Menu entête',
        'menu_footer' => 'Menu pied de page',
    ));
}

add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
