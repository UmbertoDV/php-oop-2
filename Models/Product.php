<?php

require_once __DIR__ . "/Category.php";

class Product{
  protected $name;
  protected $price;
  protected $category;

  public function __construct(
    string $name, 
    float $price, 
    Category $category
  ){
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
  }

  public function setName($name){
    if(!is_string($name) || $name === "") return false;
    $this->name = $name;

    return $this;
  }
  public function getName(){
    return $this->name;
  }

  public function setPrice($price){
    if(!is_float($price)) return false;
    $this->price = $price;

    return $this;
  }
  public function getPrice(){
    return $this->price;
  }

  public function setCategory($category){
    if(!$category instanceof Category) return false;
    $this->category = $category;

    return $this;
  }
  public function getCategory(){
    return $this->category;
  }
}

$product = new Product("Palla", 3.15, new Category("Cane"));

var_dump($product);
?>