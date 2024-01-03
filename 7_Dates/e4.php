<?php

$today = new DateTime();
$neighbour_birthday = new DateTime('2000-05-05');
$interval = $neighbour_birthday->diff($today);

?>