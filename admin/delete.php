<?php
require_once "../src/connect.php";
require_once "../src/functions.php";

$title = getElement($connection, $_GET["id"], "title");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Êtes-vous sûr.e de vouloir supprimer la page "<?= $title ?>"?</h2>
        <form action="dodelete.php" method="POST">
            <input type="text" title="id" name="id" value="<?= $_GET["id"] ?>" style="display:none">
            <input type="submit" value="Oui, je veux supprimer cette page">
        </form>
        <a href="./">retour à l'accueil</a>
    </body>
</html>
