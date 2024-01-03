<?php

$date = DateTime::createFromFormat('l j F Y', 'friday 05 May 2000');

echo $date->format('Y-m-d');

?>