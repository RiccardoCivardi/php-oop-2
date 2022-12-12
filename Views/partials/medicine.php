      <h2><?php echo $list_product['medicines'][0]->type ?></h2>
      
      <div class="row row-cols-3">
  
        <?php foreach($list_product['medicines'] as $medicine): ?>

          <div class="col mb-5">
            <div class="card h-100">
              <img src="<?php echo $medicine->img ?>" class="card-img-top thumb" alt="<?php echo $medicine->name_product?>">
              <div class="card-body">
                <h6 class="card-title fs-5">
                  Categoria:
                  <?php echo $medicine->category->icon?>
                  <?php echo $medicine->category->name?>
                  |
                  <?php echo $medicine->type?>
                </h6>
                <h5 class="card-title mb-3">Nome prodotto: <?php echo $medicine->name_product ?></h5>
                <p class="card-text">Marca: <?php echo $medicine->brand ?></p>
                <p class="card-text">Prezzo: &euro;<?php echo $medicine->get_total_price() ?></p>
                <p class="card-text"><?php echo ($medicine->is_available ? 'Disponibile' : 'Esaurito') ?></p>
                <p class="card-text">Utilizzare per: <?php echo $medicine->use ?></p>
                <p class="card-text mb-1">Principi attivi:</p>
                <ul>
                  <?php foreach($medicine->ingredients as $ingredient): ?>
                    <li><?php echo $ingredient ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
    
      </div>