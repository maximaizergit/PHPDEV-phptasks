<!--Работа светофора запрограммирована таким образом: с начала каждого часа, в
течении трех минут горит зеленый сигнал, следующие две минуты горит красный,
дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу,
которая по введенному числу определяла какого цвета сейчас горит сигнал. Введенное
число означает количество минут, прошедших с начала часа.-->

<!DOCTYPE html>
<html>
<head>
    <title>Светофор</title>
</head>
<body>
    <h1>Светофор</h1>

    <?php
    function getTrafficLightsState($minute): string {
        if ($minute >= 0 && $minute <= 60) {
            $value = $minute / (2 + 3);

            if (fmod($value, 1) == 0.8 || fmod($value, 1) == 0) {
                return "Красный";
            }
            return "Зелёный";
        } else {
            return "Неправильное значение минуты. Введите число от 0 до 60.";
        }
    }

  
    ?>

    <form method="post" action="">
        <label for="minute">Введите минуту с начала часа (0-60):</label>
        <input type="number" name="minute" id="minute" min="0" max="60">
        <input type="submit" value="Показать состояние светофора">
    </form>

    <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $minute = $_POST["minute"];

        $trafficLightsState = getTrafficLightsState($minute);
        echo "<br>Сейчас горит: " . $trafficLightsState;
    }
    ?>
</body>
</html>
