<?php

/**modele footer.php ?> */


$enseignant = get_field('enseignant');
$programme = get_field('domaine');


?>
<?php get_header(); ?>

<main class="site__main">
    <section class="markdown">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content();
                the_excerpt();
                if ($enseignant || $programme) {
                    echo "<p class='neonGreen'>" . $enseignant . "<p>";
                    echo "<p class='neonGreen'>" . $programme . "<p>";
                };
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>