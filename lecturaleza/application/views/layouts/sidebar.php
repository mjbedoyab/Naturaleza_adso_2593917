
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>/assets/index3.html" class="brand-link">
      <img src="<?php echo base_url();?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN LECTURALEZA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= explode(" ", $session['nombres'])[0]." ".explode(" ", $session['apellidos'])[0] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/Inicio/crearAgricultores') ?>" class="nav-link nav-link">
              <i class="nav-icon fa-solid fa-users-rays fa-fade" style="color: #e20303;"></i>
              <p>
                Crear Agricultor
                <span class="badge badge-info right">0</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/Inicio/listaAgricultores') ?>" class="nav-link">
              <i class="nav-icon fa-solid fa-rectangle-list fa-fade" style="color: #e20303;"></i>
              <p>
                Lista Agricultores
                <span class="badge badge-info right">0</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/productos/guardar'); ?>" class="nav-link">
              <i class="nav-icon fa-regular fa-file-lines"></i>
              <p>
                CREAR PRODUCTO
                <span class="badge badge-info right">0</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/assets/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                LISTA DE PRODUCTOS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/assets/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/Login/cerrarSession');?>" class="nav-link">
              <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
              <p>
                Cerrar Sesion
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
