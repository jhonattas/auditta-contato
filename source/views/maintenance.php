<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title><?php echo mainTitle; ?> - Manutenção</title>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/components/font-awesome/css/all.css"/>

<?php require_once('components/favicon.php'); ?>
<?php require_once('components/viewport.php'); ?>

<style>
  body {
    background-image: url('<?php echo URL_BASE; ?>assets/img/fundo.png');
    background-position: center;
    background-size: all;
    background-color: #00669c;
  }
</style>
</head>
<body>

  <div class="container h-100" style="margin: 20px auto;">
    <div class="row h-100 justify-content-center align-items-center">
      <img src="<?php echo URL_BASE; ?>assets/img/logo_name.png" style="max-width: 250px;">
    </div>

    <div class="row card h-100 justify-content-center align-items-center" style="width: 28rem; margin: 25px auto 0;">
      <div class="card-body">
        <center><h5 class="card-title">OPS!</h5></center>
        <h6 class="card-subtitle mb-2 text-muted" style="font-size: 1em;">
          O conteudo que você procura está temporariamente indisponível. Mas você pode nos encontrar também nos links a seguir, ou voltar mais tarde.
        </h6>
        <div style="text-align: center;">
          <a 
            href="https://api.whatsapp.com/send?phone=5519992444695" 
            target="_new"
            style="color: #00669c; font-size: 2.5em;"
            class="card-link">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a 
            href="https://facebook.com/universalequipamento" 
            target="_new" 
            style="color: #00669c; font-size: 2.5em;"
            class="card-link">
            <i class="fab fa-facebook-square"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>