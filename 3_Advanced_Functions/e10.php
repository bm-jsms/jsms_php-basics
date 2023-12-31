<?php

function add (int $a, int $b): int {
    return $a + $b;
}

echo add(1, 22); // 23

echo add(1.5, 2.5); // 3

echo add('Hello', 3); // error

?>