<?php

$date = new DateTime();
# $date->modify('+1 day');
$date->modify('-1 day');

echo $date->format('Y-m-d');

?>