<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Image upload
    </title>
</head>
<body>
    <form action="e3-server.php" method="post" enctype="multipart/form-data" >

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <br>
        <label for="image">Image</label>
        <input type="file" name="image" id="image" placeholder="Enter your age">
        <br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>