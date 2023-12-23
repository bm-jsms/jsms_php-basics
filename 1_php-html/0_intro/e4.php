<?php
$users = [
   "John",
    "Jane",
    "James",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cycles
    </title>
</head>
<body>
    <ul>
        <?php for($i = 0;$i <10 ;$i++): ?>
            <li>
                <?= $i ?>
            </li>
        <?php endfor; ?>

    </ul>

    <h1>
        List of users
    </h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li>
                <?= $user ?>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>