<?php

class SevenCharacters {
  public function __construct(string $string)
  {
    $this->string = $string;
  }
  function sevenCharacters (){
    $b = explode(' ' ,$this->string);
    foreach ($b as $value){
      if (strlen($value)>12){
        echo mb_strimwidth($value,0,7,"*").' ' ;
      }else {
        echo "$value ";
      }
    }
  }
}
$text = new SevenCharacters('Великий бронетранспортер біля магазину');
$text->sevenCharacters();