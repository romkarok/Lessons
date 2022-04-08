<?php
// Можно использовать стандартную функцию PHP (array_chunk)
$a = [1,3,3,3,2,1,5,3,6,4];
function ArrayCH (array $a, int $separator) {
    $i = 0;
    $transit = [];
    foreach ($a as $value) {
        $i++;
        $transit [] = $value;
        if ($i === $separator) {
            $result [] = $transit;
            $transit = [];
            $i = 0;
        }
    }
    var_dump($result);
}

ArrayCH($a, 2);