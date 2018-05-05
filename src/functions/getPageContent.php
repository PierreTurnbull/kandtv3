<?php
function getPageContent(PDO $connection)
{
    $queryStr = "
    SELECT
        `h1`,
        `p`,
        `span-class`,
        `span-text`,
        `img-alt`,
        `img-src`,
        `nav-title`
    FROM
        `page`
    WHERE
        `id` = " . $_GET["id"];
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
}