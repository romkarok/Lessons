<?php

$a = 10;
$b = 6;
$c = 16;

// Это первый способ(по нашей теме)

if ($a > $b && $a > $c) {
    echo "a = $a это наибольшее число \n";
} else if ($b > $a && $b > $c) {
    echo "b = $b это наибольшее число \n";
} else if ($c > $a && $c > $b) {
    echo "c = $c это наибольшее число \n";
} 

if ($a < $b && $a < $c) {
    echo "a = $a это наименьшее число \n";
} else if ($b < $a && $b < $c) {
    echo "b = $b это наименьшее число \n";
} else if ($c < $a && $c < $b) {
    echo "c = $c это наименьшее число \n";
}

if ($a === $b && $a === $c){
	echo "$a числа равны, вывод первого \n\n";
}else {
    echo"Числа не равны \n\n";
}

// Это второй способ

echo min($a, $b, $c) . " наименьшее число \n";
echo max($a, $b, $c) . " наибольшее число ";