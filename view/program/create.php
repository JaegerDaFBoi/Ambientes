<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Registro de Programas</h1>
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
              <h3 class="card-title">Formulario de registro</h3>
            </div>
            <form role="form" method="POST" action="<?php echo APP_URL; ?>program/save">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="programCode">Codigo</label>
                    <input type="text" class="form-control" id="programCode" name="programCode" placeholder="Ingrese el codigo del programa...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <label for="programName">Nombre del Programa</label>
                    <input type="text" class="form-control" id="programName" name="programName" placeholder="Ingrese el nombre del programa aqui...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="programSchoolStageTime">Meses Etapa Lectiva</label>
                    <input type="number" class="form-control" id="programSchoolStageTime" name="programSchoolStageTime">
                  </div>
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-4">
                    <label for="programPracticalStageTime">Meses Etapa Practica</label>
                    <input type="number" class="form-control" id="programPracticalStageTime" name="programPracticalStageTime">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <label for="programFormationLevel">Nivel de formacion</label>
                    <input type="text" class="form-control" id="programFormationLevel" name="programFormationLevel" placeholder="Ingrese el nivel de formacion del programa aqui...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="programInstructorProfile">Perfil del Instructor</label>
                    <textarea class="form-control" name="programInstructorProfile" rows="8" col="40">Escriba el perfil del instructor:</textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="programDescription">Descripción</label>
                    <textarea class="form-control" name="programDescription" rows="8" col="40">Descripción del programa</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="submit" class="btn btn-secondary" value="Guardar Registro">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>