<!-- aside avec menu  -->

<aside class="site__aside">
    <h3>Menu secondaire</h3>

    <!-- getqueryobj pratique pour page archives mais si veut afficher un cour seulement on va enlever le aside -->
    <?php $category = get_queried_object();
    if (isset($category)) {
        $lemenu = $category->slug;
    } else {
        $lemenu = "notes-wp";
    }
    wp_nav_menu(array(
        "menu" => $lemenu,
        "conteneur" => "nav"
    )); ?>

</aside>