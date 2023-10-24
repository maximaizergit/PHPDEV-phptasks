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

echo "Введите строку чисел: ";
$strOfNums = fgets(STDIN);

if (is_numeric($strOfNums)) {
    echo getSum($strOfNums);
} else {
    echo "Строка содержит символы, отличные от чисел";
}



?>