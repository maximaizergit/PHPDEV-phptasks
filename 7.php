
<!--Проверить високосный ли год. Вам нужно разработать программу, которая проверяла
бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999. -->

<!DOCTYPE html>
<html>
<head>
    <title>Проверка на високосный год</title>
</head>
<body>
    <h1>Проверка на високосный год</h1>

    <?php
    function isLeap($year) {
        if (($year % 4) != 0) {
            echo "Год не високосный";
        } elseif (($year % 100) != 0) {
            echo "Год високосный";
        } elseif (($year % 400) != 0) {
            echo "Год не високосный";
        } else {
            echo "Год високосный";
        }
    }

    ?>

    <form method="post" action="">
        <label for="year">Введите год:</label>
        <input type="number" name="year" id="year">
        <input type="submit" value="Проверить на високосный год">
    </form>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];
        echo "Введенный год: " . $year;
        echo "<br>Результат: ";
        isLeap($year);
    }
    ?>
</body>
</html>
