<?php

print_r($_REQUEST);

$words = array("moon", "sky", "sun");

if($_REQUEST["word1"] == $words[0] ) {
    echo "Correct!";
} else {
    echo "Wrong!";
}

echo "<br>";

if($_REQUEST["word2"] == $words[1] ) {
    echo "Correct!";
} else {
    echo "Wrong!";
}

echo "<br>";

if($_REQUEST["word3"] == $words[2] ) {
    echo "Correct!";
} else {
    echo "Wrong!";
}
    

?>