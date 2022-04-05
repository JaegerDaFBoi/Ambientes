<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lista de Instructores</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>initial/index">Inicio</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <div class="row">
    <div class="col-md-6">
      <a href="<?php echo APP_URL; ?>instructor/create">
      <button type="button" class="btn btn-primary float-left" style="margin-right: 5px;">
        Crear Nuevo Registro
      </button>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Área</th>
                <th>Tipo de Instructor</th>
                <th>Vinculacion contractual</th>
                <th>Total de Horas</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($this->instructors as $instructor) {
                ?>
                <td><?php echo $instructor->id ?></td>
                <td><?php echo $instructor->nombre ?></td>
                <td><?php echo $instructor->cedula ?></td>
                <td><?php echo $instructor->area ?></td>
                <td><?php echo $instructor->tipo ?></td>
                <td><?php echo $instructor->vinculacion ?></td>
                <td><?php echo $instructor->totalhoras ?></td>
            </tbody>
            <?php
                }
                ?>
          </table>
        </div>
      </div>
    </div>
</div>