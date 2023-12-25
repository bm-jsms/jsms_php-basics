<?php
$users = array(
    array(
        "id" => 0,
        "username" => "John",
    ),
    array(
        "id" => 1,
        "username" => "Josué",
    ),
    array(
        "id" => 2,
        "username" => "Jane",
    ),
);

$name = "Josué";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Variables from PHP to JS
    </title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($users) ?>');
        console.log(users);

        let name = '<?= $name ?>';
    </script>
</body>
</html>