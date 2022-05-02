<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Asignación de competencias</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>program/index">Lista de Programas</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="container-fluid">
            <?php foreach ($this->program as $program) { ?>
              <div class="row">
                <div class="col-sm-12">
                  <label>Programa de formacion</label>
                  <p><?php echo $program->nombre; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Codigo</label>
                  <p><?php echo $program->codigo; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <label>Duracion Etapa lectiva</label>
                  <p><?php echo $program->duracionlectiva; ?></p>
                </div>
                <div class="col-sm-6">
                  <label>Duracion Etapa practica</label>
                  <p><?php echo $program->duracionpractica; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Total de Trimestres</label>
                  <p><?php echo ($program->duracionlectiva + $program->duracionpractica) / 3; ?></p>
                </div>
              </div>
              <div class="row">
                <button class="btn btn-danger">
                  <a href="<?php echo ('create?id='.$program->id) ?>>Asignar competencias</a>
                </button>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-8">
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
              <table class="table table-hover table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Horas Semanales</th>
                  </tr>
                </thead>
                <tbody>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>