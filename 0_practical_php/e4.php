<?php 

//Christmas Tree
function christmasTree($height) {
    for ($i = 1; $i <= $height; $i++) {
       echo str_repeat("*", $height) . "<br>";
    }
}

christmasTree(5); 

?>