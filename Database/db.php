<?php 

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

// Import Models
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Ingredient.php';
require_once __DIR__ . '/../Models/Accessory.php';
require_once __DIR__ . '/../Models/Cleaning.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Medicine.php';
require_once __DIR__ . '/../Models/Toy.php';



$prova = new Food(new Category(' gatto'), 'mangime', 'bubi pet', 30, 5, 'pollo', ['pollo', 'frumento', 'broccoli']);

$prova->set_is_available();
$prova->set_img('bdfbkhbef');
// $prova->set_discount(28);

var_dump($prova);

$prova2 = new Toy(new Category('cane  '), 'palla', 'bubi pet', 20, 'play', 'ball', 'BIG' );
var_dump($prova2);