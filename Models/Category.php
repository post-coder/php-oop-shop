<?php


class Category {

  protected $name;
  protected $icon;

  function __construct(string $name, string $icon) {
    $this->name = $name;
    $this->icon = $icon;
  }

  public function getName() {
    return $this->name;
  }

  public function getIcon() {
    return $this->icon;
  }

}