<!-- aside avec menu  -->

<aside class="site__aside">
    <!-- getqueryobj pratique pour page archives mais si veut afficher un cour seulement on va enlever le aside en utilisant -->
    <?php
    $lemenu = "notes-wp";

    if (in_category('cours')) {
        $lemenu = "cours";
    }

    wp_nav_menu(array(
        "menu" => $lemenu,
        "conteneur" => "nav"
    )); ?>

</aside>