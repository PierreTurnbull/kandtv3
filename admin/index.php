<?php
/**
 * Created by PhpStorm.
 * User: nounoursnoir
 * Date: 02/05/2018
 * Time: 19:57
 */
echo "<br><br><br><br><br>";
require_once "../src/globals.php";
require_once "../src/connect.php";
require_once "../src/functions.php";

$navData = getNavData($connection);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body role="document">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/admin/">Accueil</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php displayLis($navData); ?>
                </ul>
            </div>
        </div>
    </nav>
    <body>
    </body>
</html>
