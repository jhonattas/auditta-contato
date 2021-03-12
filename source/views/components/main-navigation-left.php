<div class="col-lg-3">
  
  <div class="card anuncie">
    <a href="<?php echo URL_BASE . 'anuncie'; ?>">
      <img class="card-img-top" src="<?php echo URL_BASE;?>assets/img/anuncie_aqui.png" alt="Anuncie conosco">
    </a>
  </div> <!-- anuncie end -->

  <div id="accordion" class="list-group">
    <?php foreach ($categories as $category):?>
      <div class="categoryBox">
        <a
          href="#<?php echo $category->id; ?>"
          class="list-group-item categoryName"
          data-toggle="collapse"
          data-target="#category<?php echo $category->id; ?>"
          aria-expanded="false"
          aria-controls="collapseOne"
          data-parent="#accordion">
          <?php echo $category->title; ?>
        </a>
        
        <div 
          id="category<?php echo $category->id; ?>"
          class="collapse"
          aria-labelledby="headingOne" 
          data-parent="#accordion">
          <?php foreach ($category->subcategories as $subcategory):?>
            <a href="<?php echo URL_BASE . 'categoria/' . $subcategory->id; ?>"
              class="list-group-item subcategory">
              <?php echo $subcategory->title; ?>
            </a>
          <?php endforeach;?>
        </div>
      </div>
    <?php endforeach;?>
  </div>

  <div class="card anuncie">
    <a
      href="https://fb.com/universalequipamento/"
      target="_facebook">
      <img class="card-img-top" src="<?php echo URL_BASE;?>assets/img/facebook.png" alt="Anuncie conosco">
    </a>
  </div>

</div>
<!-- /.col-lg-3 -->