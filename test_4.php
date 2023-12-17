<?php

$ages = array(
    'Peter' => 35,
    'Ben' => 37,
    'Josué' => 18
);

echo "Peter is " . $ages['Peter'] . " years old.";
echo "<br>";
echo "Josué is $ages[Josué] years old.";
echo "<br>";


$people = array(
    'online' => array('Jsms', 'David'),
    'offline' => array('John', 'Rob'),
    'away' => array('Arthur', 'James')
);
echo $people['online'][0]; // "David"


echo count($people); // 3
echo "<br>";
echo count($people['online']); // 2


array_push($people['online'], 'Javier'); // Add element at the end of the array


is_array($people); // true


//explode
$fruit = "apple,banana,orange";

$fruitArray = explode(",", $fruit); // Array ( [0] => apple [1] => banana [2] => orange )

//implode
$fruitString = implode(",", $fruitArray); // apple,banana,orange


?> 