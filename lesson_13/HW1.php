<?php

class City {
  public $name, $population;

  public function __construct(string $name, $population)
  {
    $this->name = $name;
    $this->population = $population;
  }

  public function getInfo()
  {
    return 'Місто: ' . $this->name . '. ' . 'Населення: ' . $this->population . "<br>";
  }
}

$obj1 = new City('Харків', 1443207);
$obj2 = new City('Київ', 2967360);
$obj3 = new City('Одеса', 1017699);
$obj4 = new City('Дніпро', 990724);
$obj5 = new City('Запоріжжя', 731922);
$obj6 = new City('Львів', 724314);
$obj7 = new City('Кривий Ріг', 619278);
echo $obj1->getInfo();
echo $obj2->getInfo();
echo $obj3->getInfo();
echo $obj4->getInfo();
echo $obj5->getInfo();
echo $obj6->getInfo();
echo $obj7->getInfo();
