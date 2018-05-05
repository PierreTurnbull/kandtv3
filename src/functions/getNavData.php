<?php
function getNavData(PDO $connection)
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