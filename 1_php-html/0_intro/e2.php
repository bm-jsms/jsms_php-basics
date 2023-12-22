<?php
    $name = "Josué";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML</title>
</head>
<body>
    <?php
        echo "<h1>PHP with HTML</h1>";
        echo "<b>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</b>";
    ?>
    <!-- 
        Less code, more readable, and easier to maintain.
    -->
    <?=
        "<h2>PHP with HTML</h2>
        <b>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</b>" 
    ?>
    <h3>My name is <?= $name ?></h3>
</body>
</html>