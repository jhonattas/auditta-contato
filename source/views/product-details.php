<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
  <title><?php echo mainTitle; ?></title>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/homepage.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/product_details.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/lightbox.css" />

  <?php require_once('components/plugin-translate.php'); ?>

  <meta property="og:title" content="<?php echo $product->brand; ?> <?php echo $product->model; ?>">
  <meta property="og:site_name" content="UniversalEquipamento">
  <meta property="og:description" content="<?php echo html_entity_decode($product->obs); ?>">
  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo URL_BASE . 'equipamento/' . $product->id; ?>">
  <meta property="fb:app_id" content="940338582810072">
  <meta property="og:image" content="<?php echo 'https://api.universalequipamento.com.br/static/images/' . $product->product_images[0]->url; ?>">
  <style>
    .lb-container::after {
      background-image: url('https://universalequipamento.com.br/assets/img/watermark_new.png') !important;
      background-size: contain !important;
      background-repeat: no-repeat;
      background-position: center !important;
      content: "";
      opacity: 0.8;
      top: 90px;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;
      width: 100%;
      max-height: 250px;
    }

    .productImage::after {
      background-image: url(https://universalequipamento.com.br/assets/img/watermark_new.png) !important;
      background-size: contain !important;
      background-repeat: no-repeat;
      background-position: center !important;
      content: "";
      opacity: 0.7;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;
      width: 100%;
      max-height: 250px;
    }

  </style>
</head>
<body>

  <div id="container">
    <div class="MainPage">
      <?php require_once('components/main-navigation-top.php'); ?>
      <div class="container" style="margin-top: 30px;">

        <div class="row">
          <?php require_once('components/main-navigation-left.php'); ?>
          <!-- /.col-lg-3 -->

          <div class="col-lg-9">

            <div class="card mt-4" style="border: 0 !important;">
              <div class="card-body">
                <h3 class="card-title"><?php echo $product->brand; ?> <?php echo $product->model; ?></h3>
                <table class="table is-striped is-fullwidth">
                  <tbody>
                    <tr>
                      <th scope="row">CÓDIGO</th>
                      <td>UNI-<?php echo $product->id; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">FABRICANTE</th>
                      <td><?php echo $product->brand; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">MODELO</th>
                      <td><?php echo $product->model; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">ANO</th>
                      <td><?php echo $product->manufacturing; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">LOCALIZAÇÃO</th>
                      <td><?php echo $product->location; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">VALOR</th>
                      <td><?php echo $product->amount; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">DETALHES</th>
                      <td v-html="product.obs"><?php echo html_entity_decode($product->obs); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->

            <div class="card mt-4" style="border: 0 !important; text-align: center !important;">
              <div class="row">
                <?php foreach ($product->product_images as $productImage):?>
                  <a 
                  class="card col productImage"
                  style="
                  float: none;
                  text-align: center;
                  margin: 0 auto;
                  margin-top: 0.2em;
                  margin-left: 0.1em;
                  margin-right: 0.2em;
                  background-image: url('<?php echo 'https://api.universalequipamento.com.br/static/images/' . $productImage->url; ?>');
                  background-repeat: no-repeat;
                  background-size: cover;
                  min-height: 200px;
                  min-width: 300px;
                  width: 100% !important;"
                  href="<?php echo 'https://api.universalequipamento.com.br/static/images/' . $productImage->url; ?>" 
                  data-lightbox="products" data-title="<?php echo $product->brand; ?> <?php echo $product->model; ?>">
                &nbsp;</a>
              <?php endforeach; ?>

            </div>
          </div>

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Compartilhar
            </div>
            <div class="card-body">
              <a
              href="<?php echo 'https://facebook.com/sharer/sharer.php?u=https://universalequipamento.com.br/equipamento/' . $product->id;?>"
              class="btn btn-primary" target="facebook">
            facebook</a>

            <a href="#" class="btn btn-success">whatsapp</a>
            <a href="#" class="btn btn-dark">imprimir</a>
            <a
            class="btn btn-light"
            href="<?php echo URL_BASE . 'equipamentos';?>">
            voltar
          </a>
        </div>
      </div>
      <!-- /.card -->

    </div>
  </div>
</div>

<!-- Footer -->
<?php require_once('components/main-footer.php'); ?>
</div>
</div>
<?php require_once('components/jquery.php'); ?>
<script src="<?php echo URL_BASE;?>'assets/js/bootstrap.min.js"></script>
<script src="<?php echo URL_BASE;?>'assets/js/lightbox-plus-jquery.min.js"></script>
<?php require_once('components/analytics.php'); ?>
</body>
</html>