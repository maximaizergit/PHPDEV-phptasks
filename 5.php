 <?php
     
/*Ваше задание будет создание сокращенного варианта ФИО, т. е.
вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.*/

 function convertName($fullname): string {
        $words = explode(" ", $fullname);
        $result = $words[0] . " " . mb_substr($words[1], 0, 1) . ". " . mb_substr($words[2], 0, 1) . ". ";
        
        return $result;
    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Конвертация ФИО</title>
</head>
<body>
    <h1>Конвертация ФИО</h1>
    <form method="post" action="">
        <label for="fullname">Введите ФИО ('Иванов Иван Петрович'):</label>
        <input type="text" name="fullname" id="fullname">
        <input type="submit" value="Конвертировать">
    </form>

    <?php     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];

        if (count(explode(" ", $fullname)) == 3) {
            $convertedName = convertName($fullname);
            echo "<br>Конвертированное ФИО: " . $convertedName;
        } else {
            echo "<br>Нужно ввести имя, фамилию и отчество!";
        }
    }?>
</body>
</html>

