<?php

$myArr = array(1,2,3,4,3,4,5);
function DeleteElement($arr,$elem){

foreach($arr as $key => $item){
    if ($elem== $item){
        unset($arr[$key]);
    }
}
    print_r($arr);
}
DeleteElement($myArr,4);