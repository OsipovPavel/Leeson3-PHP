<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массив чисел</title>
</head>
<body>
    <?php
        $arr = [13, 20, 30, 40, 50, 60, 70, 80, 90, 45];
        $srt_arr1 = '<h2>Исходный массив чисел: ';
        $srt_arr2 = '<h2>Элементы, стоящие на четных местах: ';
        $srt_arr3 = '<h2>Отсортированный массив: ';
        $min = $arr[0];
        $max = $arr[0];
        for ($i=0; $i<count($arr); $i++) {
            $srt_arr1 .= $arr[$i]." ";
            if($i % 2) $srt_arr2 .= $arr[$i]." ";
            if ($arr[$i]<$min) $min = $arr[$i]; 
            if ($arr[$i]>$max) $max = $arr[$i]; 
        }
        echo $srt_arr1.'</h2>';
        echo $srt_arr2.'</h2>';
        echo "<h2>MIN = $min, MAX = $max </h2>";
        $sortArr = sort($arr);
        for ($i=0; $i<count($arr); $i++) {
            $srt_arr3 .= $arr[$i]." ";
        }
        echo $srt_arr3. '</h2>';

        $arr1 = ['yellow' => 'Банан', 'red' => 'клубника', 'green' => 'огурец'];
        foreach ($arr1 as $key => $value) {
            echo "<p><b>Ключ:</b> $key, <b>значение:</b> $value </p>";
        }

    ?>
</body>
</html>