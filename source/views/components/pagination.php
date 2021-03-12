<nav aria-label="Page navigation example" style="margin: 0 auto;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" 
      href="<?php echo URL_BASE . 'equipamentos/'; ?>"
      tabindex="-1"
      >Inicio</a>
    </li>
    <?php if($first > 0){ ?>
      <li class="page-item">
        <a 
          class="page-link"
          href="<?php echo URL_BASE . 'produtos/'. ($first); ?>"
          style="color: #EB0F7B;"><?php echo $first; ?></a>
      </li>
    <?php } ?>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'equipamentos/'. ($first + 1); ?>"
        style="color: #EB0F7B;"><?php echo $first + 1; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'equipamentos/'. ($first + 2); ?>"
        style="color: #EB0F7B;"><?php echo $first + 2; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'equipamentos/'. ($first + 3); ?>"
        style="color: #EB0F7B;"><?php echo $first + 3; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link" 
        href="<?php echo URL_BASE . 'equipamentos/'. ($last + 4); ?>"
        style="color: #EB0F7B;"><?php echo $first + 4; ?></a></li>
      </a>
    </li>
    <li class="page-item">
      <a 
        class="page-link" 
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($last + 5); ?>">Próximo</a>
    </li>
  </ul>
</nav>