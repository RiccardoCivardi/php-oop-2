<?php

class Category {

  public $name = null;
  protected $icon = null;

  
  /**
   * @param String category name (cani, gatti, uccelli, pesci, roditori) 
   */
  public function __construct($_name){

    // a seconda del nome della categoria lancio la funzione che riconosce la categoria, formatta il nome secondo gli standard e assegna l'icona
    $this->set_category($_name); 

  }

  private function set_category($_name){

    $name = trim(strtolower($_name));

    if($name == 'cane' || $name == 'cani'){
      $this->name = 'Cani';
      $this->icon = '<i class="fa-solid fa-dog"></i>';
    } 
    else if($name == 'gatto' || $name == 'gatti'){
      $this->name = 'Gatti';
      $this->icon = '<i class="fa-solid fa-cat"></i>';
    }
    else if($name == 'volatile' || $name == 'volatili'){
      $this->name = 'Volatili';
      $this->icon = '<i class="fa-solid fa-crow"></i>';
    }
    else if($name == 'pesce' || $name == 'pesci'){
      $this->name = 'Pesci';
      $this->icon = '<i class="fa-solid fa-fish-fins"></i>';
    }
    else if($name == 'roditore' || $name == 'roditori'){
      $this->name = 'Roditori';
      $this->icon = '<i class="fa-solid fa-otter"></i>';
    }
    
  }
}