<?php

/**
 * Template name: Evenement
 *
 */

//  le header est ce qui permet de retrouve le name evnement dans l'admin de wordpress
?>
<?php get_header(); ?>
<main class="site__main">
    <?php
    if (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail('thumbnail'); ?> <!--  //ajout de limage  -->
        <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?>
        <p>L'adresse de l'evénement<?php the_field('adresse'); ?></p>
        <p>La date et l'heure de l'événement<?php the_field('date_de_levenement'); ?></p>
    <?php endif; ?>
</main><!-- #main -->
<?php
get_footer();
