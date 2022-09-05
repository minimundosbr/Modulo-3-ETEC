<?php

  include("circle.php");

$circle = new Circulo(0, 0, 0);

echo "X: " . $circulo->A = 1 . "</br>";
echo "Y: " . $circulo->B = 2 . "</br>";
echo "Radious: " . $circulo->Radious = 3 . "</br>";
echo "Area: " . $circulo->Area() . "</br>";

$circulo->Mover(3);
echo "Mover X: " . $circulo->A . ", Y: " . $circulo->B "</br>";

$circulo->Inflar(10);
echo "Inflar: " . $circulo->Radious . "</br>";

$circulo->Desinflar(5);
echo "Desinflar: " . $circulo->Radious;

?>