<?php 

class Product {

  public $category;
  public $name_product;
  public $brand;
  public $price;
  protected $discount = 0;
  public $is_available = true;
  protected $id;
  public $img = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';

  /**
   * @param Category product category
   * @param String product name
   * @param String brand name
   * @param Number product price  
   */
  public function __construct(Category $_category, $_name_product, $_brand, $_price){

    $this->category = $_category;
    $this->name_product = $_name_product;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->set_id();

  }

  // funzione che setta lo sconto
  public function set_discount($_discount){
    // lo sconto deve essese un numero maggiore uguale di 1 e minore uguale a 30 
    if(is_numeric($_discount) && $_discount >= 1 && $_discount <= 30){

      $this->discount = $_discount;
      
    }

  }

  // funzione che mi restituisce il prezzo finale
  public function get_total_price(){

    $final_price = $this->price;

    // se lo sconto è diverso da zero calcolo il nuovo prezzo
    if($this->discount != 0){

      $final_price *= (1 - ($this->discount / 100));

    }

    // faccio il return del prezzo formattato all'italiana
    return number_format($final_price, 2, ',', '.');
  }

  //funzione per cambiare la disponibilità prodotto
  public function set_is_available(){

    $this->is_available = !$this->is_available;

  }

  // funzione per generare id (codice prodotto)
  private function set_id(){

    $this->id = rand(1000,9999); 

  }

  //funzione per settare l'immagine tramite url
  public function set_img($_path_img){

    $this->img = trim($_path_img);

  }

}