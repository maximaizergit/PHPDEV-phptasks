<?php 


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