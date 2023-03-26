<?php

/**
 * templete-part qui permettra d'afficher un article provenant 
 * d'un conteneur de classe blocFlex
 * pour un article de categorie notes-wp
 */
$titre = get_the_title(); //on recoit le titre de la note
$titreNet = substr(str_replace("-", " ", get_the_title()), 3);
?>
<article class="blocflex__articles">
    <code>categorie-notes-wp.php</code>
    <h5><a href=<?php the_permalink(); ?>> <?= $titreNet ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>