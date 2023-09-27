<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function removeEvenNumbersFromArray($num)
{
    for ($i = 0; $i < 10; $i++) {
        if ($num[$i] % 2 == 0) {
            unset($num[$i]);
        }

    }
    print_r($num);
}

removeEvenNumbersFromArray($numbers);



?>