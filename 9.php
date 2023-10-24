<?php

/* */

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

echo "Введите год (не менее 1924): ";
$year = intval(fgets(STDIN));

if ($year >= 1924) {
    $chineseYearName = getChineseYearName($year);
    echo "Название года по китайскому календарю: " . $chineseYearName;
} else {
    echo "Год должен быть не менее 1924";
}

?>