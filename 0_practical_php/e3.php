<?php

//max
$result = max(1,2,3,4,5,6,7,8,9,10);
var_dump($result); // 10

//min
$result = min(1,2,3,4,5,6,7,8,9,10);
var_dump($result); // 1

//abs
$result = abs(-50);
var_dump($result); // 50

//round
$result = round(7.8912345, 2);
var_dump($result); // 7.89

//rand
$result = rand(1,10);
var_dump($result); // 1-10

//ceil
$result = ceil(7.8912345);
var_dump($result); // 8

//floor
$result = floor(7.8912345);
var_dump($result); // 7

//sqrt
$result = sqrt(9);
var_dump($result); // 3

//pow
$result = pow(2,3);
var_dump($result); // 8

//fmod
$result = fmod(20,7);
var_dump($result); // 6

//sin
$result = sin(90);
var_dump($result); // 0.89399666360056

//cos
$result = cos(0);
var_dump($result); // 1

//tan
$result = tan(0);
var_dump($result); // 0

//pi
$result = pi();
var_dump($result); // 3.1415926535898


?>