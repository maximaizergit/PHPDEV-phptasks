
<!--Игральным картам присвоены следующие порядковые номера в зависимости от их
достоинства: &quot;валет&quot; - 11, &quot;дама&quot; - 12, &quot;король&quot; - 13, &quot;туз&quot; - 14. Порядковые номера
остальных карт соответствуют их названиям (&quot;семерка&quot;, &quot;восьмерка&quot; и т. д.). Вам нужно
разработать программу, которая будет выводить достоинство карты по заданному
номеру, который будет вводит пользователь. -->

<!DOCTYPE html>
<html>
<head>
    <title>Определение достоинства карты</title>
</head>
<body>
    <h1>Определение достоинства карты</h1>

    <?php
    $cardRanks = array(
        2 => "двойка",
        3 => "тройка",
        4 => "четверка",
        5 => "пятерка",
        6 => "шестерка",
        7 => "семерка",
        8 => "восьмерка",
        9 => "девятка",
        10 => "десятка",
        11 => "валет",
        12 => "дама",
        13 => "король",
        14 => "туз"
    );

    ?>

    <form method="post" action="">
        <label for="cardNumber">Введите номер карты (2-14):</label>
        <input type="number" name="cardNumber" id="cardNumber" min="2" max="14">
        <input type="submit" value="Определить достоинство карты">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cardNumber = intval($_POST["cardNumber"]);
        echo "Введенный номер карты: " . $cardNumber;

        if (array_key_exists($cardNumber, $cardRanks)) {
            $cardRank = $cardRanks[$cardNumber];
            echo "<br>Достоинство карты: " . $cardRank;
        } else {
            echo "<br>Недопустимый номер карты";
        }
    }
    ?>
</body>
</html>