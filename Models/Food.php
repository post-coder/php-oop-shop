<?php

// require di tutte le entità necessarie per l'utilizzo senza errori di food

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

require_once __DIR__ . '/../Traits/Discountable.php';


class Food extends Product {

  use Discountable;

  protected $ingredients;

  function __construct(string $name, float $price, string $picture, string $ingredients , Category $category) {
    
    // $this->name = $name;
    // $this->price = $price;

    parent::__construct($name, $price, $picture, $category);

    $this->ingredients = $ingredients;

  }

  public function getIngredients() {
    return $this->ingredients;
  }

}