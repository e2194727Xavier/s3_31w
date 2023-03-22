<?php

/**modele footer.php ?> */ ?>
<?php get_header(); ?>
<h3>single.php</h3>
<main class="site__main">
    <section class="markdown">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content();
                the_excerpt();
                the_field('<h2>enseignant</h2>');
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>