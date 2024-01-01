<?php

$interval = DateInterval::createFromDateString('5 days');
$date = new DateTime();

$date->add($interval);
echo $date->format('d-m-Y') . "<br>";

?>