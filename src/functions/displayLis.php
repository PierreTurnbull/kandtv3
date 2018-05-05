<?php
function displayLis(array $navData)
{
    foreach ($navData as $liData) {
        displayLi($liData);
    }
}