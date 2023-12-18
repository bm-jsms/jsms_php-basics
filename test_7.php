<?php

function say_hello() {
    echo "Hello World!<br />";
}

say_hello(); //calling the function => Hello World!


function say_hello_to($word) {
    echo "Hello {$word}!<br />";
}

say_hello_to("World"); //calling the function => Hello World!


function pokemon() {
    $random = rand(1, 3);

    switch ($random) {
        case 1:
            echo "Bulbasaur";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Squirtle";
            break;
        default:
            echo "Pikachu";
            break;
    }
}

pokemon(); //calling the function => A random pokemon


function congrats($name = "Stranger") {
    echo "Congratulations {$name}!<br />";
}

congrats(); //calling the function => Congratulations Stranger!
congrats("Josué"); //calling the function => Congratulations Josué!


function sum(...$numbers) {
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    return $result;
}

$my_array = [1, 2, 3, 4, 5];
echo sum($my_array); // 15

?>