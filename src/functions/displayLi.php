<?php
/**
 * Displays a nav item filled with informations in $liData
 * @param array $liData
 */
function displayLi(array $liData) : void
{
    $active = "";
    if (isset($_GET["id"]) && $_GET["id"] === $liData["id"]) {
        $active = "class='active'";
    }
    ?>
    <li <?= $active ?>>
        <a href=<?= "show.php?id=" . $liData["id"] ?>>
            <?= $liData["id"] . " - " . $liData["title"] ?>
        </a>
    </li>
    <?php
}