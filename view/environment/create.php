<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Registro de Ambientes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>environment/index">Lista de Ambientes</a></li>
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
            <form role="form" method="POST" action="<?php echo APP_URL; ?>environment/save">
              <div class="card-body">
                <div class="form-group col-md-12">
                  <label for="environmentName">Nombre del Ambiente</label>
                  <input type="text" class="form-control" id="environmentName" name="environmentName" placeholder="Escriba el nombre aqui...">
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="environmentType">Tipo de Instructor</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="environmentType" value="Virtual">
                      <label class="form-check-label">Virtual</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="environmentType" value="Presencial">
                      <label class="form-check-label">Presencial</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="environmentCapacity">Capacidad</label>
                    <input type="number" class="form-control" id="environmentCapacity" name="environmentCapacity">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark">
                      Guardar Registro
                    </button>
                  </div>
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