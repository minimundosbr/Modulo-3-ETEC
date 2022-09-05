<?php

class Invoice{

  private $id = 0;
  private $price = 0.0;
  private $description = "";
  private $quantity = 0;

  public function __construct($id, $price, $description, $quantity){
    $this->Id = $id;
    $this->Price = $price;
    $this->Desc = $description;
    $this->Qt = $quantity < 0 ? 0 : $price;
  }

  public function __get($value){
    return $this->$value;
  }
  public function __set($atributos, $value){
    $this->$atributos = $value;
  }
  public function getInvoiceAmount(){
    return $this->$quantity *= $this->Price;
  }
}

?>