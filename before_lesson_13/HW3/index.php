<?php
require "Dog.php";
$dog1 = new Dog();
echo $dog1 ->say() . "<br>";
require "Cat.php";
$cat1 = new Cat();
echo $cat1 ->say();