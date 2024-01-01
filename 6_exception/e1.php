<?php

try {
    $result = 10 / 0;
    echo $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

echo "<br>";

echo "This will be printed even if the exception is thrown";

?>