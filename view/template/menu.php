<!-- Contenedor Principal Barra Lateral -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="<?php echo APP_URL; ?>initial/index" class="brand-link">
      <img src="<?php echo APP_URL; ?>/assets/img/logosena.jpg" alt="logosena" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ambientes SENA</span>
    </a>

    <!-- Barra Lateral -->
    <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-solid fa-address-book"></i>
              <p>
                Directorio
                <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo APP_URL; ?>instructor/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Instructores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fichas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo APP_URL; ?>program/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo APP_URL; ?>environment/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ambientes</p>
              </a>
            </li>
          </ul>
    </nav>
</aside>