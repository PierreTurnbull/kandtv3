<?php
function displayPageContent(array $pageContent)
{
    ?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?= $pageContent["h1"]; ?></h1>
            <p><?= $pageContent["p"]; ?></p>
            <span class="label label-<?= $pageContent["span-class"] ?>"><?= $pageContent["span-text"] ?></span>
        </div>
        <img class="img-thumbnail" alt="<?= $pageContent["img-alt"] ?>" src="../../img/<?= $pageContent["img-src"] ?>" data-holder-rendered="true">
    </div>
    <?php
}