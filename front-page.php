<?php

/**modele footer.php ?> */ ?>
<?php get_header(); ?>

<main>
    <code>front-page.php</code>

    <section class="blocflex">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                //the_title('<h1>', '</h1>');
                //the_permalink(); 
        ?>
                <article>
                    <h3><a href="<?php the_permalink() ?>"><?= get_the_title() ?> </a></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                </article>
        <?php endwhile;
        endif; ?>

    </section>
</main>
<?php get_footer(); ?>