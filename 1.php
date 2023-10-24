<?php 

/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму
цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных
пользователем.*/

function getSum($strOfNums):int {
    $chars = str_split($strOfNums);
    $sum = 0;
    foreach ($chars as $char){
        $sum +=intval($char);
    }
    return $sum;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $strOfNums = $_POST['strOfNums'];
    if (is_numeric($strOfNums)) {
        $result = getSum($strOfNums);
    } else {
        $result = "Строка содержит символы, отличные от чисел";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Сумма цифр числа</title>
</head>
<body>
    <form method="post">
        <label for="strOfNums">Введите строку чисел:</label>
        <input type="text" name="strOfNums" id="strOfNums">
        <input type="submit" value="Посчитать">
    </form>

    <?php if (isset($result)): ?>
        <p>Результат: <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
