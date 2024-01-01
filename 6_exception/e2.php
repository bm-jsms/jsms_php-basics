<?php

try {
    $pet = readline("Enter your pet's name: ");

    if ($pet != "dog") {
        throw new Exception("You don't have a dog!");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>