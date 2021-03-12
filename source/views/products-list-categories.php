<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
  <title><?php echo mainTitle; ?></title>

  <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/homepage.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/equipment_card.css" />

  <?php require_once('components/plugin-translate.php'); ?>

  <style type="text/css">
  </style>
</head>
<body>
  <div id="container">
    <div class="MainPage">
      <?php require_once('components/main-navigation-top.php'); ?>

      <!-- Page Content -->
      <div class="container" style="margin-top: 30px;">

        <div class="row">
          <?php require_once('components/main-navigation-left.php'); ?>

          <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php for ($i = 0; $i < count($featured_images); $i++): ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
                <?php endfor ?>
                
              </ol>
              <div class="carousel-inner" role="listbox">
                
                <?php for ($i = 0; $i < count($featured_images); $i++): ?>
                  <?php if($i === 0){ ?>
                    <div class="carousel-item active">
                    <?php } else { ?>
                      <div class="carousel-item">
                      <?php } ?>
                      <img class="d-block img-fluid" src="<?php echo 'https://api.universalequipamento.com.br/static/images/' . $featured_images[$i]->image_url; ?>" alt="<?php echo $featured_images[$i]->description; ?>">
                    </div>
                  <?php endfor; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>

              <div class="row">
                <?php foreach ($products as $equipment):?>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="<?php echo URL_BASE . 'equipamento/' . $equipment->id; ?>">
                        <div
                        class="card-img-top cardEquipment"
                        style="background-image: url('https://api.universalequipamento.com.br/static/images/<?php echo $equipment->product_images[0]->url; ?>');">
                      </div>
                    </router-link>
                    <div class="card-body">
                      <span class="card-title">
                        <b><?php echo $equipment->brand; ?> <?php echo $equipment->model; ?></b>
                      </span><br/>
                      Ano: <?php echo $equipment->manufacturing; ?><br/>
                      Código: UNI-<?php echo $equipment->id; ?>
                    </div>
                    <div class="card-footer text-muted">
                      <a
                      href="<?php echo URL_BASE . 'equipamento/' . $equipment->id; ?>"
                      class="btn btn-primary details"
                      style="width: 100%;">
                      detalhes
                    </a>
                  </div>
                </div>
              </div>

            <?php endforeach;?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require_once('components/main-footer.php'); ?>
  </div>
</div>
<?php require_once('components/jquery.php'); ?>
<script src="<?php echo URL_BASE;?>'assets/js/bootstrap.min.js"></script>
<?php require_once('components/analytics.php'); ?>
</body>
</html>