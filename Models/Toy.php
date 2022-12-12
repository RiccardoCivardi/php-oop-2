<?php 

class Toy extends Product {

  protected $features = null;
  protected $toy_type = null;
  protected $size;

  public $type= 'Toy';

  /**
   * @param Category product category
   * @param String product name
   * @param String brand name
   * @param Number product price 
   * @param String toy features
   * @param String toy type
   * @param String toy size (small, medium, big)
   */
  public function __construct(Category $_category, $_name_product, $_brand, $_price, $_features, $_toy_type, $_size){
    
    parent::__construct($_category, $_name_product, $_brand, $_price);

    $this->features = $_features;
    $this->toy_type = $_toy_type;
    $this->size = trim(strtolower($_size));

    // richiamo set_discount di Toy
    $this->set_discount($_brand, $_size);

  }

  // polimorfismo: funzione che setta lo sconto (se la marca è BUBI PET lo sconto è del 40%)
  public function set_discount($_brand){

    $brand = trim(strtolower($_brand));

    if($brand == 'bubi pet'){
      $this->discount = 40;
    } 

    if($this->size == 'big'){
      $this->discount += 5;
    }

  }

}