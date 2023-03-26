<article class="note-info">

    <code>single-cours.php</code>
    <!-- nettoyer le titre de la note  -->
    <?php
    $titre = get_the_title(); //on recoit le titre de la note
    $titreNet = substr(str_replace("-", " ", get_the_title()), 3); //nettoyer le titre de la note
    ?>

    <h1><?= ucfirst($titreNet); ?></h1>

    <div>
        <!-- placer le contenu du markdowm -->
        <?php the_content(); ?>
    </div>
</article>



<!-- <article class="carte-information">
    <code>single-cours.php</code>
    <?php the_title('<h1>', '</h1>'); ?>
    <div>
        <?php the_content(); //le contenu 
        ?>
    </div>
</article> -->