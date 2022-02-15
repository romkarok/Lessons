<?php
function prost($a, $n = null){
    if ($n == 1){
        return true;
    }
    if ($n == null){
        $n = $a - 1;
    }
    return $a % $n && prost($a, n:$n-1);
}
$a = rand(2,100);
if (prost($a)){
    echo $a . ' простое ';
}else {
    echo $a . ' не простое ';
}
