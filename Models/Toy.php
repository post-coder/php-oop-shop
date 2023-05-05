<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product {

  protected $material;

  function __construct(string $name, float $price, string $picture, Category $category, string $material)
  {
    parent::__construct($name, $price, $picture, $category);

    $this->material = $material;
  }

  public function getMaterial() {
    return $this->material;
  }


}