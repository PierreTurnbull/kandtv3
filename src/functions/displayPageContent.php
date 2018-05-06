<?php
/**
 * Displays page content filled with informations in $pageContent
 * @param array $pageContent
 */
function displayPageContent(array $pageContent) : void
{
    ?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?= $pageContent["h1"]; ?></h1>
            <p><?= $pageContent["p"]; ?></p>
            <span class="label label-<?= $pageContent["span-class"] ?>"><?= $pageContent["span-text"] ?></span>
        </div>
        <img class="img-thumbnail" alt="<?= $pageContent["img-alt"] ?>" src="../../img/<?= $pageContent["img-src"] ?>" data-holder-rendered="true">
        <a href="edit.php?id=<?= $pageContent["id"] ?>">Modifier</a>
        <a href="delete.php?id=<?= $pageContent["id"] ?>">Supprimer</a>
        <a href="/admin/">Retour vers la page d'accueil</a>
    </div>
    <?php
}