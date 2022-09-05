<?php 
class Circulo{
  private $a;
  private $b;
  private $radio;

  public function __construct($radio, $a = 0, $b = 0){
    $this->A = $a;
    $this->B = $b;
  }

  public function __get($value){
    return->$this = $value;
  }

  public function __set($attributes, $value){
    $this->$attributes = $value;
  }

  public function inflar(){
    $this->Radious += $value;
  }

  public function desinflar(){
    $this->Radious -= $value;
  }
  
  public function mover(){
    $this->A = $move;
    $this->B = $move;
  }
  public function area(){
    return pi() * ($this->Radious * 2);
  }
}
  

?>