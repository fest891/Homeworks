<?php
$day = 5;
switch ($day):
    case $day >= 0 && $day <= 5:
        echo 'Это рабочий день';
        break;
    case $day >= 6 && $day <= 7:
        echo 'Это выходной день';
        break;
    case $day < 0:
    case $day > 7:
        echo 'Неизвестный день';
endswitch;