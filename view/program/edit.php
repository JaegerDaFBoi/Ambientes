<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Actualizacion de Registro</h1>
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
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del Programa</h3>
            </div>
            <form role="form" method="POST" action="<?php echo APP_URL; ?>program/update">
                <div class="card-body">
                <?php foreach ($this->program as $program) { ?>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="hidden" name="idProgram" value="<?php echo $program->id; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="programCode">Código</label>
                      <input type="text" class="form-control" id="programCode" name="programCode" value="<?php echo $program->codigo; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      <label for="programName">Nombre del Programa</label>
                      <input type="text" class="form-control" id="programName" name="programName" value="<?php echo $program->nombre; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="programSchoolStageTime">Meses Etapa Lectiva</label>
                      <input type="number" class="form-control" id="programSchoolStageTime" name="programSchoolStageTime" value="<?php echo $program->duracionlectiva; ?>">
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-4">
                      <label for="programPracticalStageTime">Meses Etapa Practica</label>
                      <input type="number" class="form-control" id="programPracticalStageTime" name="programPracticalStageTime" value="<?php echo $program->duracionpractica; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <label for="programFormationLevel">Nivel de formacion</label>
                      <input type="text" class="form-control" id="programFormationLevel" name="programFormationLevel" value="<?php echo $program->nivelformacion; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="programInstructorProfile">Perfil del Instructor</label>
                      <textarea class="form-control" name="programInstructorProfile" rows="8" col="40"><?php echo $program->perfilinstructor; ?></textarea>
                    </div>
                    <div class="col-md-6">
                      <label for="programDescription">Descripción</label>
                      <textarea class="form-control" name="programDescription" rows="8" col="40"><?php echo $program->descripcion; ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="submit" class="btn btn-secondary" value="Actualizar Registro">
                    </div>
                  </div>
                  <?php } ?>
                </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>