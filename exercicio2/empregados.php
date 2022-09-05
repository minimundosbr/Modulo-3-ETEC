<?php
class Empregados{
  private $nome = "";
  private $sobrenome = "";
  private $salario = 0.0;
  
  public function __construct($nome, $sobrenome, $salario){
  $this->Nome = $nome;
  $this->Salario = $salario < 0 ? 0 : $salario;
  $this->Sobrenome = $sobrenome;
  
}

  public function __get($value){
    return->$this = $value;
    }

  public function __set($attributes, $value){
    $this->$attributes = $value;
  }

  public function getAumento(){
    return $this->$salario += $this->Salario *(0.10); 
  }

}

?>