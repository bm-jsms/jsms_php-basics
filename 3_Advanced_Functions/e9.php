<?php
function triangle_area(int $base, int $height, string $name) {
    return "Hello $name, the area of the triangle is " . ($base * $height) / 2; 
};

triangle_area(5, 4, 'Josué'); // Hello Josué, the area of the triangle is 10
triangle_area(10, 10, 'jsms'); // Hello jsms, the area of the triangle is 50

?>