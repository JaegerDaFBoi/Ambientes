<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Registro de Competencias</h1>
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
            <form role="form" method="POST" action="<?php echo APP_URL; ?>competence/save">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="competenceCode">Codigo</label>
                    <input type="text" class="form-control" id="competenceCode" name="competenceCode">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-10">
                    <label for="competenceDescription">Descripcion</label>
                    <textarea class="form-control" name="competenceDescription" rows="8" col="40"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="competenceHours">Horas Semanales</label>
                    <input type="number" class="form-control" id="competenceHours" name="competenceHours">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="competenceProgram">Programa de formacion</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="hidden" name="competenceId" value="<?php echo $this->program[0]->id; ?>">
                        <input disabled type="text" name="competenceProgram" value="<?php echo $this->program[0]->nombre; ?>">
                      </div>
                    </div>

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