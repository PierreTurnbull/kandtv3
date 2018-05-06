<?php
require_once "../src/connect.php";
require_once "../src/functions.php";

$imgSrc = getElement($connection, $_POST["id"], "img-src");
echo "../img/" . $imgSrc;
unlink("../img/" . $imgSrc);
$queryStr = "
    DELETE FROM
        `page`
    WHERE
        `id`=:id";
$stmt = $connection->prepare($queryStr);
$stmt->bindParam(":id", $_POST["id"]);
$stmt->execute();
header("Location: ./");