<?php
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$path = "uploads/$basename";

move_uploaded_file($image, $path);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $path ?>" alt="image">
</body>
</html>