<?php 

class Food extends Product {

  protected $weight = null;
  protected $taste = null;
  protected $ingredients;

  public $type= 'Food';

  /**
   * @param Category product category
   * @param String product name
   * @param String brand name
   * @param Number product price 
   * @param Number product weight
   * @param String food taste
   * @param Array food ingredients
   */
  public function __construct(Category $_category, $_name_product, $_brand, $_price, $_weight, $_taste, $_ingredients){
    
    parent::__construct($_category, $_name_product, $_brand, $_price);

    $this->weight = $_weight;
    $this->taste = $_taste;
    $this->ingredients = $_ingredients;

    // richiamo set_discount di Food
    $this->set_discount($_brand);

  }

  // polimorfismo: funzione che setta lo sconto (se la marca è BUBI PET lo sconto è del 50%)
  public function set_discount($_brand){

    $brand = trim(strtolower($_brand));

    if($brand == 'bubi pet'){
      $this->discount = 50;
    }

  }
}