<?php

function getArray($count= 18){
   $data=[];
   for($i=0;$i<$count;$i++){
       if (($i+1)%3===0){
           $data[]=$data[$i-1]+$data[$i-2];
       }else{
           $data[]=rand(0,10);
       }
   }
   return $data;
}
var_dump(getArray(18));