<?php
require_once "../src/connect.php";

$src    = $_FILES["img"]["tmp_name"];
$dest   = "../img/" . basename($_FILES["img"]["name"]);
move_uploaded_file($src, $dest);
$queryStr = "
    INSERT INTO
        `page`
    SET
        `title`=:title,
        `h1`=:h1,
        `p`=:p,
        `span-class`=:spanClass,
        `span-text`=:spanText,
        `img-alt`=:imgAlt,
        `img-src`=:imgSrc";
$stmt = $connection->prepare($queryStr);
$stmt->bindParam(":title", $_POST["title"]);
$stmt->bindParam(":h1", $_POST["h1"]);
$stmt->bindParam(":p", $_POST["p"]);
$stmt->bindParam(":spanClass", $_POST["span-class"]);
$stmt->bindParam(":spanText", $_POST["span-text"]);
$stmt->bindParam(":imgAlt", $_POST["img-alt"]);
$stmt->bindValue(":imgSrc", basename($_FILES["img"]["name"]));
$stmt->execute();
header("Location: index.php");