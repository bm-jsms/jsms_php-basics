<?php 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Form with GET method
    </title>
</head>
<body>
    <form action="e1-server.php" method="get" >
    
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" id="age" placeholder="Enter your age">

    <input type="submit" value="Submit">
    </form>
</body>
</html>