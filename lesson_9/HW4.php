<?php
// Лучше использовать стандартную функцию PHP (array_unique)
$array = array([1,2],[1,2],2,2,[1,2],3,3,3,4,4);

function unique($array){
    $result = array();

    foreach ($array as $v) {
        if (in_array($v, $result)) continue;
        else $result[] = $v;

    }

    return $result;
}
var_dump(unique($array));