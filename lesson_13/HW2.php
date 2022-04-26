<?php

class Figure
{

  public int $side1, $side2;

  public function __construct($side1, $side2)
  {
    $this->side1 = $side1;
    $this->side2 = $side2;
  }

  public function getInfo()
  {
    return $this->side1 . ' ' . $this->side2;
  }
}

class Rectangle extends Figure
{
  public function perimeter()
  {
    return ($this->side1 + $this->side2) * 2;
  }

  public function area()
  {
    return ($this->side1 * $this->side2);
  }

  public function getInfo()
  {
    return 'Прямоугольник: ' . 'P = ' . $this->perimeter() . ', ' . 'S = ' . $this->area() . "<br>";
  }
}

class Square extends Figure
{
  public function Perimeter()
  {
    return $this->side1 * 4;
  }

  public function Area()
  {
    return ($this->side1 * $this->side1);
  }

  public function getInfo()
  {
    return 'Квадрат: ' . 'P = ' . $this->Perimeter() . ', ' . 'S = ' . $this->Area() . "<br>";
  }
}

$rectangle1 = new Rectangle(6, 2);
echo $rectangle1->getInfo();

$square1 = new Square(7, 7);
echo $square1->getInfo();