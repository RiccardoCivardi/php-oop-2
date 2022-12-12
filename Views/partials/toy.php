      <h2><?php echo $list_product['toys'][0]->type ?></h2>
      
      <div class="row row-cols-3">
  
        <?php foreach($list_product['toys'] as $toy): ?>

          <div class="col mb-5">
            <div class="card h-100">
              <img src="<?php echo $toy->img ?>" class="card-img-top thumb" alt="<?php echo $toy->name_product?>">
              <div class="card-body">
                <h6 class="card-title fs-5">
                  Categoria:
                  <?php echo $toy->category->icon?>
                  <?php echo $toy->category->name?>
                  |
                  <?php echo $toy->type?>
                </h6>
                <h5 class="card-title mb-3">Nome prodotto: <?php echo $toy->name_product ?></h5>
                <p class="card-text">Marca: <?php echo $toy->brand ?></p>
                <p class="card-text">Prezzo: &euro;<?php echo $toy->get_total_price() ?></p>
                <p class="card-text"><?php echo ($toy->is_available ? 'Disponibile' : 'Esaurito') ?></p>
                <p class="card-text"><?php $toy->get_full_information() ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
    
      </div>