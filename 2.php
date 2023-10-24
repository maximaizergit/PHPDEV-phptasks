<?php 

/*Вам нужно разработать программу, которая считала бы количество вхождений какой-
нибудь выбранной Вами цифры в выбранном Вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза*/

function getNumJoins($strOfNums, $reqNum):int {
    $chars = str_split($strOfNums);
    $joins = 0;
    foreach ($chars as $char){
        if ($char == $reqNum){
            $joins++;
        }
    }
    return $joins;
}

$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $strOfNums = $_POST['strOfNums'];
    $reqNum = $_POST['reqNum'];
    
    if (is_numeric($strOfNums) && is_numeric($reqNum) && ($reqNum >= 0 && $reqNum <= 9)) {
        $result = getNumJoins($strOfNums, $reqNum);
    } else {
        $result = "Неверные данные!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Число повторений</title>
</head>
<body>
    <form method="post">
        <label for="strOfNums">Введите строку чисел:</label>
        <input type="text" name="strOfNums" id="strOfNums">
        <br>
        <label for="reqNum">Введите искомую цифру:</label>
        <input type="text" name="reqNum" id="reqNum">
        <br>
        <input type="submit" value="Посчитать">
    </form>

    <?php if (!empty($result)): ?>
        <p>Результат: <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>