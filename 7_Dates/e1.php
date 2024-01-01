<?php

$interval = date_interval_create_from_date_string('5 days');
$date = date_create();

date_add($date, $interval);
echo date_format($date, 'd-m-y') . "<br>";

?>