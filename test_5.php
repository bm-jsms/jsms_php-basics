<?php

//if , else if, else
$age = 21;

if ($age <= 13) {
    echo "Child.";
} elseif ($age > 13 && $age < 19) {
    echo "Teenager.";
} else {
    echo "Adult.";
}

//switch
$color = "red";

switch ($color) {
    case "red":
        echo "The color is red.";
        break;
    case "green":
        echo "The color is green.";
        break;
    default:
        echo "Neither";
}

//match
$color = "red";

match ($color) {
    "red" => print "The color is red.",
    "green" => print "The color is green.",
    default => print "Neither",
};

?>