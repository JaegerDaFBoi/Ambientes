<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Eliminar Instructor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>instructor/index">Lista de Instructores</a></li>
          </ol>
        </div>
      </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <p class="card-text">Confirme los datos antes de eliminar el registro</p>
            </div>
          </div>
        </div>
      </div>
      <form role="form" method="POST" action="<?php echo APP_URL; ?>program/confirmDelete">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h5 class="card-title">Datos del programa</h5>
              </div>
              <?php foreach ($this->program as $program) { ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Indice</label>
                      <input readonly type="text" class="form-control" id="idProgram" name="idProgram" value="<?php echo $program->id; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Codigo</label>
                      <input readonly type="text" class="form-control" id="programCode" name="programCode" value="<?php echo $program->codigo; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Nombre del Programa</label>
                      <input readonly type="text" class="form-control" id="programName" name="programName" value="<?php echo $program->nombre; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Duracion de Etapa lectiva</label>
                      <input readonly type="text" class="form-control" id="programSchoolStageTime" name="programSchoolStageTime" value="<?php echo $program->duracionlectiva; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Duracion de Etapa practica</label>
                      <input readonly type="text" class="form-control" id="programPracticalStageTime" name="programPracticalStageTime" value="<?php echo $program->duracionpractica; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Trimestres en Total</label>
                      <input readonly type="text" class="form-control" id="programTrimesters" name="programTrimesters" value="<?php echo $program->totaltrimestres; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Nivel de formacion</label>
                      <input readonly type="text" class="form-control" id="programFormationLevel" name="programFormationLevel" value="<?php echo $program->nivelformacion; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Perfil del instructor</label>
                      <input readonly type="text" class="form-control" id="programInstructorProfile" name="programInstructorProfile" value="<?php echo $program->perfilinstructor; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label>Descripcion</label>
                      <input readonly class="form-control" id="programDescription" name="programDescription" value="<?php echo $program->descripcion; ?>">
                    </div>
                  </div>
                <?php } ?>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container">
              <div class="row">
                <div class="col-sm-8">
                  <input type="submit" class="btn btn-danger" value="Eliminar">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>