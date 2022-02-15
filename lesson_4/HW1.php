<?php

$a = 10;
$b = 9;
$c = 15;

function foo($a,$b,$c){
if ($a > $b && $a > $c) {
    echo "a = $a это наибольшее число \n";
} else if ($b > $a && $b > $c) {
    echo "b = $b это наибольшее число \n";
} else if ($c > $a && $c > $b) {
    echo "c = $c это наибольшее число \n";
} else if($a === $b && $a === $c){
	echo "$a числа равны, вывод первого \n\n";
}
}
foo($a,$b,$c);
