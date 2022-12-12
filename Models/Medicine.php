<?php 

class Medicine extends Product {
  
  public $type= 'Medicine';
  
  public $use;
  public $ingredients;


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

  }

}