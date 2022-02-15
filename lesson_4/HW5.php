<?php

function foo($num) {
$arr = [];
for ($i=1; $i <= $num; $i++) {
if ($num % $i == 0) {
$arr [] = $i;
}
}
return $arr;
}


