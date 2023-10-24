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

echo "Введите строку чисел: ";
$strOfNums = fgets(STDIN);
echo "Введите искомую цифру: ";
$reqNum = fgets(STDIN);

if (is_numeric($strOfNums) && is_numeric($reqNum) && ($reqNum >= 0 && $reqNum <= 9)) {
    echo getNumJoins($strOfNums, $reqNum);
} else {
    echo "Неверные данные!";
}

?>

