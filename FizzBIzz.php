<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP code of Fizz Bizz</h1>
<?php

    echo "PHP code<br>";

    for ( $i = 1; $i <= 30; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo("FizzBuzz<br>");
        } else if ($i % 3 == 0) {
            echo("Fizz<br>");
        } else if ($i % 5 == 0) {
            echo("Buzz<br>");
        } else {
            echo $i."<br>" ;
        }
    }

    ?>

</body>
</html>