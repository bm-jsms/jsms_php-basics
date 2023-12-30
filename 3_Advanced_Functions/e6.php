<?php

$number = 10;

function changeNumber (&$number_m) {
    $number_m = 100;
};

changeNumber($number);

echo $number; // 100

?>