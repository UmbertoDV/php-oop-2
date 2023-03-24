<?php

class Category{
  protected $name;
  private static $acc_categories = [
    "Cane",
    "Gatto"
  ];

  public function __construct($name)
  {
    try{
      if(!$this->setName($name)) throw new Exception("Invalid argument name for Category");
    } catch(Exception $e){
      echo $e->getMessage();
      exit;
    }
  }

  public function setName($name){
    if(!is_string($name) || !in_array($name, self::$acc_categories)) return false;
    $this->name = $name;

    return $this;
  }
  public function getName(){
    return $this->name;
  }
}

?>