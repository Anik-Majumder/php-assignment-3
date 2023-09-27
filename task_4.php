<?php

$studentGrades = array(
    "student-1" => array("Math" => 10, "English" => 20, "Science" => 30),
    "student-2" => array("Math" => 80, "English" => 90, "Science" => 72),
    "student-3" => array("Math" => 59, "English" => 64, "Science" => 85)
);

function averageGrade($ary)
{
    foreach ($ary as $students => $grades) {
        $adding = 0;
        echo PHP_EOL;
        echo "$students grades are: ";
        foreach ($grades as $key => $value) {
            echo "$key: $value, ";
            $adding = $adding + $value;
        }
        $average = $adding / sizeof($grades);
        echo "Average: $average \n";
    }
}

averageGrade($studentGrades);









?>