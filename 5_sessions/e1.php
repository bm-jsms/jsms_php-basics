<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Profile
    </title>
</head>
<body>
    <?php if (isset($_SESSION["id"])): ?>
        <h1>
            Hello, <?= $_SESSION["username"] ?>!
        </h1>
        <p>
            Your email is <?= $_SESSION["email"] ?>.
        </p>
    <?php else: ?>
        <h1>
            You are not logged in!
        </h1>
    
    <?php endif; ?>
    
</body>
</html>