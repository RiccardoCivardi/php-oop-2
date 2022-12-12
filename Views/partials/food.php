      <h2><?php echo $list_product['foods'][0]->type ?></h2>
      
      <div class="row row-cols-3">
  
        <?php foreach($list_product['foods'] as $food): ?>

          <div class="col mb-5">
            <div class="card h-100">
              <img src="<?php echo $food->img ?>" class="card-img-top thumb" alt="<?php echo $food->name_product?>">
              <div class="card-body">
                <h6 class="card-title fs-5">
                  Categoria:
                  <?php echo $food->category->icon?>
                  <?php echo $food->category->name?>
                  |
                  <?php echo $food->type?>
                </h6>
                <h5 class="card-title mb-3">Nome prodotto: <?php echo $food->name_product ?></h5>
                <p class="card-text">Marca: <?php echo $food->brand ?></p>
                <p class="card-text">Prezzo: &euro;<?php echo $food->get_total_price() ?></p>
                <p class="card-text"><?php echo ($food->is_available ? 'Disponibile' : 'Esaurito') ?></p>
                <p class="card-text"><?php $food->get_full_information() ?></p>
                <p class="card-text mb-1">Ingredienti:</p>
                <ul>
                  <?php foreach($food->ingredients as $ingredient): ?>
                    <li><?php echo $ingredient ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
    
      </div>