<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Eliminar Ambiente</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>environment/index">Lista de Ambientes</a></li>
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
      <form role="form" method="POST" action="<?php echo APP_URL; ?>environment/confirmDelete">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h5 class="card-title">Datos del ambiente</h5>
            </div>
            <?php foreach ($this->environment as $environment) { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <label>Indice</label>
                  <input readonly type="text" class="form-control" id="idEnvironment" name="idEnvironment" value="<?php echo $environment->id; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Nombre</label>
                  <input readonly type="text" class="form-control" id="environmentName" name="environmentName" value="<?php echo $environment->nombre; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Tipo de ambiente</label>
                  <input readonly type="text" class="form-control" id="environmentType" name="environmentType" value="<?php echo $environment->tipo; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Capacidad</label>
                  <input readonly type="text" class="form-control" id="environmentCapacity" name="environmentCapacity" value="<?php echo $environment->aforo; ?>">
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