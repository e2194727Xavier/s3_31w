<?php

/**modele footer.php ?> */ ?>
<?php get_header(); ?>

<main class="site__main">
    <code>front-page.php</code>

    <section class="blocflex">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                if (in_category('galerie')) {
                    get_template_part("template-parts/categorie", "galerie");
                } else {
                    get_template_part("template-parts/categorie", "notes-wp");
                }
            endwhile;
        endif; ?>
    </section>
</main>
<?php get_footer(); ?>