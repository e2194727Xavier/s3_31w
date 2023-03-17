<?php

/**modele footer.php ?> */ ?>
<?php get_header(); ?>

<main class="site__main">
    <h3>index.php</h3>

    <section class="markdown">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content();
                the_excerpt();
            endwhile;
        endif;
        ?>
    </section>



</main>
<?php get_footer(); ?>