<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик</title>
</head>
<body>
    <style>
        input {
            width: 50px;
        }
    </style>    
    <?php
        echo "<table><tbody>";
        echo "<tr><td></td>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";
        for ($i=1; $i<32; $i++) {
            echo "<tr><td>$i</td>";
            for ($j=1; $j<13; $j++) {
                echo "<td>
                <input type='text'>
                </td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    ?>
</body>
</html>