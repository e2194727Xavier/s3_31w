<?php

/**
 * Template footer.php
 */
?>
<footer class="site__footer">
    <section class="footer__widget">
        <div><?php dynamic_sidebar('pied-page-1'); ?></div>
        <div><?php dynamic_sidebar('pied-page-2'); ?></div>
        <div><?php dynamic_sidebar('pied-page-3'); ?></div>
    </section>
    <section class="footer__lien">
        <div><?php wp_nav_menu(array(
                    "menu" => "footer-menu",
                    "container" => "nav",
                )); ?></div>
        <div class="footer__infoPerso">
            <?php the_custom_logo(); ?>
            <p>Copyright MC ~ 2023 ~ Cours WordPress collège Maisonneuve avec Eddy Martin</p>
        </div>
    </section>

</footer>
<?php wp_footer(); ?>
</body>

</html>