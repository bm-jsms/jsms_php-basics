<?php 

// && and

$value1 = true;
$value2 = false;

$result = $value1 && $value2;

var_dump($result); //false

// || or

$result = $value1 || $value2;

var_dump($result); //true

// ! not

$result = !$value1;

var_dump($result); //false

//xor

$result = $value1 xor $value2;

var_dump($result); //true

?>