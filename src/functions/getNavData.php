<?php
/**
 * Returns an array that contains all ids and titles by peer in table `page`
 * @param PDO $connection
 * @return array
 */
function getNavData(PDO $connection) : array
{
    $queryStr = "
    SELECT
        `id`,
        `title`
    FROM
        `page`";
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}