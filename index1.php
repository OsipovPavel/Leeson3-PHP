<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Делитель</title>
</head>
<body>
    <?php
        $current_number = 12459;
        $i = 2;
        while ($i < $current_number) {
            if ($current_number % $i == 0) $del = $i;
            $i++;
        }
        echo "<h1>Текущее число: $current_number</h1>";
        echo "<h2>Наибольший делитель: $del</h2>";
    ?>
</body>
</html>