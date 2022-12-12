<?php 

class Medicine extends Product {

  protected $use;
  protected $ingredients;

  /**
   * @param Category product category
   * @param String product name
   * @param String brand name
   * @param Number product price 
   * @param String use for 
   * @param Array medicine ingredients
   */
  public function __construct(Category $_category, $_name_product, $_brand, $_price, $_use, $_ingredients){
    
    parent::__construct($_category, $_name_product, $_brand, $_price);

    $this->use = $_use;
    $this->ingredients = $_ingredients;

    // richiamo set_discount di Food
    $this->set_discount($_brand);

  }

  // polimorfismo: funzione che setta lo sconto (se la marca è BUBI PET lo sconto è del 15%)
  public function set_discount($_brand){

    $brand = trim(strtolower($_brand));

    if($brand == 'bubi pet'){
      $this->discount = 15;
    }

  }
}