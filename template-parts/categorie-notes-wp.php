<?php

/**
 * templete-part qui permettra d'afficher un article provenant 
 * d'un conteneur de classe blocFlex
 * pour un article de categorie notes-wp
 */
$titre = get_the_title();
if (substr($titre, 0, 2) === "00") {
    $titre = substr($titre, 2);
} else if (substr($titre, 0, 1) === "0") {
    $titre = substr($titre, 1);
}
?>
<article class="blocflex__articles">
    <h5><a href=<?php the_permalink(); ?>> <?= $titre ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>