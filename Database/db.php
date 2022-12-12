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
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Medicine.php';
require_once __DIR__ . '/../Models/Toy.php';

// creo i prodotti e li stampo in pagina iun modo grezzo
$food1 = new Food(new Category('cane'), 'Crocky', 'Bubi Pet', 74.5, 9, 'Meat', ['meat', 'carrots', 'wheat']);
$food1->set_img('https://m.media-amazon.com/images/I/71UI-61wCmL._AC_SL1500_.jpg');

// var_dump($food1);

$food2 = new Food(new Category('Gatto'), 'Miao', 'Bubi Bubi', 46, 5, 'Fish', ['fish', 'soybean']);
$food2->set_is_available();
$food2->set_img('https://cdn.royalcanin-weshare-online.io/Yz-nV30BRYZmsWpcqspy/v504/sol-kitten-dry-packshot-b1?fm=jpg&auto=compress');

// var_dump($food2);

$food3 = new Food(new Category('Pesci '), 'Amtra', 'Bubi Fish', 12, 1, 'Natural', ['wheat', 'soybean', 'pea', 'corn']);
$food3->set_img('https://www.koi-franciacorta.it/pimages/MANGIME-PER-PESCI-ROSSI-250-ML-36-GR-extra-big-3126-463.jpg');

// var_dump($food3);

$list_food = [$food1,$food2,$food3];

// var_dump($list_food);

$medicine1 = new Medicine(new Category(' VOLATILI'), 'Coccidiol', 'Pagnini', 32, 'bacterial diseases', ['paracetamol', 'cortisone', 'alprazolam']);
$medicine1->set_discount(13);
$medicine1->set_is_available();
$medicine1->set_img('https://admin.abc.sm/upload/7322/catalogodinamico/prodotti/img_765537_100419Coccidiol-Pagnini---Chemifarma.jpg');

// var_dump($medicine1);


$medicine2 = new Medicine(new Category('roditore'), 'Ratton', 'Bubi Pet', 123, 'schizophrenia', ['paracetamol', 'cortisone', 'alprazolam']);
$medicine2->set_discount(30);

// var_dump($medicine2);

$list_medicine = [$medicine1,$medicine2];

// var_dump($list_medicine);

$toy1 = new Toy(new Category('cane'), 'Super ball', 'Bubi pet', 10, 'Teeth reinforcement', 'Ball', 'big');
$toy1->set_is_available();

// var_dump($toy1);

$toy2 = new Toy(new Category('gatti'), 'Feather extreme', 'Bubi Bubi', 19, 'Play', 'Feather', 'small');
$toy2->set_img('https://i.ebayimg.com/images/g/LwMAAOSwCXJa~sgg/s-l500.jpg');

// var_dump($toy2);

$list_toy = [$toy1, $toy2];

// var_dump($list_toy);

$list_product = [
  "foods" => $list_food,
  "medicines" => $list_medicine,
  "toys" => $list_toy
];

var_dump($list_product);