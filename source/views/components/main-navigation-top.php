<nav 
  class="navbar navbar-expand-lg navbar-light fixed-top"
  style="background: #FFFFFF;">
  <div 
    id="google_translate_element"
    style="margin: 0px auto;"
  ></div>
<nav 
  class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
  style="margin-top: 40px;">
    <div class="container">
      <a href="<?php echo URL_BASE; ?>" class="navbar-brand">
        <img 
          src="<?php echo URL_BASE; ?>assets/img/logo.png"
          width="30" height="30" 
          class="d-inline-block align-top" alt=""
        /> UniversalEquipamento
      </a>
      
      <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarResponsive" 
        aria-controls="navbarResponsive" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a
              href="<?php echo URL_BASE . 'equipamentos';?>"
              class="nav-link">
              Catalogo
            </a>
          </li>
          <li class="nav-item">
            <a
            href="<?php echo URL_BASE . 'anuncie';?>"
              class="nav-link">
              Anuncie
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="<?php echo URL_BASE . 'contato';?>"
            >
              Contato
            </a>
            <li 
            v-if="(logged)"
            class="nav-item">
            <a
              href="https://admin.universalequipamento.com.br"
              class="nav-link">
              Login
            </a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </nav>