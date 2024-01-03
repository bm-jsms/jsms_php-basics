<?php

date_default_timezone_set('America/los_angeles');

$now = date('Y-m-d H:i:s');
echo $now . "<br>";

echo strtotime($now) . "<br>";
echo strtotime("4 Monday 2024") . "<br>";
echo strtotime("next week") . "<br>";

?>