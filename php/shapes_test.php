<?php

require_once "rectangle.php";
require_once "square.php";


$rectangle = new Rectangle(4,8);

$square = new Square(41);

echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;

