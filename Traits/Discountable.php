<?php

trait Discountable {

  protected $discount;


  public function getDiscount() {
    return $this->discount;
  }

  public function setDiscount(int $discount) {
    if($discount < 0 || $discount > 90) {

      throw new Exception("Lo sconto non può essere inferiore a 0 o superiore a 90");

    } else {
      
      $this->discount = $discount;

    }
  } 

  // stiamo sovrascrivendo il metodo originale della classe Product
  public function getPrice() {
    // restituisce il prezzo del prodotto con lo scono applicato
    return $this->price - $this->price * $this->discount / 100;
  }

}