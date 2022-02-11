<?php

$a = rand(0,50);
echo "$a \n";

switch ($a) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Odd";
        break;
    case 10:
    case 20:
    case 30:
    case 40:
    case 50:
        echo "Even";
        break;
    default:
        echo "Ooops";
}
