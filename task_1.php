<?php

$text = "The quick brown fox jumps over the lazy dog.";

function convertToLowerCase($tex)
{
    $lowerCase = strtolower($tex);
    $replaced = str_replace("brown", "red", $lowerCase);
    echo $replaced;
}

convertToLowerCase($text);

?>