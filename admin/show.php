<?php
/**
 * Created by PhpStorm.
 * User: nounoursnoir
 * Date: 02/05/2018
 * Time: 19:57
 */
require_once "../src/connect.php";
require_once "../src/functions.php";

$navData        = getNavData($connection);
$pageContent    = getPageContent($connection);
?>
<!doctype html>
<html lang="en">
<?php
include "includes/head.php";
?>
    <body role="document">
    <?php displayPageContent($pageContent); ?>
    </body>
</html>
