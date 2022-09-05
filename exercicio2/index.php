<?php
  include("empregados.php");

  $Bilu = new Empregados("","",0);

  echo"Nome: " . $Bilu->Name = "Victor </br>";
  echo"Sobrenome: " . $Bilu->Sobrenome = "Fogaça </br>";
  echo"Salário: " . $Bilu->Salario = "1200.00";
  echo"Reajuste: " . $Bilu->getAumento();

?>