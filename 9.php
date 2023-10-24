<!-- Составить программу, которая бы по заданному числу выводила его название по
китайскому календарю. Заданное число не может быть меньше 1924. -->

<!DOCTYPE html>
<html>
<head>
    <title>Название года по китайскому календарю</title>
</head>
<body>
    <h1>Название года по китайскому календарю</h1>

    <?php
    function getChineseYearName($year) {
        $startYear = 1924;
        $chineseYearNames = array(
            0 => "Крыса",
            1 => "Бык",
            2 => "Тигр",
            3 => "Кролик",
            4 => "Дракон",
            5 => "Змея",
            6 => "Лошадь",
            7 => "Овца",
            8 => "Обезьяна",
            9 => "Петух",
            10 => "Собака",
            11 => "Свинья"
        );

        $offset = ($year - $startYear) % 12;
        return $chineseYearNames[$offset];
    }
    ?>

    <form method="post" action="">
        <label for="year">Введите год (не менее 1924):</label>
        <input type="number" name="year" id="year" min="1924">
        <input type="submit" value="Показать название года">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = intval($_POST["year"]);

        if ($year >= 1924) {
            $chineseYearName = getChineseYearName($year);
            echo "<br>Название года по китайскому календарю: " . $chineseYearName;
        } else {
            echo "<br>Год должен быть не менее 1924";
        }
    }
    ?>
</body>
</html>
