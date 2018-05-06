<?php
/**
 * Returns a string corresponding to the value of the element $element in the row whose id is $id in table `page`
 * @param PDO $connection
 * @param int $id
 * @param string $element
 * @return string
 */
function getElement(PDO $connection, int $id, string $element) : string
{
    $queryStr = "
    SELECT
        :element
    FROM
        `page`
    WHERE
        `id` = :id";
    $stmt = $connection->prepare($queryStr);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":element", $element);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0][$element];
}