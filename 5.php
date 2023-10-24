<?php 

/*Ваше задание будет создание сокращенного варианта ФИО, т. е.
вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.*/

function convertName($fullname):string {
    $words = explode(" ", $fullname);
    $result = $words[0] . " " . mb_substr($words[1], 0, 1) . ". " . mb_substr($words[2], 0, 1) . ". ";
    
    return $result;
}

$fullname = readline("Введите ФИО ('Иванов Иван Петрович'):");

echo $fullname;
if (count(explode(" ", $fullname)) == 3) {
    echo $fullname;
    echo convertName($fullname);
} else {
    echo "Нужно ввести имя, фамилию и отчество!";
}

?>
