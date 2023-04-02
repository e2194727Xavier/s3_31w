<?php

/**modele footer.php ?> 
 * représente le modèle du thème
 */ ?>
<?php get_header(); ?>

<main class="site__main">
    <!-- peut avoir plusieurs sections  -->
    <section class="viewport">
        <h1>Tp2</h1>
        <h4>Auteur: Maryline Carrier</h4>
        <h4>Introduction à un gestionnaire de contenue</h4>
        <?php wp_nav_menu(array(
            "menu" => "evenement",
            "conteneur" => "nav",
            "container_class" => "menu__bloc"
        )); ?>
    </section>
    <section class="blocflex">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                $ma__categorie = "notes-wp";
                if (in_category('galerie')) {
                    $ma__categorie = "galerie";
                };
                get_template_part("template-parts/categorie", $ma__categorie);
            endwhile;
        endif; ?>
    </section>
</main>
<?php get_footer(); ?>