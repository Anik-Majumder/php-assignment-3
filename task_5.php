<?php
function randomPasswordGenaretor($length)
{
    $allCarecters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';

    $randompassword = substr(str_shuffle($allCarecters), 0, $length);
    echo "Password is: $randompassword";
}

randomPasswordGenaretor(12);

?>