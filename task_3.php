<?php

$grades = array(85, 92, 78, 88, 95);

function sortingArrayInAssendingOrder($num)
{
    rsort($num);
    print_r($num);
}

sortingArrayInAssendingOrder($grades);

?>