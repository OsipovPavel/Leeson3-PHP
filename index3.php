<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Квадраты</title>
</head>
<body>
    <style>
        .clear {
            clear: both;
        }
        .col {
            float: left;
            width: 30px;
            height: 30px;
            background-color: red;
            border: 1px solid brown;
        }
    </style>    
    <?php
        $count = 20;
        echo '<p>Количество: '.$count.' </p>';
        for ($i = 1; $i <= $count; $i++) {
            for ($j=1; $j <= $count; $j++) {
                echo "<div class='col'></div>";
            }
            echo "<div class='clear'></div>";
        }
    ?>
</body>
</html>