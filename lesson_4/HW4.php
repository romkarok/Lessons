<?php
function recur($a){
    for ($i=1; $i<=$a; $i++){  
        if ($a % $i==0){      
  echo "$i " ;
}
}
}
recur(10);
