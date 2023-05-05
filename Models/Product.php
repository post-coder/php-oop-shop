<?php

// import della classe per la composizione direttamente nel file della classe principale
require_once __DIR__ . "/Category.php";

class Product {

  protected $name;
  protected $price;
  protected $picture;
  protected $category;

  function __construct(string $name, float $price, string $picture, Category $category) {

    $this->name = $name;
    $this->price = $price;
    $this->picture = $picture;
    $this->category = $category;

  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getCategory() {
    return $this->category;
  }
 
}