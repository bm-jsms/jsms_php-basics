<?php
    $itsRaining = true;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Conditional Statements
    </title>
</head>
<body>
    <?php
        if($itsRaining ) {
            echo "<p>
                Its raining, take an umbrella!
            </p>";
        } else {
            echo "<p>
                Its not raining, enjoy the sun!
            </p>";
        }
    ?>


    <?php if($itsRaining) { ?>
        <p>
            Its raining, take an umbrella!
        </p>
    <?php } else {?>
        <p>
            Its not raining, enjoy the sun!
        </p>
    <?php } ?>


    <?php if($itsRaining): ?>
        <p>
            Its raining, take an umbrella!
        </p>
     <?php else: ?>
        <p>
            Its not raining, enjoy the sun!
        </p>
    <?php endif; ?>

</body>
</html>