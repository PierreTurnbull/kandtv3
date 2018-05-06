<?php
require_once "../src/connect.php";
require_once "../src/functions.php";

$imgSrc = getElement($connection, $_POST["id"],"img-src");
$newImg = $_FILES["img"]["error"] !== 4;
if ($newImg) {
    unlink("../img/" . $imgSrc);
    $src = $_FILES["img"]["tmp_name"];
    $dest = "../img/" . basename($_FILES["img"]["name"]);
    move_uploaded_file($src, $dest);
}
$queryImg = ($newImg ? ",`img-src`=:imgSrc" : "");
$queryStr = "
    UPDATE
        `page`
    SET
        `title`=:title,
        `h1`=:h1,
        `p`=:p,
        `span-class`=:spanClass,
        `span-text`=:spanText,
        `img-alt`=:imgAlt" .
        $queryImg . "
    WHERE
        `id`=:id";
echo "\"" . $queryStr . "\"";
$stmt = $connection->prepare($queryStr);
$stmt->bindParam(":title", $_POST["title"]);
$stmt->bindParam(":h1", $_POST["h1"]);
$stmt->bindParam(":p", $_POST["p"]);
$stmt->bindParam(":spanClass", $_POST["span-class"]);
$stmt->bindParam(":spanText", $_POST["span-text"]);
$stmt->bindParam(":imgAlt", $_POST["img-alt"]);
if ($newImg) {
    $stmt->bindValue(":imgSrc", basename($_FILES["img"]["name"]));
}
$stmt->bindParam(":id", $_POST["id"]);
$stmt->execute();
header("Location: index.php");