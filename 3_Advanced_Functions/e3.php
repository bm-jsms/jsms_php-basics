<?php

#   $variable = "global";
#   echo $variable; // global   

#   function test() {
#       echo $variable;
#   }

#   test(); // Notice: Undefined variable



#   $variable = "global";

#   function test() {
#       global $variable;
#       echo $variable;
#   }
 
#   test(); // global



$variable = "global";

function test() {
    echo $GLOBALS["variable"];
}

test(); // global

?>