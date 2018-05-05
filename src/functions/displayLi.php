<?php
function displayLi($liData)
{
    $active = "";
    if (isset($_GET["id"]) && $_GET["id"] === $liData["id"]) {
        $active = "class='active'";
    }
    ?>
    <li <?= $active ?>>
        <a href=<?= "show.php?id=" . $liData["id"] ?>>
            <?= $liData["title"] ?>
        </a>
    </li>
    <?php
}