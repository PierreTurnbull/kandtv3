<?php
/**
 * Created by PhpStorm.
 * User: nounoursnoir
 * Date: 02/05/2018
 * Time: 19:57
 */
require_once "../src/connect.php";
require_once "../src/functions.php";

$navData = getNavData($connection);
?>
<!doctype html>
<html lang="en">
<?php
include "includes/head.php";
?>
    <body role="document">
    <?php include "includes/header.php"; ?>
    <h2 style="margin-top:100px">Formulaire pour créer une nouvelle page:</h2>
        <form action="/admin/doadd.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <label for="h1">h1:</label>
            <input type="text" id="h1" name="h1">
            <label for="p">paragraphe:</label>
            <input type="text" id="p" name="p">
            <label for="span-class">label type:</label>
            <select name="span-class" id="span-class">
                <option value="danger">danger</option>
                <option value="success">success</option>
            </select>
            <label for="span-text">label text</label>
            <input type="text" id="span-text" name="span-text">
            <label for="img">image</label>
            <input type="file" id="img" name="img" accept="image/*">
            <label for="img-alt">image's alternative</label>
            <input type="text" id="img-alt" name="img-alt">
            <input type="submit" value="Valider">
        </form>
    </body>
</html>
