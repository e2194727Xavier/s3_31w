<?php

/**
 * templete-part qui permettra d'afficher un article provenant 
 * d'un conteneur de classe blocFlex
 * pour un article de categorie notes-wp
 */

$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5); //strlen
$duree = substr($titre, -6); /* Pour avoir la vrai durée qui est dans le titre et non 90h */

if (preg_match('/((\d+h))/', $duree, $matches)) {
    $duree = $matches[1]; // 
}

?>
<article class="blocflex__articles">

    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h5>
    <h6><?= $titre_long ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php the_field('enseignant'); ?></p>
    <p><?php the_field('domaine'); ?></p>
    <p><?= $duree ?></p>
</article>