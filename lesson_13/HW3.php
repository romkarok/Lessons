<?php

class Calculator
{
  public $operator;
  public $num1;
  public $num2;


  public function __construct( int $num1, string $operator, int $num2)
  {
    $this->operator = $operator;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }


  public function calculator()
  {
    switch ($this->operator) {
      case '+':
        $result = $this->num1 + $this->num2;
        return $result;
        break;
      case '-':
        $result = $this->num1 - $this->num2;
        return $result;
        break;
      case '/':
        $result = $this->num1 / $this->num2;
        return $result;
        break;
      case '*':
        $result = $this->num1 * $this->num2;
        return $result;
        break;
      case '||':
        $result = fmod($this->num1, $this->num2);
        return $result;
        break;
    }
  }
}

$calculator1 = new Calculator ('11','+','3');
$calculator2 = new Calculator ('11','-','3');
$calculator3 = new Calculator ('11','/','3');
$calculator4 = new Calculator ('11','*','3');
$calculator5 = new Calculator ('11','||','3');
echo $calculator1->calculator() . " - сложение" . "<br>";
echo $calculator2->calculator() . " - вычитание" . "<br>";
echo $calculator3->calculator() . " - деление" . "<br>";
echo $calculator4->calculator() . " - умножение" . "<br>";
echo $calculator5->calculator() . " - остаток от числа" . "<br>";
