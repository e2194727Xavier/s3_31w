<?php

/**
 * template footer.php 
 */
?>
<?php if (has_nav_menu('footer-menu')) { ?>
    <nav class="footer-menu">
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
    </nav>
<?php } ?>


<footer class="site__footer">
    <section class="lien">Lien #1</section>
    <section class="lien">Lien #2</section>
    <section class="lien">Lien #3</section>
</footer>

<?php wp_footer(); ?>
</body>

</html>