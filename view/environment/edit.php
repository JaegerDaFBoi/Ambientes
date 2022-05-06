<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detalles del Ambiente</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>instructor/index">Lista de Instructores</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <div class="row">
    <div class="col-md-6">

    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-primary">
            <?php foreach ($this->environment as $environment) { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Indice</label>
                  <p><?php echo $environment->id; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label>Nombre</label>
                  <p><?php echo $environment->nombre; ?><p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label>Tipo</label>
                  <p><?php echo $environment->tipo; ?><p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label>Aforo</label>
                  <p><?php echo $environment->aforo; ?><p>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <label>Formulario de actualización de datos</label>
            </div>
            <form role="form" method="POST" action="<?php echo APP_URL; ?>environment/update">
            <?php foreach ($this->environment as $environment) { ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" id="idEnvironment" name="idEnvironment" value="<?php echo $environment->id; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="instructorName">Nombre del Ambiente</label>
                    <input type="text" class="form-control" id="environmentName" name="environmentName" value="<?php echo $environment->nombre; ?>">
                  </div>
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
                    <input type="number" class="form-control" id="environmentCapacity" name="environmentCapacity" value="<?php echo $environment->aforo; ?>">
                  </div>
                </div>  
              </div>
                <?php } ?>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
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