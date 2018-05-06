<?php
require_once "../src/connect.php";
require_once "../src/functions.php";

$pageContent = getPageContent($connection);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            input, label {
                display: block;
            }
        </style>
    </head>
    <body>
        <h2>Modifier la page "<?= $pageContent["title"] ?>":</h2>
        <form action="/admin/doedit.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?= $pageContent["title"] ?>">
            <label for="h1">h1:</label>
            <input type="text" id="h1" name="h1" value="<?= $pageContent["h1"] ?>">
            <label for="p">paragraphe:</label>
            <input type="text" id="p" name="p" value="<?= $pageContent["p"] ?>">
            <label for="span-class">label type:</label>
            <select name="span-class" id="span-class">
                <option value="danger">danger</option>
                <option value="success">success</option>
            </select>
            <label for="span-text">label text</label>
            <input type="text" id="span-text" name="span-text" value="<?= $pageContent["span-text"] ?>">
            <label for="img">image</label>
            <input type="file" id="img" name="img" accept="image/*" value="<?= $pageContent["img-src"] ?>">
            <label for="img-alt">image's alternative</label>
            <input type="text" id="img-alt" name="img-alt" value="<?= $pageContent["img-alt"] ?>">
            <input type="text" name="id" style="display:none" value="<?= $pageContent["id"] ?>">
            <input type="submit" value="Valider">
        </form>
        <a href="./">retour à l'accueil</a>
    </body>
</html>
