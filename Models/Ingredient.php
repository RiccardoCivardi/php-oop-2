<?php

class Ingredient {

  protected $ingredient;

  /**
   * @param Array ingredients
   */
  public function __construct($_ingredient)
  {
    $this->ingredient = $_ingredient;
  }

}