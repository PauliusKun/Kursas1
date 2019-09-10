<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-kursas</title>
</head>

<body>
    <?php

    // Tai komentaro pavyzdys
    # Tai antras komentaro pavyzdys
    /*
    Tai trečias pavyzdys -
    komentaras keliose eilutese
    */

        echo "Labas pasauli!<br>";
    ?>

    <?php
        $num1 = 4;
        $num2 = 7;
        function myTest() {
        global $num1, $num2, $result;
        $result = $num1 + $num2;
        }
        myTest();
        echo $result;
    ?>

</body>
</html>
