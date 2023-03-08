<?php

/**modele footer.php ?> 
 * représente le modèle du thème
 */ ?>
<?php get_header(); ?>

<main class="site__main">
    <code>front-page.php</code>

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