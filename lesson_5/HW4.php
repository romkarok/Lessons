<?php

function foo (){
$str = 'Brander';
$Reversed = '';
$length = strlen($str);
for($i=$length-1; $i >= 0; $i--){
    $Reversed .= $str[$i];
}
return $Reversed;
}
echo foo ();
