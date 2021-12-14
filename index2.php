<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Факториал</title>
</head>
<body>
    <?php
        $number = 10;
        $factorial = 1;
        $i = 1;
        while ($i <= $number) {
            $factorial *= $i;
            $i++;
        }
        echo "<h1>Заданное число: ".$number."</h1>";
        echo "<p>{$number}! = $factorial</p>";
    ?>
</body>
</html>