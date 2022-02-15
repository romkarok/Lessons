<?php

// Первый способ

function day($number){

if ($number == 1) {
echo "Monday";
} else if ($number == 2) {
echo "Tuesday";
} else if ($number == 3) {
echo "Wednesday";
} else if ($number == 4) {
echo "Thursday";
} else if ($number == 5) {
echo "Friday";
} else if ($number == 6) {
echo "Saturday";
} else if ($number == 7) {
echo "Sunday";
} else {
    echo "Error";
}
}
echo day(3);


// Второй способ

function day($number){

switch ($number) {
case 1:
    echo "Monday";
    break;
case 2:
    echo "Tuesday";
    break;
case 3:
    echo "Wednesday";
    break;
case 4:
    echo "Thursday";
    break;
case 5:
    echo "Friday";
    break;
case 6:
    echo "Saturday";
    break;
case 7:
    echo "Sunday";
    break;
default:
    echo "Error";
}}
echo day(3);


// Третий способ

function day($num){

$day = array ('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вк');

echo $day[$num-1];//потому-что с 0 отчет
} 
echo day(4);
