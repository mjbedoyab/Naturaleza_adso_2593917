<?php 
  $dataHeader['titulo'] = "lista Agricultores";
  $this->load->view('layouts/header', $dataHeader); 
?>
  <?php 
    $dataSidebar['session'] = $session;
    $dataSidebar['optionSelected'] = 'listaAgricultores';
    $this->load->view('layouts/sidebar', $dataSidebar); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <section class="content">

  <!-- Default box -->
    <div class="card ">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <br>
                    <a href="guardar" class="btn btn-success">Crear Usuario</a>
                <br>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">CEDULA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELFONO</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">VER</th>
                    <th scope="col">BORRAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Agricultor as $key => $AgricultoresModel) : ?>
                    <tr>
                    <th scope="row"><?php echo $Usuario->id_agricultor ?></th>
                    <td><?php echo $AgricultoresModel->cedula ?></td>
                    <td><?php echo $AgricultoresModel->nombre ?></td>
                    <td><?php echo $AgricultoresModel->apellido ?></td>
                    <td><?php echo $AgricultoresModel->direccion ?></td>
                    <td><?php echo $AgricultoresModel->telefono ?></td>

                    <td>
                      <a href="guardar/<?php echo $AgricultoresModel->id_agricultor ?>" type="button" class="btn btn-outline-primary">Editar</a>
                      
                    </td>
                    <td>
                      <a href="ver/<?php echo $AgricultoresModel->id_agricultor ?>" type="button" class="btn btn-outline-info">Ver</a>
                      
                    </td>
                    <td>
                      <a href="borrar/<?php echo $AgricultoresModel->id_agricultor ?>" type="button" class="btn btn-outline-warning">Borrar</a>
                      
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
  <!-- /.card -->

</section>

<?php 
  $this->load->view('layouts/footer'); 
?>