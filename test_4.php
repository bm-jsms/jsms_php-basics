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

?> 