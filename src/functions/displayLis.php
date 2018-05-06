<?php
/**
 * For each item in the array $navData, calls displayLi() with the item as argument
 * @param array $navData
 */
function displayLis(array $navData) : void
{
    foreach ($navData as $liData) {
        displayLi($liData);
    }
}