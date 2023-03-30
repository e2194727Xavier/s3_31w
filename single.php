<?php

?>
<?php get_header(); ?>
<main class="site__main">
    <section class="markdown">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                if (in_category('cours')) {
                    get_template_part('template-parts/single', 'cours');
                } else (in_category('note-wp')); {
                    get_template_part('template-parts/single', 'note');
                }
            endwhile;
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>