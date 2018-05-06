<?php
/**
 * Returns an array with all informations of the page whose id is $_GET["is"]
 * @param PDO $connection
 * @return array
 */
function getPageContent(PDO $connection) : array
{
    $queryStr = "
    SELECT
        `title`,
        `id`,
        `h1`,
        `p`,
        `span-class`,
        `span-text`,
        `img-alt`,
        `img-src`
    FROM
        `page`
    WHERE
        `id` = " . $_GET["id"];
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
}