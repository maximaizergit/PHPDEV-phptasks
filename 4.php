

<!--Ваше задание — создать массив, наполнить его случайными значениями (можно
использовать функцию rand), найти максимальное и минимальное значение массива и
поменять их местами.-->

<!DOCTYPE html>
<html>
<head>
    <title>Генерация и обработка массива</title>
</head>
<body>
    <h1>Генерация и обработка массива</h1>

    <?php
    function genArray($min, $max, $length): array {
        $arr = [];
        for ($i = 0; $i < $length; $i++) {
            $arr[] = rand($min, $max);
        }
        return $arr;
    }

    function swapMinMaxInArr($arr): array {
        $minVal = min($arr);
        $maxVal = max($arr);

        $minIndex = array_search($minVal, $arr);
        $maxIndex = array_search($maxVal, $arr);

        $arr[$minIndex] = $maxVal;
        $arr[$maxIndex] = $minVal;

        return $arr;
    }

    $arr = genArray(1, 100, 10);

    echo "Исходный массив:";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "Обработанный массив:";
    echo "<pre>";
    print_r(swapMinMaxInArr($arr));
    echo "</pre>";
    ?>
</body>
</html>
