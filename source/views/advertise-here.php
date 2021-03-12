<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
  <title><?php echo mainTitle; ?></title>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/homepage.css" />

  <?php require_once('components/plugin-translate.php'); ?>

  <style type="text/css">
    .pageAdvertiseHereContainer {
      margin: 30px auto;
      max-width: 600px;
      min-height: 450px;
    }

    .title {
      font-size: 2rem;
      font-weight: 800;
    }

    .description {
      text-align: justify;
    }
  </style>
</head>
<body>
  <div id="container">
    <div class="MainPage">
      <?php require_once('components/main-navigation-top.php'); ?>

      <!-- Page Content -->
      <div class="pageAdvertiseHereContainer" style="margin-top: 100px;">
        <span class="title">Anuncie conosco</span><br/>
        <p class="description">
          Prezados senhores, diretores, funcionários, técnicos, engenheiros e demais colaboradores.<br/>
          <br/>
          É com satisfação que anunciamos ao mercado de equipamentos, nosso site de máquinas, peças e componentes, com foco no mercado de Içamento e transporte pesado.<br/>
          <br/>
          Entretanto, como uma extensão natural de nosso <i>networking</i>, iremos publicar outros tipos de equipamentos, sempre atuando para aproveitar oportunidades e fomentar negócios entre nossas empresas.<br/>
          <br/>
          Nosso site terá alguns banners de empresas, com eles iremos divulgar marcas, produtos, e serviços de nossos colaboradores.<br/>
          Num primeiro momento, livre de cobrança de, despesas e etc.
        </p>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require_once('components/main-footer.php'); ?>
  </div>
</div>
<script src="<?php echo URL_BASE; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo URL_BASE; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>