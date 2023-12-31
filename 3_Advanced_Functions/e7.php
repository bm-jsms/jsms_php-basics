<?php

// anonymous function

$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World'); // Hello World
$greet('PHP'); // Hello PHP

?>